<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
});


Route::get('user', function(){
    return view('user');
})->name('user');


Route::get('admin', function(){
    if(auth()->user()->role == "admin"){
        return view('user');
    }else{
        return abort(403);
    }
    ;
})->name('admin');


Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
