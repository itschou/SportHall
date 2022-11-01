<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageAnnonceController extends Controller
{
    function addmessage(Request $request){

            Message::create(['message' => $request->input('annoncemessage')]);
            return redirect()->route('admin')->withSuccess('Votre message a bien été ajouté !');
        

    }
}
