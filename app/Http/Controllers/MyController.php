<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Scores;
use Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $scores = Scores::all();

            return view('pages.displayScores')->withScores($scores);
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
        if (Scores::find($data['idnum'])) {
                return back()->withInput();
            } else {
                $scores = new Scores;
                $scores->studentID = $data['idnum'];
                $scores->subjectName = $data['subjCode'];
                $scores->examScore = $data['exScore'];
                $scores->examScore = $data['exTotalScore'];
                $scores->save();
                return Redirect::to('/index');
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
        $score = Scores::find($id);
        return view('pages.editScore', compact('score'));
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
        $scoreUpdate=Request::all();
        $score=Scores::find($id);
        $score->update($scoreUpdate);
        $score->save();
        return Redirect::route('scores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Scores::find($id)->delete();
           return Redirect::back();
    }
}
