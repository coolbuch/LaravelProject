<?php

namespace App\Http\Controllers;

use App\Models\StudentSubject;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    public function render(Request $request) {
        $studentSubjects = StudentSubject::all();
        return view('studentSubject', array('studentSubjects' => $studentSubjects));
    }

    public function create(Request $request) {
        $data = $request->validate([
            "student_id" => "required|exists:App\Models\Student,id",
            "subject_id" => "required|exists:App\Models\Subject,id",

        ]);
        StudentSubject::create($data);
        return redirect('/studentSubject');

    }
}
