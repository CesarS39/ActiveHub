
@extends('adminlte::page')

@section('title', 'Teachers')

@section('content_header')
    <h2 class="text-center text-blue" >TEACHERS</h2>
    
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
                    <a href="{{ route ('teachers.create')}}" class="btn btn-primary">Add Teacher</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('teachers.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                    <input type="text" name="filterValue" placeholder="Search by teacher" class="form-control rounded border-primary text-secondary">
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
            <table class="table table-striped sm" >
                <thead>
                    <tr>
                        <th class="text-blue">ID</th>
                        <th class="text-blue">Name</th>
                        <th class="text-blue">Last Name</th>
                        <th class="text-blue">Email</th>
                        <th class="text-blue">Phone</th>
                    <!--    <th class="text-blue">Tarjeta</th> -->
                        <th class="text-center text-blue" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td> <b>{{ $teacher->id }}</b> </td>
                            <td> {{ $teacher->name }}</td>
                            <td> {{ $teacher->lastName }}</td>
                            <td> {{ $teacher->email }}</td>
                            <td> {{ $teacher->phone }}</td>
                             <!-- <td> {{ $teacher->tarjeta }}</td> -->

                            <td width="2px">
                                <a href="{{ route('teachers.show', $teacher)}}" class="btn btn-primary btn-sm mb-2">Show</a>
                            </td>
                            <td width="5px">
                                <a href="{{route ('teachers.edit', $teacher)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
                            </td>
                            <td width="5px">
                                <form action="{{route('teachers.destroy', $teacher)}}" method="POST">
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
                {{ $teachers->appends(["filterValue"=>$filterValue])->links() }}
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