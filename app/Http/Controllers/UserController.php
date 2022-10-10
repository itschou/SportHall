<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    // public function index(){
    //     $utilisateur = User::all();
    //     return view('utilisateur.index', compact('utilisateur'));
    // }

    public function search(Request $request, $id){
        // DB::table('users')->select('id','nom','prenom','age','email', 'sport', 'etat_payement')->where('id', '=', $id)->update(['etat_payement' => true]);
        // User::where('id', $id)->update(['etat_payement' => true]);
        $utilisateur = User::find($id);
        return $utilisateur->nom + $utilisateur->prenom + $utilisateur->etat_payement + $utilisateur->email;

    }

    public function delete(Request $request){
        // User::where('email', '=' ,$request->input('email'))->delete();
        DB::table('users')->where('email', '=' , $request)->delete();
        // return redirect()->route('admin');
      }




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
