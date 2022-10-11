<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPaiementController;
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
    $users = DB::table('users')->select('id','nom','prenom','age','email')->get();
    return view('acceuil', compact('users'));
})->name('acceuil');


Route::get('user', function(){
    return view('user');
})->name('user');

Route::get('user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');


Route::get('admin', function(){
    if(auth()->user()->role == "admin"){
        $users = DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->get();
        $usercount = DB::table('users')->select('id', 'etat_payement')->where('etat_payement', '=', true)->get();
        $users_Paiement_No = DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('etat_payement', '=' ,false)->get();
        $users_Paiement_Yes = DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('etat_payement', '=' ,true)->get();
        // $change_Paiement_Yes = DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('id', '=', $users)->update(['etat_payement' => true]);
        return view('admin' , compact('users', 'users_Paiement_No', 'users_Paiement_Yes', 'usercount'));
    }else{
        return abort(403);
    }
    ;
})->name('admin');

// Route::get('changePayement/{id}', ['as' =>'changePayement', 'uses' => 'UserPaiementController@index'])->name('changePayement');
// Route::put('/changePayementset/{id}', [UserPaiementController::class], 'change');


Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
