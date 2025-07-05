<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        $user =  [
            'name' => 'Dummy',
            'email' => 'test23df@gmail.com',
            'password' => Hash::make("testcase")
        ];

        $user = User::create($user);

        event(new UserCreated($user));
    }
}
