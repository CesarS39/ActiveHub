@extends('adminlte::page')

@section('title', 'Edit Teacher Schedule')

@section('content_header')
    <h1>Edit Teacher Schedule</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('teacherSchedules.update', $teacherSchedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Teacher:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" @if($teacher->id == $teacherSchedule->user_id) selected @endif>{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sport_id">Sport:</label>
                <select class="form-control" id="sport_id" name="sport_id" required>
                    @foreach($sports as $sport)
                        <option value="{{ $sport->id }}" @if($sport->id == $teacherSchedule->sport_id) selected @endif>{{ $sport->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="schedule">Schedule:</label>
                <input type="time" class="form-control" id="schedule" name="schedule" value="{{ $teacherSchedule->schedule }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Schedule</button>
            <a href="{{ route('teacherSchedules.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop