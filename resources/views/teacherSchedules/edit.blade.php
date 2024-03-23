@extends('adminlte::page')

@section('title', 'Edit Teacher Schedule')

@section('content_header')
    <h1>Edit Teacher Schedule</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('teacherSchedules.update', $schedule->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="schedule">Schedule Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="schedule" name="schedule" value="{{ old('schedule', $schedule->schedule) }}" required>
                        @error('schedule')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="sport_user_id">Sport User</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sport_user_id" name="sport_user_id" required>
                            @foreach($sportUsers as $sportUser)
                                <option value="{{ $sportUser->id }}" {{ $schedule->sport_user_id == $sportUser->id ? 'selected' : '' }}>{{ $sportUser->user->name }} - {{ $sportUser->sport->name }}</option>
                            @endforeach
                        </select>
                        @error('sport_user_id')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Update Schedule" class="btn btn-primary">
                    <a href="{{ route('teacherSchedules.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
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