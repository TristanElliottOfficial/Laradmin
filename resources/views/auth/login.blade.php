@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <v-auth-card title="{{ __('Login') }}">

        <form method="POST" action="{{ route('login') }}">

            @csrf

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

            <v-checkbox id="remember" name="remember">
                {{ __('Remember Me') }}
            </v-checkbox>

            <v-button id="login-button" type="submit" variant="primary">
                {{ __('Login') }}
            </v-button>

        </form>

    </v-auth-card>
@endsection
