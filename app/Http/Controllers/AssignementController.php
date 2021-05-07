<?php

namespace App\Http\Controllers;

use App\Models\Assignement;
use Illuminate\Http\Request;

class AssignementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assignement', ['assignements' => Assignement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_assignement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file()) {
            $request->file('file')->storeAs('uploads', $request->file->getClientOriginalName(), 'public');
        }
        Assignement::create([
            'classes_id' => $request->classes_id,
            'topic' => $request->topic,
            'description' => $request->description,
            'submission_date' => $request->submission_date,
            'submission_time' => $request->submission_time,
            'max_marks' => $request->max_marks,
            'file' => $request->file->getClientOriginalName()
        ]);
        return redirect()->route('assignement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('edit_assignement', ['assignement' => Assignement::where('id', $id)->first()]);
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
        Assignement::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('assignement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignement::where('id', $id)->delete();
        return redirect()->route('assignement.index');
    }
}
