<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = new Student();
        return view ('students.index', ['data' => $student->Paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = Group::all();
        return view ('students.create', ['data'=>$group]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student();
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->group_id = $request->input('group_id');
        $student->birth_date = $request->input('birth_date');

        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = new Student;
        $group = Group::all();
        return view('students.edit', ['data' => $student->find($id),'select_group' => $group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->group_id = $request->input('group_id');
        $student->birth_date = $request->input('birth_date');
        $student->save();

               return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();

        return redirect()->route('students.index');
    }
}
