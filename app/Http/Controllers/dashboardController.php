<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {

        $users = [
            [
                "name"=> "Joseph",
                "email"=> "joseph@gmail.com",
            ],
            [
                "name"=> "John",
                "email"=> "John@gmail.com",
            ]
            ];

            return view(
                "dashboard",
            [
                "users"=> $users
            ]
        );
    }
}







