
@extends('adminlte::page')

@section('title', 'Edit Teacher')

@section('content_header')
    <h2 class="text-center text-blue" >Edit teacher</h2>
    
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('teachers.update', $teacher)}}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $teacher->name)}}" placeholder="Name" required>
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
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName', $teacher->lastName)}}" placeholder="Last Name" required>
                        @error('lastName')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="sports">Sports</label>
                    <div class="col-sm-10">
                        <select class="form-control js-example-basic-multiple" name="sports[]" id="sports" multiple="multiple" required>
                            @foreach($sports as $sport)
                            <option value="{{ $sport->id}}" {{in_array($sport->id, old('sports',[])) ? 'selected' : '' }}>
                                {{$sport->name}}
                            </option>
                            @endforeach
                        </select>
                        @error('sport')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="phone">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $teacher->phone)}}" placeholder="Phone" required maxlength="10" minlenght="10">
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
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email', $teacher->email)}}" placeholder="Email" required>
                        @error('email')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Edit Teacher" class="btn btn-primary">
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(()=>{});
        $('#sports').val(@json($ids_sports));
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
            theme: "classic"
            });
        });
    </script>
@stop