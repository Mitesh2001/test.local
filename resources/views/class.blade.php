@extends('master')
@section('title','Index')
@section('content')
<div class="container my-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-hover text-center table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Batch Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Classroom Key</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        <th scope="col">
            <a href="{{route('class.create')}}">Add Class <i class="fa fa-plus-square"></i></a>
        </th>
        </tr>
    </thead>
    <tbody>
        @if($classes->count() < 1)
        <tr>
            <td colspan="8" class="text-center text-danger">
                No Data Found ! <a class="text-danger" style="text-decoration: none;" href="{{route('class.create')}}">Add Some Data</a>
            </td>
        </tr>
        @endif
        @foreach($classes as $class)
        <tr>
        <td>{{$class->id}}</td>
        <td>{{$class->teacher_name}}</td>
        <td>{{$class->batch_name}}</td>
        <td>{{$class->subject}}</td>
        <td>{{$class->classroom_key}}</td>
        <td>{{$class->status}}</td>
        <td>
            <a href="{{route('class.show',$class->id)}}">
               <button class="btn btn-primary">
                    <i class="fa fa-edit"></i> Update
                </button>
            </a>
        </td>
        <td>
            <form action="{{route('class.destroy',$class->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <span>
        {{$classes->links()}}
    </span>
</div>
@endsection
