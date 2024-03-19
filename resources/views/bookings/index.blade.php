@extends('adminlte::page')

@section('title', 'Bookings')

@section('content_header')
    <h2 class="text-center text-blue" >BOOKINGS</h2>
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
                    <a href="{{ route ('bookings.create')}}" class="btn btn-primary">Add Booking</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('bookings.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                    <input type="text" name="filterValue" placeholder="Search by booking" class="form-control rounded border-primary text-secondary">
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
                        <th class="text-blue">Student ID</th>
                        <th class="text-blue">Teacher Schedule ID</th>
                        <th class="text-blue">Date</th>
                        <th class="text-blue">Schedule</th>
                        <th class="text-blue">Status</th>
                        <th class="text-center text-blue" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td><b>{{ $booking->id }}</b></td>
                            <td>{{ $booking->student_id }}</td>
                            <td>{{ $booking->teacher_schedule_id }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->schedule }}</td>
                            <td>{{ $booking->status }}</td>

                            <td width="2px">
                                <a href="{{ route('bookings.show', $booking)}}" class="btn btn-primary btn-sm mb-2">Show</a>
                            </td>
                            <td width="5px">
                                <a href="{{ route('bookings.edit', $booking)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
                            </td>
                            <td width="5px">
                                <form action="{{ route('bookings.destroy', $booking)}}" method="POST">
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
                {{ $bookings->links() }}
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