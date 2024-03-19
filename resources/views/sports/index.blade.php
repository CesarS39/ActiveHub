<link rel="stylesheet" href="resources/css/styles.css">
@extends('adminlte::page')

@section('title', 'Sports')

@section('content_header')
    <h2 class="text-center text-blue" >SPORTS</h2>
    
@stop

@section('content')
    @if (session('success-create'))
        <div class="alert alert-primary text-center">
            {{ session('success-create') }}
        </div>
    @elseif(session('success-update'))
        <div class="alert alert-success text-center">
            {{ session('success-update') }}
        </div>
    @elseif(session('success-delete'))
        <div class="alert alert-danger text-center">
            {{ session('success-delete') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{ route('sports.create')}}" class="btn btn-primary">Add Sport</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('sports.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                    <input type="text" name="filterValue" placeholder="Search by sport" class="form-control rounded border-primary text-secondary">
                                </div>
                                <div class="col="col-sm-3">
                                    <button type="submit" class="btn btn-primary"><b>Search</b></button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table sm" >
                <thead>
                    <tr>
                        <th class="text-blue">ID</th>
                        <th class="text-blue">Name</th>
                        <th class="text-center text-blue" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sports as $sport)
                        <tr>
                            <td> <b>{{ $sport->id }}</b> </td>
                            <td>{{ $sport->name }}</td>
                            <td width="5px">
                                <a href="{{route ('sports.edit',$sport)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
                            </td>
                            <td width="5px">
                                <form action="{{route ('sports.destroy',$sport)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-3">
                {{ $sports->appends(["filterValue"=>$filterValue])->links() }}
            </div>
        </div>
    </div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop