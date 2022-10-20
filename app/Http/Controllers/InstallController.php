<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class InstallController extends Controller
{
    public function install(Request $request){

        // Input administrateur

        define('admincases', ['nom', 'prenom', 'datenaissance', 'email', 'tel', 'CIN', 'mdp']);

        // Récuperer les champs dans la config et les remplir

        foreach (config()->get('config.site') as $key => $value) {
            if($request->input($key) == null){
                Config::write('config.site.' . $key , '');
            }else{
                Config::write('config.site.' . $key , $request->input($key));
            }
        };

        foreach (config()->get('config.medias') as $key => $value) {
            if($request->input($key) == null){
                Config::write('config.medias.' . $key , '');
            }else{
                Config::write('config.medias.' . $key , $request->input($key));
            }
        };

        User::create([
            'nom' => $request->input(admincases[0]),
            'prenom' => $request->input(admincases[1]),
            'age' => $request->input(admincases[2]),
            'email' => $request->input(admincases[3]),
            'tel' => $request->input(admincases[4]),
            'CIN' => $request->input(admincases[5]),
            'sport' => 'Judo',
            'role' => 'admin',
            'password' => Hash::make($request->input(admincases[6])),
            'confirmation_inscription' => true
        ]);

        Config::write('config.install' , true);


    }
}
