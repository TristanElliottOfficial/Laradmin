{{--
    =======================
    View A Users Profile
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'View A User')
@section('description', 'View a users profile information.')

{{-- Page Header Links --}}
@section('header')
    <a href="{{ route('users.index') }}" class="button button-secondary"><i class="fal fa-chevron-left pr-2"></i>{{ __('Return') }}</a>
    <a href="{{ route('users.edit', $user->id) }}" class="button button-warning"><i class="fal fa-edit pr-2"></i>{{ __('Update ') }}{{ $user->name }}</a>
@endsection

{{-- Page Content --}}
@section('content')
    {{-- View Content --}}
    <div class="bg-white px-10 py-10 rounded-sm shadow-md">
        <div class="flex items-center">
            <div>
                <img src="https://tristanelliott.co.za/development/users/User1.jpg" class="w-32 rounded-full shadow-md" alt="">
            </div>
            <div class="pl-6">
                <h1 class="text-2xl font-light text-gray-800">{{ $user->name }}</h1>
                <p class="text-sm font-light text-gray-500">{{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection
