<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Participants;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UserController extends Controller
{
    public function profile()
    {
        if(Auth::check())
        {
            $participant = Participants::where('user', Auth::user()->username)->get();
            $user = User::where('id', Auth::id())->first();
            return view('views.profile', ['participants' => $participant, 'user'=> $user]);
        }
        else
        {
            $participant = Participants::where('user', Auth::id())->get();
            $user = User::where('id', Auth::id())->first();
            return view('views.profile', ['participants' => $participant, 'user'=> $user]);
        }
    }

    public function uploadDP(Request $request)
    {
        $participant = User::where('id', Auth::user()->id)->first();
        $file = $request->image;
        $path = $file->store('public/dp');
        $participant->image_url = $path;
        return redirect('/profile');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->year = $request->year;
        $user->institute = $request->institute;
        $user->phone = $request->phone;
        $user->course = $request->course;
        $user->username = $request->username;
        $user->save();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            return redirect('/user/dashboard');
        }
        else
        {
            return back();
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            return redirect('/user/dashboard');
        }
        else
        {
            return back();
        }
    }
}
