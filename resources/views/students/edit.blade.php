
@extends('adminlte::page')

@section('title', 'Edit Student')

@section('content_header')
    <h2 class="text-center text-blue" >Edit Student</h2>
    
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('students.update', $student)}}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $student->name)}}" placeholder="Name" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="lastName">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName', $student->lastName)}}" placeholder="Last Name" required>
                        @error('lastName')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="phone">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $student->phone)}}" placeholder="Phone" required maxlength="10" minlenght="10">
                        @error('phone')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="email">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email', $student->email)}}" placeholder="Email" required>
                        @error('email')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Edit Student" class="btn btn-primary">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop
