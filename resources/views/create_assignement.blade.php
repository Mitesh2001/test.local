@extends('master')
@section('title','Create Assignements')
@section("content")
<div class="container">
    <div class="row border border-dark rounded justify-content-center m-5 p-5">
        <h2 class="text-center">Add Assignement</h2>
        <form method="POST" action="{{route('assignement.store')}}" enctype="multipart/form-data" class="col-8">
            @csrf
            <div class="form-group my-3">
                <label class="form-label">Classes Id:</label>
                <input type="number" name="classes_id" class="form-control">
                <small class="text-danger">
                    @error('classes_id')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-label">Topic:</label>
                <input type="text" name="topic" class="form-control">
                <small class="text-danger">
                    @error('topic')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <textarea name="description" cols="63" id="" placeholder=" Assignement Description..."></textarea>
                <small class="text-danger">
                    @error('description')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-label">Submission Date:</label>
                <input type="date" name="submission_date" class="form-control">
                <small class="text-danger">
                    @error('submission_date')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-label">Submission Time:</label>
                <input type="time" name="submission_time" class="form-control">
                <small class="text-danger">
                    @error('submission_time')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-label">Maximum Marks:</label>
                <input type="text" name="max_marks" class="form-control">
                <small class="text-danger">
                    @error('max_marks')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group my-3">
                <label class="form-label">File:</label>
                <input type="file" name="file" class="form-control">
                <small class="text-danger">
                    @error('file')
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
</div>
@endsection
