@extends('adminlte::page')

@section('title', 'Teacher Schedules')

@section('content_header')
    <h2 class="text-center text-blue">TEACHER SCHEDULES</h2>
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
                    <a href="{{ route('teacherSchedules.create') }}" class="btn btn-primary">Add Schedule</a>
                </div>
                <!-- Optional: Buscador aquí si es necesario -->
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-blue">ID</th>
                        <th class="text-blue">Schedule Time</th>
                        <th class="text-blue">Teacher Name</th>
                        <th class="text-blue">Sport</th>
                        <th class="text-center text-blue" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td><b>{{ $schedule->id }}</b></td>
                            <td>{{ $schedule->schedule }}</td>
                            <td>{{ optional($schedule->sport_user->user)->name ?? 'N/A' }}</td>
                            <td>{{ optional($schedule->sport_user->sport)->name ?? 'N/A' }}</td>
                            <td width="5px">
                                <a href="{{ route('teacherSchedules.show', $schedule) }}" class="btn btn-primary btn-sm mb-2">Show</a>
                            </td>
                            <td width="5px">
                                <a href="{{ route('teacherSchedules.edit', $schedule) }}" class="btn btn-primary btn-sm mb-2">Edit</a>
                            </td>
                            <td width="5px">
                            <form action="{{ route('teacherSchedules.destroy', $schedule->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-3">
                {{ $schedules->links() }}
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