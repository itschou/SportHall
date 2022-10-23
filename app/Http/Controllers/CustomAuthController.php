<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public $timestamps = false;
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user')
                ->withSuccess('Bienvenue ' . auth()->user()->nom . ' ' .  auth()->user()->prenom .' vous vous êtes connecté avec succès !');
        }

        return redirect("login")->withError('Désolé mais votre email/mot de passe n\'est pas valide !');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' => 'required|email|unique:users',
            'tel' => 'required',
            'CIN' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Vous vous êtes inscrit !');
    }

    public function create(array $data)
    {

        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'age' => $data['age'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'CIN' => $data['CIN'],
            'sport' => $data['sport'],
            'password' => Hash::make($data['password'])
        ]);

        
    }

    public function createAdmin(){

        User::create([
            'nom' => 'Afiri',
            'prenom' => 'Chouaib',
            'age' => '24-03-2003',
            'email' => 'ouwoxpro@gmail.com',
            'tel' => '0622862292',
            'CIN' => 'bdbqsdq',
            'sport' => 'Judo',
            'role' => 'admin',
            'password' => Hash::make('azerty'),
            'confirmation_inscription' => true
        ]);

        return 'Utilisateur admin crée !';


        
    }


    public function deleteAdmin(){

        User::where('email', '=', 'ouwoxpro@gmail.com')->delete();



        return 'Utilisateur admin supprimé !';


        
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
