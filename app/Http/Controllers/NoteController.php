<?php

namespace App\Http\Controllers;

use App\Note;
use App\NoteType;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $noteTypes = NoteType::all();
        return view('notes.list', compact('notes', 'noteTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = NoteType::all();
        return view('notes.create', compact('notes', 'types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->type_id = $request->input('type_id');
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
//        dd($note);
        return view('notes.show', compact('note'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $note = Note::findOrFail($id);
        $types = NoteType::all();
        return view('notes.edit', compact('note', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->type_id = $request->type_id;
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Note::findOrFail($id);
        $type->delete();
        return redirect()->route('notes.index');
    }
}

