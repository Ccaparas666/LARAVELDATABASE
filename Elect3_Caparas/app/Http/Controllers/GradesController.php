<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grades;
use App\Models\studentInfo;
use App\Models\enrolledsubjects;
class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grades = Grades:: all();
        return view('grades.index' , compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $grades = new Grades();
        $grades->sno = $request->xsno;
        $grades->esNo = $request->xesNo;
        $grades->prelim = $request->xprelim;
        $grades->midterm = $request->xmidterm;
        $grades->final = $request->xfinal;
        $grades->remarks = $request->xremarks;
        $grades->final = $request->xfinal;
        $grades->save();
        return redirect()->route('grades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getSubjectInfo(){
        $enrolledsubjects = enrolledsubjects::all();
        $test = studentinfo::all();
        return view('grades.add', compact('enrolledsubjects', 'test'));
    }

}
