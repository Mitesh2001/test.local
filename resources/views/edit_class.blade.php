@extends('master')
@section('title','Create Class')
@section("content")
<div class="container">
    <div class="row border rounded justify-content-center m-5 p-5">
        <div class="col-sm-4">
            <form method="POST" action="{{route('class.update',$class->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Teacher's Name:
                        <input type="text" name="teacher_name" class="form-control" value="{{$class->teacher_name}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Batch Name:
                        <input type="text" name="batch_name" class="form-control" value="{{$class->batch_name}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Subject:
                        <input type="text" name="subject" class="form-control" value="{{$class->subject}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>classroom Key:
                        <input type="number" name="classroom_key" class="form-control" value="{{$class->classroom_key}}" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Status:
                        <input type="text" name="status" class="form-control" value="{{$class->status}}" required>
                    </label>
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
</div>
@endsection
