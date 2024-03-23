@extends('adminlte::page')

@section('title', 'Seleccionar Deporte')

@section('content_header')
    <h1>Seleccionar Deporte para la Clase</h1>
@stop

@section('content')
    <form action="{{ route('bookings.continueToSchedules') }}" method="POST">
        @csrf
        <input type="hidden" name="teacher_id" value="{{ $teacher_id }}">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="sport_user_id">Selecciona un Deporte:</label>
                    <select name="sport_user_id" id="sport_user_id" class="form-control" required>
                        @foreach ($sports as $sport)
                            <option value="{{ $sport->id }}">{{ $sport->sport->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stop
