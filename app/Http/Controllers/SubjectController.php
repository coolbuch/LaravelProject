<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function render(Request $request) {
        $subjects = Subject::all();
        return view('subject', array('subjects' => $subjects));
    }

    public function create(Request $request) {
        $data = $request->validate([
            "name" => "required|max:255",
        ]);
        Subject::create($data);
        return redirect('/subject');

    }
}
