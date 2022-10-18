<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;



class SiteController extends Controller
{
    public function savechanges(Request $request)
    {

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

        foreach (config()->get('config.sports') as $key => $value) {
            if($request->input($key) == null){
                Config::write('config.sports.' . $key , '');
            }else{
                Config::write('config.sports.' . $key , $request->input($key));
            }
        };


        return redirect()->route('site')->withSuccess('Les informations ont bien été enregistré ! : ');
    }
}
