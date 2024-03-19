@extends('adminlte::page')

@section('title', 'Edit Profile')

@section('content_header')
        <h2 class="font-semibold text-xl text-blue-700 leading-tight text-center">
            {{ __('Profile') }}
        </h2>
@stop

@section('content')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
