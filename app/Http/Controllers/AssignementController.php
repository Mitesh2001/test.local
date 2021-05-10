<?php

namespace App\Http\Controllers;

use App\Models\Assignement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignementController extends Controller
{
    public $rules = [
        'classes_id' => 'required',
        'topic' => 'required',
        'description' => 'required',
        'submission_date' => 'required',
        'submission_time' => 'required',
        'max_marks' => 'required|numeric',
        'file' => 'required'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assignement', ['assignements' => Assignement::paginate(4)]);
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
        $request->validate($this->rules);
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
        return redirect()->route('assignement.index')->with('success', 'Data Inserted !');
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
        if ($request->file) {
            $request->validate($this->rules);
            Assignement::where('id', $id)->update([
                'classes_id' => $request->classes_id,
                'topic' => $request->topic,
                'description' => $request->description,
                'submission_date' => $request->submission_date,
                'submission_time' => $request->submission_time,
                'max_marks' => $request->max_marks,
                'file' => $request->file->getClientOriginalName()
            ]);
            $file = Assignement::where('id', $id)->first()->file;
            Storage::delete('public/uploads/'.$file);
            $request->file('file')->storeAs('uploads', $request->file->getClientOriginalName(), 'public');
        } else {
            $this->rules['file'] = '';
            $request->validate($this->rules);
            Assignement::where('id', $id)->update([
                'classes_id' => $request->classes_id,
                'topic' => $request->topic,
                'description' => $request->description,
                'submission_date' => $request->submission_date,
                'submission_time' => $request->submission_time,
                'max_marks' => $request->max_marks
            ]);
        }
        return redirect()->route('assignement.index')->with('success', 'Data Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Assignement::where('id', $id)->first()->file;
        Storage::delete('public/uploads/'.$file);
        Assignement::where('id', $id)->delete();
        return redirect()->route('assignement.index')->with('success', 'Data Deleted !');
    }

    public function downloadFile($id)
    {
        $file = Assignement::where('id', $id)->first()->file;
        if (Storage::exists('public/uploads/'.$file)) {
            return Storage::download('public/uploads/'.$file);
        } else {
            return redirect()->route('assignement.index')->with('success', 'File not Available !');
        }
    }
}
