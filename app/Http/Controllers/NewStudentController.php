<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use Illuminate\Http\Request;


class NewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = NewStudent::all();

//        return view('student_list')->with(compact('students'));
        return view('students',['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = NewStudent::all();
        return view('students',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new NewStudent();
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->image = $request->input('image');
        $student->status = $request->input('status');
        $student->save();
        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $student = NewStudent::find($id);
//        $students = NewStudent::all();
//        return view('students',['student'=>$student,'students'=>$students, 'layout' =>'show']);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = NewStudent::all();
        $student = NewStudent::find($id);
        return view('students',['student'=>$student, 'students'=>$students, 'layout' =>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        dd($id.'update');
        $student = NewStudent::find($id);
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->image = $request->input('image');
        $student->status = $request->input('status');
        $student->save();
        return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = NewStudent::find($id);
        $student->delete();
        return redirect ('/');
    }
}
