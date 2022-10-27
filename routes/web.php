<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPaiementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $users = DB::table('users')->select('id', 'nom', 'prenom', 'age', 'email', 'tel', 'CIN')->get();
    $usercount = DB::table('users')->select('id', 'etat_payement', 'sport')->where('etat_payement', '=', true)->get();

    if (config()->get('config.install') == false) {
        return view('utils/install', compact('users', 'usercount'));
    } else {
        return view('acceuil', compact('users', 'usercount'));
    }
})->name('acceuil');


Route::get('user', function () {

    return view('utilisateur/user');
})->name('user')->middleware(['auth', 'installcheck']);

Route::post('user-operations', [UserController::class, 'operations'])->name('user.operations');
Route::post('user-changepass', [UserController::class, 'changePass'])->name('user.changepass');
Route::post('install-ui' , [InstallController::class, 'install'])->name('site.install');
Route::post('changecolor', [ThemeController::class, 'colors'])->name('changeColor');
Route::post('changeimageprofil', [UserController::class, 'uploadimage'])->name('changeimageprofil');
// Route::post('user-select', [UserController::class, 'select'])->name('user.select');


Route::get('admin', function () {


    if (auth()->user()->role == "admin") {
        $users = DB::table('users')->select('id', 'nom', 'prenom', 'age', 'email', 'tel', 'CIN', 'sport', 'etat_payement')->get();
        $usercount = DB::table('users')->select('id', 'etat_payement', 'sport')->where('etat_payement', '=', true)->get();
        $users_Paiement_No = DB::table('users')->select('id', 'nom', 'prenom', 'age', 'email', 'tel', 'CIN', 'sport', 'etat_payement')->where('etat_payement', '=', false)->get();
        $users_Paiement_Yes = DB::table('users')->select('id', 'nom', 'prenom', 'age', 'email', 'tel', 'CIN', 'sport', 'etat_payement')->where('etat_payement', '=', true)->get();
        // $change_Paiement_Yes = DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('id', '=', $users)->update(['etat_payement' => true]);
        return view('administrateur/admin', compact('users', 'users_Paiement_No', 'users_Paiement_Yes', 'usercount'));
    } else {
        return abort(403);
    }
})->name('admin')->middleware(['auth', 'installcheck']);


Route::get('site', function () {
        return view('administrateur/site');

})->name('site')->middleware(['auth', 'installcheck']);

Route::post('sitepanel', [SiteController::class, 'savechanges'])->name('sitepanel')->middleware(['auth', 'installcheck']);


// Authentification

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('createadmin', [CustomAuthController::class, 'createAdmin'])->name('createadmin');
Route::get('deleteadmin', [CustomAuthController::class, 'deleteAdmin'])->name('deleteadmin');

// Authentification
