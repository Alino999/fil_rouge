<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Register extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'pseudo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'genre' => ['required', 'string', 'max:20'],
            'telephone' => ['required', 'string', 'max:20'],
        ]);

        $user= new User();
        $user->nom=$request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->pseudo=$request->input('pseudo');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->genre=$request->input('genre');
        $user->telephone=$request->input('telephone');
        $user->save();

        if (!is_null($user)) {
            return back()->with('succes', 'votre inscription a été effectuée');
        }
    }
}
