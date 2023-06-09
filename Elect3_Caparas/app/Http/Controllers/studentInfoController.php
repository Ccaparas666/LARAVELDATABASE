<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentInfo;

class studentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $studentinfo = studentInfo:: all();
            return view('students.index' , compact('studentinfo'));
        }
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
        $validateData =$request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' =>['required', 'max:20'],
            'xmiddleName'=>['max:15'],
            'xlastName' =>['required', 'max:20'],
            'xsuffix' =>['max:5'],
            'xcourse' =>['required','max:15'],
            'xyear' =>['required'],
            'xbirthDate' =>['required','date'],
            'xgender' =>['required']
        ]);
        
        $studentinfo = new studentInfo();
        $studentinfo ->idNo=$request->xidNo;
        $studentinfo ->firstName=$request->xfirstName;
        $studentinfo ->middleName=$request->xmiddleName;
        $studentinfo ->lastName=$request->xlastName;
        $studentinfo ->suffix=$request->xsuffix;
        $studentinfo ->course=$request->xcourse;
        $studentinfo ->year=$request->xyear;
        $studentinfo ->birthDate=$request->xbirthDate;
        $studentinfo ->gender=$request->xgender;
        $studentinfo ->save();
        return redirect()->route('students');
        
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $studentinfo = StudentInfo::where('sno', $id)->get();
        return view('students.show', compact('studentinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $studentinfo = StudentInfo::where('sno', $id)->get();
        return view('students.edit', compact('studentinfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData =$request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' =>['required', 'max:20'],
            'xmiddleName'=>['max:15'],
            'xlastName' =>['required', 'max:20'],
            'xsuffix' =>['max:5'],
            'xcourse' =>['required','max:15'],
            'xyear' =>['required'],
            'xbirthDate' =>['required','date'],
            'xgender' =>['required']
        ]);

        $studentinfo = studentInfo::where('sno', $id)
        ->update(
             ['idNo' => $request->xidNo,
             'firstName'=> $request->xfirstName,
             'middleName'=> $request->xmiddleName,
             'lastName'=> $request->xlastName,
             'suffix'=> $request->xsuffix,
             'course'=> $request->xcourse,
             'year'=>$request->xyear,
             'birthDate'=> $request->xbirthDate,
             'gender'=> $request->xgender,
             ]);
        return redirect()->route('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentinfo = studentInfo::where('sno', $id);
       $studentinfo->delete();
       return redirect()->route('students');
    }
}
