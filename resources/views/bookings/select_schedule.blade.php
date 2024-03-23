@extends('adminlte::page')

@section('title', 'Seleccionar Horario')

@section('content_header')
    <h1>Seleccionar Horario para la Clase</h1>
@stop

@section('content')
    <form action="{{ route('bookings.storeFinal') }}" method="POST">
        @csrf
        <input type="hidden" name="sport_user_id" value="{{ $sport_user_id }}">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="schedule_id">Selecciona un Horario:</label>
                    <select name="schedule_id" id="schedule_id" class="form-control" required>
                        @foreach ($schedules as $schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->schedule }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Fecha de la Clase:</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Agendar Clase</button>
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
