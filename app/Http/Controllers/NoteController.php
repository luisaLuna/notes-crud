<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; 

class NoteController extends Controller
{
    public function getAllNotes(){
        return Note::all()->sortByDesc('created_at');
    }


    public function delete($id) {
        $note = Note::findOrFail($id);
        $note->delete();
        return response(null, 204);
    }
}
