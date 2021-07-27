{{--
    =======================
    All Users
    =======================
    Author: Tristan Elliott
    Package: Laravel Admin
    Version: 1.0
--}}
@extends('layouts.app')

{{-- Page Title & Description --}}
@section('title', 'All Users')
@section('description', 'View all the user accounts that are registered.')

{{-- Page Header Links --}}
@section('header')
    @if(Auth::user()->hasRole(['superadministrator', 'administrator']))
        <a href="{{ route('users.create') }}" class="button button-success"><i class="fal fa-plus pr-2"></i>{{ __('Create A User') }}</a>
    @endif
@endsection

{{-- Page Content --}}
@section('content')
    @if(session()->has('success'))
        <v-alert type="success" class="mb-4">
            {{ session()->get('success') }}
        </v-alert>
    @endif

    <div class="flex items-center justify-between bg-white px-6 py-3 rounded-sm shadow-md mb-4">
        <div class="flex items-center space-x-2">
            <span class="text-sm font-light text-gray-800 bg-gray-300 px-2 py-1 rounded-sm shadow-sm">All 30</span>
            <span class="text-sm font-light text-gray-800 bg-gray-300 px-2 py-1 rounded-sm shadow-sm">Administrators 6</span>
            <span class="text-sm font-light text-gray-800 bg-gray-300 px-2 py-1 rounded-sm shadow-sm">Managers 4</span>
            <span class="text-sm font-light text-gray-800 bg-gray-300 px-2 py-1 rounded-sm shadow-sm">Users 20</span>
        </div>
        <div class="flex items-center">
            <!-- <label for="search" class="hidden">Search Users</label> -->
            <input type="search" name="searchusers" class="block px-4 py-2 w-64 border rounded-sm appearance-none focus:outline-none focus:ring-2 ring-opacity-50 ring-blue-500 hover:shadow-md transition duration-200 ease-in-out font-sans font-light" placeholder="Search Users...">
            <button class="button button-primary ml-3"><i class="fal fa-search pr-2"></i>Search Users</button>
        </div>
    </div>

    <v-table-card>
        <table class="table-default">
            <thead class="table-head">
            <tr class="table-head-row">
                <th class="table-header"><i class="far fa-id-card pr-2"></i>{{ __('ID') }}</th>
                <th class="table-header"><i class="far fa-user pr-2"></i>{{ __('Name') }}</th>
                <th class="table-header"><i class="far fa-envelope pr-2"></i>{{ __('Email Address') }}</th>
                <th class="table-header"><i class="far fa-calendar-plus pr-2"></i>{{ __('Created') }}</th>
                <th class="table-header"><i class="far fa-calendar-edit pr-2"></i>{{ __('Last Updated') }}</th>
                <th class="table-header"><i class="far fa-directions pr-2"></i>{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="table-body-row">
                    <td class="table-data">{{ $user->id }}</td>
                    <td class="table-data">{{ $user->name }}</td>
                    <td class="table-data">{{ $user->email }}</td>
                    <td class="table-data">{{ $user->created_at }}</td>
                    <td class="table-data">{{ $user->updated_at }}</td>
                    <td class="table-actions">
                        <a href="{{ route('users.show', $user->id) }}" class="table-button button-primary"><i class="fal fa-eye pr-2"></i>{{ __('View') }}</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="table-button button-warning"><i class="fal fa-edit pr-2"></i>{{ __('Edit') }}</a>
                        @if(Auth::user()->hasRole('superadministrator'))
                            <a href="{{ route('users.destroy', $user->id) }}" class="table-button button-danger"><i class="fal fa-trash-alt pr-2"></i>{{ __('Delete') }}</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </v-table-card>

    @if($users->count() < 0)
        <v-card class="mt-3">
            {{ $users->links() }}
        </v-card>
    @endif
@endsection
