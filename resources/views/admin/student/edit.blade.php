@extends('template.index')
@section('content')
    <form action="{{route('student.update', $student->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="card mt-4">
            <div class="card-header">
                <h3>Edit student</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$student->name}}" required/>
                    </div>
                    <div class="col-md-4">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" value="{{$student->code}}" required/>
                    </div>
                    <div class="col-md-4">
                        <label>Career</label>
                        <input type="text" class="form-control" name="career" value="{{$student->career}}" required/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-success btn-block" value="Update">
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-danger btn-block" href="{{route('student.index')}}" value="Cancel">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </card>
    </form>
@endSection