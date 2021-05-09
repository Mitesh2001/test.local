@extends('master')
@section('title','Index')
@section('content')
<div class="container my-5">
    <div class="border border-dark rounded p-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-hover text-center table-striped">
            <thead>
                <tr>
                <th scope="col">Classes_id</th>
                <th scope="col">Topic</th>
                <th scope="col">Description</th>
                <th scope="col">Submission Date</th>
                <th scope="col">Submission Time</th>
                <th scope="col">Maximum Marks</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
                <th scope="col">
                    <a href="{{route('assignement.create')}}">Add <i class="fa fa-plus-square"></i></a>
                </th>
                </tr>
            </thead>
            <tbody class=" border">
                @if($assignements->count() < 1)
                <tr>
                    <td colspan="9" class="text-center text-danger">
                        No Data Found ! <a class="text-danger" style="text-decoration: none;" href="{{route('assignement.create')}}">Add Some Data</a>
                    </td>
                </tr>
                @endif
                @foreach($assignements as $assignement)
                <tr>
                <td>{{$assignement->classes_id}}</td>
                <td>{{$assignement->topic}}</td>
                <td>{{$assignement->description}}</td>
                <td>{{$assignement->submission_date}}</td>
                <td>{{$assignement->submission_time}}</td>
                <td>{{$assignement->max_marks}}</td>
                <td>
                    <a href="downloadFile/{{$assignement->id}}">
                        <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="right" title="Download {{$assignement->file}}">
                            <i class="fa fa-download"></i>
                        </button>
                    </a>

                </td>
                <td>
                    <a href="{{route('assignement.show',$assignement->id)}}">
                    <button class="btn btn-primary" id="update-{{$assignement->id}}">
                            <i class="fa fa-edit"></i>Update
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{route('assignement.destroy',$assignement->id)}}" method="post" id="{{$assignement->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete(<?php echo $assignement->id ?>)" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$assignements->links()}}
        </div>
    </div>
</div>
@endsection
