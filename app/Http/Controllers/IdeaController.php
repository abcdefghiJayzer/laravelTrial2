<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class IdeaController extends Controller
{
    public function store(){

        $idea = new Idea([
            'content' => request()->get('idea',''),

        ]);
        $idea->save();

        return redirect()->route('dashboard')->with('success','');
    }


}
