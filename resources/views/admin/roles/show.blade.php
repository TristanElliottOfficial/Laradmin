{{--
    =======================
    Blade Template
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'Page Title')
@section('description', 'Page Description')

{{-- Page Header Links --}}
@section('header')
    {{-- Header Links --}}
@endsection

{{-- Page Content --}}
@section('content')
    {{-- View Content --}}
    <div class="bg-white px-10 py-10 rounded-sm shadow-md">
        <div class="block">
            <h1 class="text-2xl">{{ $role->display_name }}</h1>
            <p class="inline-flex px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-sm font-light">{{ $role->name }}</p>
            <p class="mt-2">{{ $role->description }}</p>
        </div>
        <div class="block mt-4">
            @foreach($role->permissions as $permission)
                <p class="inline-block px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-sm font-light mx-1">{{ $permission->name }}</p>
            @endforeach
        </div>
    </div>
@endsection
