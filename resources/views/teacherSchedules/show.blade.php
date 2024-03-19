@extends('adminlte::page')

@section('title', 'View Teacher Schedule')

@section('content_header')
    <h1>View Teacher Schedule</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Details of Schedule #{{ $teacherSchedule->id }}</h3>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Teacher</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ $teacherSchedule->teacher->name }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Sport</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ $teacherSchedule->sport->name }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Schedule</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ $teacherSchedule->schedule }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('teacherSchedules.index') }}" class="btn btn-primary">Back to List</a>
            </div>
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