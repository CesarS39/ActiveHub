@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="text-center text-blue">ActiveHub</h1>
    <h5 class="text-center text-blue">Welcome back <b> {{ Auth::user()->name}}</b> </h5>
@stop

@section('content')
    <div class="text-center">
        <img src="{{ Auth:: user()->photo ? asset('storage/' . Auth::user()->photo) : asset('img/user-default.png')}}" width="200" height="200" class="rounded-circle">
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center text-blue">
                        <b> Manage Schedule</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Show</a>                          
                        </div>
                    </div>  
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center text-blue">
                        <b> New class</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Show</a>                          
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center text-blue">
                        @role('Administrator')
                        <b> My classes</b>
                        @endrole
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Show</a>                          
                        </div>
                    </div>  
                </div>
            </div>
        <div/>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop