<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.department')
        ->with('department',Department::orderBy('department','ASC')->get())
        ->with('faculty',Faculty::orderBy('title','ASC')->get())
        ->with('faculties',Faculty::orderBy('faculties_id','ASC')->get());
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
        $this->validate($request, [
            'department' => 'required | min:3',
        ]);
        $department = new Department;

        $department->faculties_id = $request->input('faculty');
        $department->department = $request->input('department');
        $department->save();
        return redirect()->action('DepartmentController@index')
        ->with('success','Department Added')
        ->with('department',Department::orderBy('department','ASC')->get())
        ->with('faculty',Faculty::where('faculties_id',$request->input('faculty'))->first());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->action('DepartmentController@index')
        ->with('success','Deleted Successfully')
        ->with('department',Department::orderBy('department','ASC')->get());
    }
}
