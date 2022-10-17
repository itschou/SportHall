<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function savechanges(Request $request){

        foreach (config()->get('config.site') as $key => $value){
            config('nom', 'COUCOU');
        };
        foreach (config()->get('config.medias') as $key => $value){
            config($key, $request->input($key));
        };

        foreach (config()->get('config.sports') as $key => $value){
            config($key, $request->input($key));
        };
        

        return redirect()->route('site')->withSuccess('Les informations ont bien été enregistré !');

    }
}
