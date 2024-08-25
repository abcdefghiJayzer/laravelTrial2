<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {


        $ideas = Idea::all();



        return view("dashboard",[
            "ideas"=> Idea::orderBy('created_at','DESC')->paginate(5),
        ]);
    }
}







