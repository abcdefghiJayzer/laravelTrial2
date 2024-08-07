<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){

        $users = [
            [
                "name"=> "Joseph",
                "email"=> "joseph@gmail.com",
            ],
            [
                "name"=> "John",
                "email"=> "John@gmail.com",
            ],
            [
                "name"=> "Troy",
                "email"=> "troy@yahoo.com",
            ]
        ];

        return view(
            "profile",
            [
                "users"=>  $users
            ]
        );
    }

}

