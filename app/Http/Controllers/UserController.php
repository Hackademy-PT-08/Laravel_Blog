<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //Mostro la vista profilo
    public function index () {

        $current_user_id = auth()->user()->id;

        $user = User::find($current_user_id);

        return view('users.profile', ['user' => $user]);

    }

    // Mando alla vista i relativi articoli dell'utente loggato
    
    // public function profile () {

    //     $current_user_id = auth()->user()->id;

    //     $user_articles = User::find($current_user_id);

    //     return view('users.profile', [

    //         'article' => $user_articles->articles

    //     ]);

    // }
}