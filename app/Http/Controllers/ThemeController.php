<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ThemeController extends Controller
{
    public function colors(Request $request){

        if($request->input('couleurs') == null || $request->input('couleurs') == 'bleu'){
            Config::write('config.color.primary', '#4DA8DA');
            Config::write('config.color.secondary', '#30b1ff');
            Config::write('config.color.secondarybuttons', '#97d8ff');
            Config::write('config.color.background', '#12232E');
        }elseif($request->input('couleurs') == 'orange'){
            Config::write('config.color.primary', '#ff7523');
            Config::write('config.color.secondary', '#ffa36c');
            Config::write('config.color.secondarybuttons', '#ffd1b6');
            Config::write('config.color.background', '#12232E');
        }elseif($request->input('couleurs') == 'vert'){
            Config::write('config.color.primary', '#a8c545');
            Config::write('config.color.secondary', '#68c545');
            Config::write('config.color.secondarybuttons', '#45c562');
            Config::write('config.color.background', '#12232E');
        }elseif($request->input('couleurs') == 'rouge'){
            Config::write('config.color.primary', '#e31110');
            Config::write('config.color.secondary', '#f35a59');
            Config::write('config.color.secondarybuttons', '#f9acac');
            Config::write('config.color.background', '#12232E');
        }

        return redirect('admin')->withSuccess('Le thème '. $request->input('couleurs') . ' a été appliqué avec succès');

    }
}
