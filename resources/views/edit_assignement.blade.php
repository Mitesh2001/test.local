@extends('master')
@section('title','Create Assignements')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <div class="col-sm-4">
            <form method="POST" action="{{route('assignement.update',$assignement->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Classes Id:
                        <input type="number" name="classes_id" class="form-control" value="{{$assignement->classes_id}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Topic:
                        <input type="text" name="topic" class="form-control" value="{{$assignement->topic}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Description:
                        <textarea name="description" id="" rows="5">{{$assignement->description}}</textarea>
                    </label>
                </div>
                <div class="form-group">
                    <label>Submission Date:
                        <input type="date" name="submission_date" class="form-control" value="{{$assignement->submission_date}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Submission Time:
                        <input type="time" name="submission_time" class="form-control" value="{{$assignement->submission_time}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Maximum Marks:
                        <input type="text" name="max_marks" class="form-control" value="{{$assignement->max_marks}}" required>
                    </label>
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
</div>
@endsection
