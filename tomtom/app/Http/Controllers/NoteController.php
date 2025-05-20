<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NoteController extends Controller
{
    public function index(){
        $notes = Notes::all(); 
        return view('notes.index', compact('notes'));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        Notes::create(['title' => $request['title'], 'content' => $request['content']]);
        return redirect('/index');
    }

    public function show(){
        return view('notes.show');
    }

    public function destroy(){
        Notes::destroy(['title' => $request['title'], 'content' => $request['content']]);
        return redirect('/index');
    }
}
