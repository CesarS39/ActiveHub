@extends('adminlte::page')

@section('title', 'Reservas de Clases')

@section('content_header')
    <h2 class="text-center text-blue">Reservas de Clases</h2>
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
        <div class="card-header">
            <a href="{{ route('bookings.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Crear Nueva Reserva
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-blue">ID</th>
                        <th class="text-blue">Usuario</th>
                        <th class="text-blue">Profesor</th>
                        <th class="text-blue">Deporte</th>
                        <th class="text-blue">Horario</th>
                        <th class="text-center text-blue" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->user->name }}</td>
                            <td>{{ $booking->teacherSchedule->sport_user->user->name }}</td>
                            <td>{{ $booking->teacherSchedule->sport_user->sport->name }}</td>
                            <td>{{ $booking->teacherSchedule->schedule }}</td>

                            <td>
                                <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('bookings.destroy', $booking) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay reservas agendadas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop