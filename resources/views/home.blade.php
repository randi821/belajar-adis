@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('navbar')
    <li class="nav-item align-self-center">
        <a class="nav-link" href="{{url('home')}}">Home</a>
    </li>
    @can('isAdmin')
        <li class="nav-item align-self-center">
            <a class="nav-link" href="{{url('admin')}}">Data Aduan</a>
        </li>
    @elsecan('isPetugas')
        <li class="nav-item align-self-center">
            <a class="nav-link" href="{{url('admin')}}">Data Aduan</a>
        </li>
    @else
        <li class="nav-item align-self-center">
            <a class="nav-link" href="{{url('user')}}">Kirim Aduan</a>
        </li>
    @endcan
@endsection
