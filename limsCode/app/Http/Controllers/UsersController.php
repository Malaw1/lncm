<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unite;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all() ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        ->get();
        $unites = Unite::all();
        return view('users.listeperso', compact('users', 'unites'));
    }
}
