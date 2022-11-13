<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use App\JobVacancy;
use App\Answer;
use App\Psikotest;
use Illuminate\Support\Facades\DB;
class PsikotestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Psikotest::all();
        // dd($soal);
        $data = DB::table('psikotests')->select('psikotests.start','psikotests.end')->distinct()->get();
       
        
        // dd($job);
        return view('psikotests.index', compact('data' ));
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
        foreach ($request->pertanyaan as $key => $val) {
                $create = new Psikotest();
                $create->start = $request->start;
                $create->end = $request->end;
                $create->question = $request->pertanyaan[$key];
                $create->answer_a = $request->a[$key];
                $create->answer_b = $request->b[$key];
                $create->answer_c = $request->c[$key];
                $create->answer_d = $request->d[$key];
                $create->answer_correct = $request->jawaban[$key];
                $create->save();
                // $create->jobvacancies()->sync($create->id);
        }

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function soal()
    {
       
        $answer = Answer::all();

        $soal = DB::select('SELECT distinct a.* from psikotests a');
        // dd($soal[0]);
        
        $answers = [];
        foreach ($answer as $ans) {
            $answers[] = $ans->user_id;
        }
        // dd($answers);

        return view('psikotests.soal', compact('soal','answers'));
    }
}