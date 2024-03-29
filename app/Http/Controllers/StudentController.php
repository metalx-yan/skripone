<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Student::all();
        return view('students.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' =>  'required|unique:users',
        ]);
      
        $st = Student::create($request->all());
        // dd($st->id);
        User::create([
            'name' => $request->name,
            'username' => str_replace(' ', '', $request->name),
            'password' => 'user',
            'role_id' => 2,
            'student_id' => $st->id
        ]);

        return redirect()->route('students.index');
    }

    function get_all()
    {
        $all = Student::all();
        // dd($all);
        return view('students.all', compact('all'));
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

    public function result()
    {
        $soal = DB::select('SELECT c.name,COUNT(CASE WHEN b.answer_correct = a.result then b.answer_correct ELSE NULL END) as answer , COUNT(b.id) as jumlah from answers a 
        join psikotests b on 
        a.psikotest_id = b.id 
        join users c on
        a.user_id = c.id
        group by c.name');
        // dd($soal);
        return view('students.result', compact('soal'));
    }

    public function result_id($id)
    {
        $soal = DB::select("SELECT c.name,COUNT(CASE WHEN b.answer_correct = a.result then b.answer_correct ELSE NULL END) as answer , COUNT(b.id) as jumlah from answers a 
        join psikotests b on 
        a.psikotest_id = b.id 
        join users c on
        a.user_id = c.id
        where c.id = $id
        group by c.name");

        return view('students.resultid', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get = Student::find($id);
        return view('students.edit',compact('get'));
    }

    public function view($id)
    {
        $gete = DB::select("SELECT a.* FROM students a right join users c on a.username = c.name where c.id = '$id'");
        // dd($gete);
        // if (count($gete) > 0) {
            $get = $gete[0];
        // } else {
        //     $get = $id;
        // }

        return view('students.view',compact('get'));
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
        // dd($request->all());
        Student::find($id)->update($request->all());
        // dd($request->all(),$id);
        return redirect()->route('students.index');
    }

    public function updatesis(Request $request, $id)
    {
        // dd($request->all());
        Student::find($id)->update($request->all());
        // dd($request->all(),$id);
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Student::find($id);
        $get->delete();

        return redirect()->back();
    }
}
