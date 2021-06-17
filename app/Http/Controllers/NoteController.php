<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; 

class NoteController extends Controller
{
    public function getAllNotes(){ 
        return Note::all()->sortByDesc('created_at');
    }

    public function update(Request $request, $id) {
        $request = $request->all();
        $updateData = [
                'id' => $id,
                'title' => $request['title'],
                'autor' => $request['author'],
                'description' => $request['description'],
            ];
        $note = Note::findOrFail($id);
        $note->update($updateData);
        $status = 200;
        return response()->json($note,$status);
    }


    public function delete($id) {
        $note = Note::findOrFail($id);
        $note->delete();
        return response(null, 204);
    }
}
