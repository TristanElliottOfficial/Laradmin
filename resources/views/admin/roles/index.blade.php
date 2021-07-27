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
@section('title', 'All Roles')
@section('description', 'View all the roles currently on the system.')

{{-- Page Header Links --}}
@section('header')
    {{-- Header Links --}}
@endsection

{{-- Page Content --}}
@section('content')
    {{-- View Content --}}
    <v-table-card>
        <table class="table-default">
            <thead class="table-head">
            <tr class="table-head-row">
                <th class="table-header">{{ __('ID') }}</th>
                <th class="table-header">{{ __('Display Name') }}</th>
                <th class="table-header">{{ __('Name') }}</th>
                <th class="table-header">{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="table-body-row">
                    <td class="table-data">{{ $role->id }}</td>
                    <td class="table-data">{{ $role->display_name }}</td>
                    <td class="table-data"><span class="inline-flex px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-sm">{{ $role->name }}</span></td>
                    <td class="table-actions">
                        <a href="{{ route('roles.show', $role->id) }}" class="table-button button-primary"><i class="fal fa-eye pr-2"></i>{{ __('View') }}</a>
                        <a href="{{ route('roles.edit', $role->id) }}" class="table-button button-warning"><i class="fal fa-edit pr-2"></i>{{ __('Edit') }}</a>
                        @if(Auth::user()->hasRole('superadministrator'))
                            <a href="{{ route('roles.destroy', $role->id) }}" class="table-button button-danger"><i class="fal fa-trash-alt pr-2"></i>{{ __('Delete') }}</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </v-table-card>

    @if($roles->count() < 0)
        <v-card class="mt-3">
            {{ $roles->links() }}
        </v-card>
    @endif
@endsection
