<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Profile;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->save();

        $profile = new Profile();
        $profile->address = $request->input('address');
        $profile->phone_number = $request->input('phone_number');
        $student->profile()->save($profile);

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->save();

        $profile = $student->profile;
        $profile->address = $request->input('address');
        $profile->phone_number = $request->input('phone_number');
        $profile->save();

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->profile()->delete();
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}