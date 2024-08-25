<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class IdeaController extends Controller
{
    public function show(Idea $idea){

        return view("ideas.show",[
            'idea' => $idea
        ]);
    }


    public function edit(Idea $idea){

        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea){

        request()->validate([
            "content"=> "required|min:3|max:240",
        ]);

        $idea -> content = request()->get('content', '');
        $idea -> save();

        return redirect()->route('idea.show', $idea->id)->with('success','Idea updated successfully!');


    }

    public function store(){

        request()->validate([
            "content"=> "required|min:3|max:240",
        ]);

        $idea = new Idea([
            'content' => request()->get('content',''),

        ]);
        $idea->save();

        return redirect()->route('dashboard')->with('success','Idea created successfully!');
    }

    public function destroy($id){
        $idea = idea::where('id', $id)->firstOrFail();

        $idea->delete();

        return redirect()->route('dashboard')->with('success','Idea deleted successfully!');
    }



}
