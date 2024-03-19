@extends('adminlte::page')

@section('title', 'Show Teachers')

@section('content_header')
    <h2 class="text-center text-blue" >Teacher's Data</h2>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            <table class="table table-striped sm" >
                <thead>
                    <tr>
                        <th class="text-blue">ID</th>
                        <th class="text-blue">Name</th>
                        <th class="text-blue">Last Name</th>
                        <th class="text-blue">Sports</th>
                        <th class="text-blue">Email</th>
                        <th class="text-blue">Phone</th>
                        <th class="text-blue">Tarjeta</th>
                        <th class="text-blue">Photo</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td> <b>{{ $teacher->id }}</b> </td>
                            <td> {{ $teacher->name }}</td>
                            <td> {{ $teacher->lastName }}</td>
                            <td>
                                @foreach($sports as $sport)
                                    {{ $sport->name }}
                                    @if(!$loop->last){{', '}}@endif
                                @endforeach
                            </td>
                            <td> {{ $teacher->email }}</td>
                            <td> {{ $teacher->phone }}</td>
                            <td> {{ $teacher->tarjeta }}</td>
                            <td> 
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="img-boton">
                                @if($teacher->photo == null)
                                    <img src="{{ asset('img/user-default.png') }}" class="img-fluid">
                                @else
                                    <img src="{{ asset('storage/' . $teacher->photo) }}" class="img-fluid">
                                @endif
                                </div>
                                </button>
                            </td>

                        </tr>
                </tbody>
            </table>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('teachers.index') }}">Back</a>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($teacher->photo == null)
                        <img src="{{ asset('img/user-default.png') }}" class="img-panel">
                    @else
                        <img src="{{ asset('storage/' . $teacher->photo) }}" class="img-panel">
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>    
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/photo/photo.css')}} ">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@stop
