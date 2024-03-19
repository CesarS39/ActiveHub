@extends('adminlte::page')

@section('title', 'Create Teacher Schedule')

@section('content_header')
    <h1>Create a New Teacher Schedule</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('teacherSchedules.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Teacher:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sport_id">Sport:</label>
                <select class="form-control" id="sport_id" name="sport_id" required>
                    @foreach($sports as $sport)
                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="schedule">Schedule:</label>
                <input type="time" class="form-control" id="schedule" name="schedule" required>
            </div>
            <button type="submit" class="btn btn-success">Create Schedule</button>
            <a href="{{ route('teacherSchedules.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
            theme: "classic"
            });
        });
    </script>
@stop