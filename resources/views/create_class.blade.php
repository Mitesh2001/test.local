@extends('master')
@section('title','Create Class')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <h2 class="text-center">Create class</h2>
        <form method="POST" action="{{route('class.store')}}" class="col-8">
            @csrf
            <div class="form-group">
                <label class="form-label">Teacher's Name:</label>
                    <input type="text" name="teacher_name" class="form-control" value="{{old('teacher_name')}}">
                    <small class="text-danger">
                        @error('teacher_name')
                            <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                        @enderror
                    </small>
            </div>
            <div class="form-group">
                <label class="form-label">Batch Name:</label>
                    <input type="text" name="batch_name" class="form-control" value="{{old('batch_name')}}">
                    <small class="text-danger">
                        @error('batch_name')
                            <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                        @enderror
                    </small>
            </div>
            <div class="form-group">
                <label class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control" value="{{old('subject')}}">
                    <small class="text-danger">
                        @error('subject')
                            <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                        @enderror
                    </small>
            </div>
            <div class="form-group">
                <label class="form-label">classroom Key:</label>
                    <input type="number" name="classroom_key" class="form-control" value="{{old('classroom_key')}}">
                    <small class="text-danger">
                        @error('classroom_key')
                            <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                        @enderror
                    </small>
            </div>
            <div class="form-group">
                <label class="form-label">Status:</label>
                    <input type="text" name="status" class="form-control" value="{{old('status')}}">
                    <small class="text-danger">
                        @error('status')
                            <span class="text-red-500 text-xs"><i class="fa fa-bug"></i> {{ $message }}</span>
                        @enderror
                    </small>
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('class.index')}}" class="btn btn-outline-info">
                    <i class="fa fa-backward"></i> Back To Home
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
