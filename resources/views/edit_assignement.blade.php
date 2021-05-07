@extends('master')
@section('title','Create Assignements')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <form method="POST" action="{{route('assignement.update',$assignement->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group my-3">
                <label class="form-lable">Classes Id:</label>
                <input type="number" name="classes_id" class="form-control" value="{{$assignement->classes_id}}" required>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Topic:</label>
                <input type="text" name="topic" class="form-control" value="{{$assignement->topic}}" required>
            </div>
            <div class="form-group my-3">
                <textarea name="description" cols="50" placeholder=" Assignement Description...">{{$assignement->description}}</textarea>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Submission Date:</label>
                <input type="date" name="submission_date" class="form-control" value="{{$assignement->submission_date}}" required>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Submission Time:</label>
                <input type="time" name="submission_time" class="form-control" value="{{$assignement->submission_time}}" required>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Maximum Marks:</label>
                <input type="text" name="max_marks" class="form-control" value="{{$assignement->max_marks}}" required>
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('assignement.index')}}" class="btn btn-outline-info">
                    <i class="fa fa-backward"></i> Back To Home
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
