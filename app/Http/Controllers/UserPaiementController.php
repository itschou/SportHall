<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPaiementController extends Controller
{
    
    // public function index(){
    //     $utilisateur = User::all();
    //     return view('utilisateur.index', compact('utilisateur'));
    // }

    // public function change(Request $request, $id){
    //     // DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('id', '=', $id)->update(['etat_payement' => true]);
    //     User::where('id', $id)->update(['etat_payement' => true]);
    //     $utilisateur = User::find($id);
    //     $utilisateur->etat_payment = false;
    //     $utilisateur->update();
    //     return redirect()->back();

    // }




    // public function paymentUpdate(Request $request){
    //     $request->validate([
    //         'name' =>'required|min:4|string|max:255'
    //     ]);
    //     $user = Auth::user();
    //     $user->name = $request['name'];
    //     $user->save();
    //     return back()->with('message','Profile Updated');
    // }

}