<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Mobile;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $data = Student::get();
        $data = Student::with('mobileRelation')->get();
        // dd($data);
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');

        // 學生
        $data = new Student;
        $data->name = $input['name'];
        $data->save();

        // 手機
        $id = $data->id;
        $item = new Mobile;
        $item->student_id = $id;
        $item->mobile = $input['mobile'];
        $item->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // dd("Hello students - $student Edit");
        $id = $student->id;
        $data = Student::where('id', $id)->with('mobileRelation')->first();
        // dd($data);
        // $data = $student;
        // dd($data);
        return view('student.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // $input = $request->all();
        $input = $request->except('_token', '_method');

        // update students
        $id = $student->id;
        $data = Student::where('id', $id)->first();
        $data->name = $input['name'];
        $data->save();

        // update mobiles

        return redirect()->route('students.index');

        // dd($input);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
