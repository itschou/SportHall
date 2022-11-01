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
            } elseif ($request->input('ope') == 'supprimerclient') {
                DB::table('users')->where('email', '=', $request->input('personmail'))->delete();
                return redirect()->route('admin')->withSuccess('Le client ' . $request->input('personmail') . ' a été supprimé avec succès');
            } elseif ($request->input('ope') == 'resetmdp') {

                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('password' => Hash::make('123456')));
                return redirect()->route('admin')->withSuccess('Nouveau mot de passe : (123456) pour le client' . $request->input('personmail'));
            } elseif ($request->input('ope') == 'addadmin') {

                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('role' => 'admin'));
                return redirect()->route('admin')->withSuccess('Vous venez de donner le role Administrateur au client : ' . $request->input('personmail'));
            } elseif ($request->input('ope') == 'deladmin') {

                DB::table('users')->where('email', '=', $request->input('personmail'))->update(array('role' => 'client'));
                return redirect()->route('admin')->withSuccess('Vous venez de donner le role client au client : ' . $request->input('personmail'));
            }
        } else {

            return redirect()->route('admin')->withError('Erreur, le client ' . $request->input('personmail') . ' n\'éxiste pas !');
        }
    }


    public function changePass(Request $request)
    {
        if (Hash::check($request->input('mdp'), auth()->user()->password)) {
            return redirect()->route('user')->withError('Erreur, veuillez entrer un mot de passe différent du mot de passe actuelle');
        } else {
            DB::table('users')->where('CIN', '=', auth()->user()->CIN)->update(array('password' => Hash::make($request->input('mdp'))));
            return redirect()->route('user')->withSuccess('Votre mot de passe a bien été changé !');
        }
    }


    public function uploadimage(Request $request)
    {
        
        $image_path = public_path() . '\storage\profile\\' . auth()->user()->image;
        $image_path_dontdelete = public_path() . '\storage\profile\defaultuserimage.png';

        if ($request->input('bouttonuserimage') == "confirmer") {
            if ($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('profile', $filename, 'public');
                
                
                if (file_exists($image_path) != $image_path_dontdelete) {
                    @unlink($image_path);
                }


                DB::table('users')->where('CIN', '=', auth()->user()->CIN)->update(array('image' => $filename));

                return redirect()->route('user')->withSuccess('Votre photo de profil a été changé avec succès !');


            } else {

                return redirect()->route('user')->witherror('Erreur vous n\'avez ajouté aucune image !');

            }

        } else {

            if (file_exists($image_path) && $image_path != $image_path_dontdelete) {

                @unlink($image_path);

            } else {

                return redirect()->route('user')->witherror('Erreur vous n\'avez aucune image a supprimer !');

            }

            DB::table('users')->where('CIN', '=', auth()->user()->CIN)->update(array('image' => 'defaultuserimage.png'));

            return redirect()->route('user')->withSuccess('Votre photo de profil a été supprimé avec succès !');
        }
    }
}
