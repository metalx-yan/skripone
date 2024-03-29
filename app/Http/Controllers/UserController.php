<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Student;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = User::all();
        return view('users.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all(),str_replace(' ','',$request->username));
        $request->validate([
            'username' =>  'required|unique:users',
        ]);
      
        User::create([
            'name' => $request->username,
            'username' => str_replace(' ','',$request->username),
            'password' => $request->password,
            'role_id' => $request->role_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Student::create([
            'name' => $request->username,
            'matematika' => 0,
            'inggris' => 0,
            'biologi' => 0,
            'ipa' => 0,
        ]);

        return redirect()->route('users.index');
    }

    public function created(Request $request)
    {
        $request->validate([
            'username' =>  'required|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
      
        User::create([
            'name' => $request->username,
            'username' => str_replace(' ','',$request->username),
            'password' => $request->password,
            'role_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Student::create([
            'username' => str_replace(' ','',$request->username),
        ]);
        return redirect()->route('siswas');
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
        $get = User::find($id);

        return view('users.edit', compact('get'));
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
        $request->validate([
            'username'               =>  "required|unique:users,username,$id|between:2,8",
        ]);

        $update = User::find($id);
        $update->name = str_replace(' ', '', $request->username);
        $update->username = $request->username;
        $update->password = $request->password;
        $update->role_id = $request->role_id;
        $update->updated_at = Carbon::now();
        $update->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = User::find($id);
        $get->delete();

        return redirect()->back();
    }
}
