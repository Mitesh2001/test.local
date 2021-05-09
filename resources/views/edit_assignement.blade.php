@extends('master')
@section('title','Create Assignements')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <h2 class="text-center">Update Assignement</h2>
        <form method="POST" action="{{route('assignement.update',$assignement->id)}}" class="col-8">
            @csrf
            @method('PUT')
            <div class="form-group my-3">
                <label class="form-lable">Classes Id:</label>
                <input type="number" name="classes_id" class="form-control" value="{{$assignement->classes_id}}">
                <small class="text-danger">
                    @error('classes_id')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Topic:</label>
                <input type="text" name="topic" class="form-control" value="{{$assignement->topic}}">
                <small class="text-danger">
                    @error('topic')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <textarea name="description" cols="63" placeholder=" Assignement Description...">{{$assignement->description}}</textarea>
                <small class="text-danger">
                    @error('description')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Submission Date:</label>
                <input type="date" name="submission_date" class="form-control" value="{{$assignement->submission_date}}">
                <small class="text-danger">
                    @error('submission_date')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Submission Time:</label>
                <input type="time" name="submission_time" class="form-control" value="{{$assignement->submission_time}}">
                <small class="text-danger">
                    @error('submission_time')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-lable">Maximum Marks:</label>
                <input type="text" name="max_marks" class="form-control" value="{{$assignement->max_marks}}">
                <small class="text-danger">
                    @error('max_marks')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
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
