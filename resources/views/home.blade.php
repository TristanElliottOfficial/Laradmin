{{--
    =======================
    Dashboard
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'Dashboard')
@section('description', 'View all your applications statistics.')

{{-- Page Header Links --}}
@section('header')
    {{-- Header Links --}}
@endsection

{{-- Page Content --}}
@section('content')
    @if(session()->has('message'))
        <v-alert type="success">
            {{ session()->get('message') }}
        </v-alert>
    @endif
@endsection
