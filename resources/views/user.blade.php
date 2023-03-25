@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Ini adalah halaman user</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('navbar')
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('home')}}">Halaman Home</a>
        </li>
        @can('isAdmin')
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{url('user')}}">Halaman User</a>
        </li>
        @endcan
    </ul>
@endsection