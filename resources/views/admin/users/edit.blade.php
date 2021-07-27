{{--
    =======================
    Update A User
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'Update A User')
@section('description', 'Update a users information.')

{{-- Page Header Links --}}
@section('header')
    <a href="{{ route('users.index') }}" class="button button-secondary"><i class="fal fa-chevron-left pr-2"></i>{{ __('Return') }}</a>
    <a href="{{ route('users.show', $user->id) }}" class="button button-primary"><i class="fal fa-eye pr-2"></i>{{ __('View ') }}{{ $user->name }}</a>
@endsection

{{-- Page Content --}}
@section('content')
    <v-card>
        <form action="{{ route('users.update', $user->id) }}" method="post">

            @method('PUT')

            @csrf

            <v-input id="name" type="text" name="name" value="{{ $user->name }}" placeholder="{{ __('Username') }}" label="{{ __('Username') }}" error="@error('name') input-error @enderror">
                @error('name')
                <v-input-error id="name">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="email" type="email" name="email" value="{{ $user->email }}" placeholder="{{ __('Email Address') }}" label="{{ __('Email Address') }}" error="@error('email') input-error @enderror">
                @error('email')
                <v-input-error id="email">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-input id="password" type="password" name="password" value="{{ old('password') }}" placeholder="{{ __('Password') }}" label="{{ __('Password') }}" error="@error('password') input-error @enderror">
                @error('password')
                <v-input-error id="password">{{ $message }}</v-input-error>
                @enderror
            </v-input>

            <v-button id="update-button" type="submit" variant="warning" class="mt-3">
                {{ __('Update ') }}{{ $user->name }}{{ __('s Profile') }}
            </v-button>

        </form>
    </v-card>
@endsection
