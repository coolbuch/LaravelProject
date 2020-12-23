<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function _HumbugBox7eb78fbcc73e\iter\reduce;

class StudentController extends Controller
{
    public function render(Request $request) {
        $students = Student::all();
        return view('student', array('students' => $students));
    }

    public function create(Request $request) {
        $data = $request->validate([
            "first_name" => "required|max:255",
            "second_name" => "required|max:255",
            "third_name" => "required|max:255",
            "date_birth" => "date_format:Y-m-d",
            "course" => "integer",
        ]);
        Student::create($data);
        return redirect('/student');

    }
}
