@extends('template.index')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <a href="{{route('student.create')}}" class="btn btn-primary">
                Create student
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>CODE</th>
                        <th>NAME</th>
                        <th>CAREER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    @if($student->state == 0)
                        <tr class="disabled">
                    @else
                        <tr>
                    @endif
                        <td>{{$student->code}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->career}}</td>
                        <td>
                            <a href="{{route('student.edit', $student->id)}}" class="btn btn-info">
                                <icon class="fa fa-edit"></icon>
                            </a>
                            @if($student->state == 1)
                            <a href="{{route('student.destroy', $student->id)}}" class="btn btn-danger">
                                <icon class="fa fa-window-close"></icon>
                            </a>
                            @elseif($student->state == 0)
                            <a href="{{route('student.destroy', $student->id)}}" class="btn btn-warning">
                                <icon class="fa fa-undo"></icon>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    {{$students->render()}}
                </div>
            </div>
        </div>
    </div>
        
@endSection