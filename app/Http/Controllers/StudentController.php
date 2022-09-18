<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewStudent;

class StudentController extends Controller
{

    public function index()
    {
        $students = NewStudent::all();
        return view('Student.index',compact('students'));

    }

    public  function create()
    {
        return view('Student.create');
    }

    public function store(Request $request)
    {
        $student = new NewStudent();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->image = $request->file('image')->store('image', 'public');
        $student->status = $request->input('status');
        $student->save();
        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $students = NewStudent::find($id);
        return view('Student.update',compact('students'));
    }

    public function update(Request $request)
    {
        $stud_id = $request->st_id;
        $student = NewStudent::find($stud_id);
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        if($request->hasFile('image')){
            $student->image = $request->file('image')->store('image', 'public');
        }else{
            $student->image = $student->image;
        }
        $student->status = $request->input('status');
        $student->save();

        return redirect()->route('student.index');
    }

    public function delete($id)
    {
        $stud = NewStudent::find($id)->delete();
        return redirect()->route('student.index');
    }

    public function viewStudent($id)
    {
        $student = NewStudent::find($id);

        return view('Student.view',compact('student'));
    }
}
