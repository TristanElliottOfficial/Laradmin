{{--
    =======================
    Create A New User
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'Create A User')
@section('description', 'Fill out the required fields below to add a new user.')

{{-- Page Header Links --}}
@section('header')
    <a href="{{ route('users.index') }}" class="button button-secondary"><i class="fal fa-chevron-left pr-2"></i>{{ __('Return') }}</a>
@endsection

{{-- Page Content --}}
@section('content')
    {{-- View Content --}}
    <v-card>
        <form action="{{ route('users.store') }}" method="post">
            @csrf

            <v-input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Username') }}" label="{{ __('Username') }}" error="@error('name') input-error @enderror">
                @error('name')
                <v-input-error id="name">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" label="{{ __('Email Address') }}" error="@error('email') input-error @enderror">
                @error('email')
                <v-input-error id="email">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="password" type="password" name="password" value="{{ old('password') }}" placeholder="{{ __('Password') }}" label="{{ __('Password') }}" error="@error('password') input-error @enderror">
                @error('password')
                <v-input-error id="password">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-button id="create-button" type="submit" variant="success" class="mt-3">
                <i class="fal fa-plus pr-2"></i>{{ __('Create New User') }}
            </v-button>

        </form>
    </v-card>
@endsection
