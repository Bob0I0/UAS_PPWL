@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>This is your application dashboard.</p>

                    @canany(['create-role', 'edit-role', 'delete-role'])
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="bi bi-person-fill-gear"></i> Manage Roles</a>
                    @endcanany

                    @canany(['create-donatur', 'edit-donatur','delete-donatur'])
                    <a class="btn btn-warning" href="{{ route('donaturs.index') }}"><i class="bi bi-coin"></i> Manage Donaturs</a>
                    @endcanany

                    <p>&nbsp;</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection