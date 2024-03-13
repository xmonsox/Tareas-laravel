<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return view('index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
        //return ($request);
        Note::create($request->all());
        return redirect()->route('index')->with('success', 'Nota Creada');

    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, Note $note)
    {   
        $note->update($request->all());
        return redirect()->route('index')->with('success', 'Nota Creada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        return redirect()->route('index')->with('danger', 'Nota Creada');
    }
}
