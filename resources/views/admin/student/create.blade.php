@extends('template.index')
@section('content')
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <div class="card mt-4">
            <div class="card-header">
                <h3>Create student</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required/>
                    </div>
                    <div class="col-md-4">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" required/>
                    </div>
                    <div class="col-md-4">
                        <label>Career</label>
                        <input type="text" class="form-control" name="career" required/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-success btn-block" value="Register">
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