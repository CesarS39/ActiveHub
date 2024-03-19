@extends('adminlte::page')

@section('title', 'Show Booking')

@section('content_header')
    <h2 class="text-center text-blue">Booking Details</h2>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped sm">
            <tbody>
                <tr>
                    <th class="text-blue">ID</th>
                    <td>{{ $booking->id }}</td>
                </tr>
                <tr>
                    <th class="text-blue">Student Name</th>
                    <td>{{ $booking->student->name }} {{ $booking->student->lastName }}</td>
                </tr>
                <tr>
                    <th class="text-blue">Teacher Name</th>
                    <td>{{ $booking->teacherSchedule->teacher->name }}</td>
                </tr>
                <tr>
                    <th class="text-blue">Date</th>
                    <td>{{ $booking->date->format('Y-m-d') }}</td>
                </tr>
                <tr>
                    <th class="text-blue">Time</th>
                    <td>{{ $booking->schedule }}</td>
                </tr>
                <tr>
                    <th class="text-blue">Status</th>
                    <td>{{ $booking->status }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('bookings.index') }}">Back to List</a>
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