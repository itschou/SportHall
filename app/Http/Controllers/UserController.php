<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function operations(Request $request)
    {

        $client = DB::table('users')->where('email', '=', $request->input('personmail'))->first();
        if ($client !== null) {

            if ($request->input('ope') == 'paye') {
                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('etat_payement' => true));
                return redirect()->route('admin')->withSuccess('Votre opération sur le client ' . $request->input('personmail') . ' a été effectué avec succès');

            } elseif ($request->input('ope') == 'nonpaye') {
                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('etat_payement' => false));
                return redirect()->route('admin')->withSuccess('Votre opération sur le client ' . $request->input('personmail') . ' a été effectué avec succès');

            }elseif ($request->input('ope') == 'supprimerclient') {
                DB::table('users')->where('email', '=', $request->input('personmail'))->delete();
                return redirect()->route('admin')->withSuccess('Le client ' . $request->input('personmail') . ' a été supprimé avec succès');

            }elseif ($request->input('ope') == 'resetmdp') {

                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('password' => Hash::make('123456')));
                return redirect()->route('admin')->withSuccess('Nouveau mot de passe : (123456) pour le client' . $request->input('personmail'));
            }

            
        } else {

            return redirect()->route('admin')->withError('Erreur, le client ' . $request->input('personmail') . ' n\'éxiste pas !');
        }
    }


    public function changePass(Request $request){
        if(Hash::check($request->input('mdp'),auth()->user()->password)){
            return redirect()->route('user')->withError('Erreur, veuillez entrer un mot de passe différent du mot de passe actuelle');
        }else{
            DB::table('users')->where('CIN', '=', auth()->user()->CIN)->update(array('password' => Hash::make($request->input('mdp'))));
            return redirect()->route('user')->withSuccess('Votre mot de passe a bien été changé !');
        }
    }
}
