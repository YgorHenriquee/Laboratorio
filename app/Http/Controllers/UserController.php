<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('administrador', compact('users'));
    }

    public function destroy ($id){

        User::findOrFail($id)->delete();

        return redirect('/administrador')->with('successo','Utilizador removido');
    }
    

}

