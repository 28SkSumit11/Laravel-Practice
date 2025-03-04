<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Post;

class UserController extends Controller
{

    function index($name = 'Dude'){
        return view('welcome', ['name' => $name]);
    }

    function show($name){
        return 'Hello '. ucfirst($name) .'. How are you!';
    }

    function users(){
        $users = User::all();
        return view('users', compact('users'));
    }

    function profileByUser($user){
        $user = User::find($user);
        dd($user->profile);
    }

    function userByProfile($profile){
        $profile = Profile::find($profile);
        dd($profile->user);
    }

    function postByUser($user){
        $user = User::find($user);
        dd($user->posts);
    }

    function userByPost($post){
        $post = Post::find($post);
        dd($post->user);
    }

    function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return view('registration', ['status' => 'Registration Successfully! Name: '.$request->name.' & Email: '. $request->email]);
    }
}
