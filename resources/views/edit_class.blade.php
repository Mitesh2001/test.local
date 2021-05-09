@extends('master')
@section('title','Create Class')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <h2 class="text-center">Update class</h2>
        <form method="POST" action="{{route('class.update',$class->id)}}" class="col-8">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label">Teacher's Name:</label>
                <input type="text" name="teacher_name" class="form-control" value="{{$class->teacher_name}}">
                <small class="text-danger">
                    @error('teacher_name')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label class="form-label">Batch Name:</label>
                <input type="text" name="batch_name" class="form-control" value="{{$class->batch_name}}">
                <small class="text-danger">
                    @error('batch_name')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label class="form-label">Subject:</label>
                <input type="text" name="subject" class="form-control" value="{{$class->subject}}">
                <small class="text-danger">
                    @error('subject')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label class="form-label">classroom Key:</label>
                <input type="number" name="classroom_key" class="form-control" value="{{$class->classroom_key}}">
                <small class="text-danger">
                    @error('classroom_key')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label class="form-label">Status:</label>
                <input type="text" name="status" class="form-control" value="{{$class->status}}">
                <small class="text-danger">
                    @error('status')
                        <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                    @enderror
                </small>
            </div>
            <hr>
            <div class=" d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('class.index')}}" class="btn btn-outline-info">
                    <i class="fa fa-backward"></i> Back To Home
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
