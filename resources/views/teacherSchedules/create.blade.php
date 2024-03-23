@extends('adminlte::page')

@section('title', 'Create Schedule')

@section('content_header')
    <h2 class="text-center text-blue">Create Schedule</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('teacherSchedules.store') }}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-blue" for="user_id">Select Teacher</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }} {{ $teacher->lastName }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Continue</button>
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