<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::paginate(15);//User::all();
        //dd($users); //trecho de codigo usado para debugar variaveis

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function create() 
    {
        return view('admin.users.create');
    }

    public function store(Request $request) 
    {
        User::create($request->all()); 

        return redirect()->route('users.index');
    }
}
