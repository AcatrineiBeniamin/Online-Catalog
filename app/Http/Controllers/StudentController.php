<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.list', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $student = new Student();

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->parent_name = $request->parent_name;
        $student->parent_phone = $request->parent_phone;
        $student->enrollment_date = $request->enrollment_date;
        $student->status = $request->status;

        $student->save();

        return redirect('/students');
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }
}
