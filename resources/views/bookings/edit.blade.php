@extends('adminlte::page')

@section('title', 'Edit Booking')

@section('content_header')
    <h2 class="text-center text-blue">Edit Booking</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('bookings.update', $booking) }}">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="student_id">Student ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="student_id" name="student_id" required>
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" @if($student->id == $booking->student_id) selected @endif>
                                    {{ $student->name }} {{ $student->lastName }}
                                </option>
                            @endforeach
                        </select>
                        @error('student_id')
                            <span class="text-danger">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="teacher_schedule_id">Teacher Schedule</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="teacher_schedule_id" name="teacher_schedule_id" required>
                            @foreach($teacherSchedules as $schedule)
                                <option value="{{ $schedule->id }}" @if($schedule->id == $booking->teacher_schedule_id) selected @endif>
                                    {{ $schedule->schedule }} ({{ $schedule->teacher->name }})
                                </option>
                            @endforeach
                        </select>
                        @error('teacher_schedule_id')
                            <span class="text-danger">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="date">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $booking->date) }}" required>
                        @error('date')
                            <span class="text-danger">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="schedule">Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="schedule" name="schedule" value="{{ old('schedule', $booking->schedule) }}" required>
                        @error('schedule')
                            <span class="text-danger">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="status">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="status" name="status">
                            <option value="scheduled" @if($booking->status == 'scheduled') selected @endif>Scheduled</option>
                            <option value="completed" @if($booking->status == 'completed') selected @endif>Completed</option>
                            <option value="cancelled" @if($booking->status == 'cancelled') selected @endif>Cancelled</option>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" value="Update Booking" class="btn btn-primary">
                    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
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
@stop