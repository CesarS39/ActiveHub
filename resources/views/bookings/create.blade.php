@extends('adminlte::page')

@section('title', 'Agendar Clase')

@section('content_header')
    <h1>Agendar Nueva Clase</h1>
@stop

@section('content')
    <form action="{{ route('bookings.continueToSports') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="teacher_id">Selecciona un Profesor:</label>
                    <select name="teacher_id" id="teacher_id" class="form-control" required>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
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
