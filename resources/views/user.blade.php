@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <form action="{{ route('user.aduan') }}" method="post">
                @csrf
                <div class="card-header">Isi Aduan</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                        </div>
                        <div class="col-md-12 my-3">
                            <label>Aduan</label>
                            <textarea cols="30" rows="10" class="form-control" placeholder="Aduan" name="aduan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
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