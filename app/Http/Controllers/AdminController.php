<?php

namespace App\Http\Controllers;

use App\Participants;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers()
    {
        $users = User::all()->simplePaginate(30);
        return view('admin.users', ['users'=>$users]);
    }

    public function getParticipants()
    {
        $participants = Participants::all()->simplePaginate(30);
        return view('admin.participants', ['participants'=>$participants]);
    }
}
