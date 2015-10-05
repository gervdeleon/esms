<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $students = Student::all();

            return view('pages.displayStudents')->withStudents($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Request::all();
        if (Student::find($data['studentID'])) {
                return back()->withInput();
            } else {
                $students = new Student;
                $students->studentID = $data['studentID'];
                $students->firstname = $data['firstname'];
                $students->lastname = $data['lastname'];
                $students->middlename = $data['middlename'];
                $students->department = $data['department'];
                $students->course = $data['course'];
                $students->year = $data['year'];
                $students->save();
                return Redirect::to('/displayStudents');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $student = Student::find($id);

            return view('pages.editStudent', compact('student'));
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
        $studentUpdate=Request::all();
        $student=Student::find($id);
        $student->update($studentUpdate);
        $student->save();
        return Redirect::route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Student::find($id)->delete();
           return Redirect::back();
    }
}
