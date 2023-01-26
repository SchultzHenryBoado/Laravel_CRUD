<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "last_name" => 'required',
            "first_name" => 'required',
            "gender" => 'required',
            "age" => 'required'
        ]);

        Student::create($validated);

        return redirect('/home');
    }

    public function destroy(Request $request, Student $student)
    {
        $student->delete();

        return redirect('/home');
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            "last_name" => ['required'],
            "first_name" => ['required'],
            "gender" => ['required'],
            "age" => ['required']
        ]);

        $student->update($validated);

        return redirect('/home');
    }
}
