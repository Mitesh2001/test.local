@extends('master')
@section('title','Index')
@section('content')
<div class="container my-5">
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Classes_id</th>
        <th scope="col">Topic</th>
        <th scope="col">Description</th>
        <th scope="col">Submission Date</th>
        <th scope="col">Submission Time</th>
        <th scope="col">Maximum Marks</th>
        <th scope="col">Action</th>
        <th scope="col">
            <a href="{{route('assignement.create')}}">Add Assignement <i class="fa fa-plus-square"></i></a>
        </th>
        </tr>
    </thead>
    <tbody>
        @foreach($assignements as $assignement)
        <tr>
        <td>{{$assignement->id}}</td>
        <td>{{$assignement->classes_id}}</td>
        <td>{{$assignement->topic}}</td>
        <td>{{$assignement->description}}</td>
        <td>{{$assignement->submission_date}}</td>
        <td>{{$assignement->submission_time}}</td>
        <td>{{$assignement->max_marks}}</td>
        <td>{{$assignement->file}}</td>
        <td>
            <a href="{{route('assignement.show',$assignement->id)}}">
               <button class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </button>
            </a>
        </td>
        <td>
            <form action="{{route('assignement.destroy',$assignement->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection