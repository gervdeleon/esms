<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subject;
use Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $subjects = Subject::all();

            return view('pages.add')->withSubjects($subjects);
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
        $rules=[
            'subjcode' => 'required|numeric',
            'subjname'=>'required',
            'subjsched' => 'required',
            'subjtimestart'=>'required',
            'subjtimeend' => 'required',
            'subjteach'=>'required',
            'subjroom'=>'required'
        ];
        $messages=[
        'subjcode.numeric'=>'The Subject Code should not be a character.',
        ];
        $validation=Validator::make($data, $rules, $messages);
        if($validation->passes()){
            if(Subject::find($data['subjcode'])){
                return Redirect::back()->withInput();
            }
            else{
                $subjects = new Subject;
                $subjects->subjectCode = $data['subjcode'];
                $subjects->subjectName = $data['subjname'];
                $subjects->subjectSchedule = $data['subjsched'];
                $subjects->subjectTimeStart = $data['subjtimestart'];
                $subjects->subjectTimeEnd = $data['subjtimeend'];
                $subjects->subjectTeacher = $data['subjteach'];
                $subjects->subjectRoom = $data['subjroom'];
                $subjects->save();
                return Redirect::to('/display');
            }
        }
        else{
            return Redirect::back()->withInput()->withErrors($validation);
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
             $subject = Subject::find($id);

            return view('pages.editSubject', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $subjectUpdate=Request::all();
        $subject=Subject::find($id);
        $subject->update($subjectUpdate);
        $subject->save();
        return Redirect::route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Subject::find($id)->delete();
           return Redirect::back();
    }
}
