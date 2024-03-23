@extends('adminlte::page')

@section('title', 'Select Sport and Schedule')

@section('content_header')
    <h2 class="text-center text-blue">Select Sport and Schedule</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('teacherSchedules.storeSchedule') }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user_id }}">

                <div class="form-group row">
                    <label for="sport_user_id" class="col-sm-2 col-form-label text-blue">Sport</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="sport_user_id" name="sport_user_id" required>
                            @foreach($sports as $sport)
                                <option value="{{ $sport->id }}">{{ $sport->sport->name }}</option>
                            @endforeach
                        </select>
                        @error('sport_user_id')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="schedule" class="col-sm-2 col-form-label text-blue">Schedule Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="schedule" name="schedule" value="{{ old('schedule') }}" required>
                        @error('schedule')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Schedule</button>
                </div>
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