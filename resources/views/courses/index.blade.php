@extends('layouts.admin')

@section('content')
    <div class="container pt-3">
    <a href="/courses/create">Create new</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Lecture</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $course)
          <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td><a href="/courses/{{ $course->id }}/lecture" class="btn btn-warning btn-sm"><i class="fas fa-plus-circle" aria-hidden="true"></i></a></td>
            <td><a href="/courses/{{ $course->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <form action="/courses/{{ $course->id }}" method="post" class="d-inline">
              @method("DELETE")
              @csrf
            <button type="submit" class="btn btn-danger btn-sm ml-3"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  
          </form>
        </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      @endsection