@extends('adminlte::page')

@section('title', 'Edit sport')

@section('content_header')
    <h2 class="text-center text-blue" >Edit sport</h2>
    
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('sports.update',$sport)}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="name">Name of sport</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{$sport->name}}" placeholder="Name" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Edit Sport" class="btn btn-primary">
                    <a href="{{ route('sports.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop