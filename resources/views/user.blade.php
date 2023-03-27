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
            <form action="{{ route('user.aduan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">Isi Aduan</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                        </div>
                        <div class="col-md-12 my-3">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_telp">
                        </div>
                        <div class="col-md-12 my-3">
                            <label>NIK</label>
                            <input type="text" class="form-control" placeholder="NIK" name="nik">
                        </div>
                        <div class="col-md-12 my-3">
                            <label>Aduan</label>
                            <textarea class="form-control" placeholder="Aduan" name="aduan"></textarea>
                        </div>
                        <div class="col-md-12 my-3">
                            <label>Lokasi</label>
                            <textarea class="form-control" placeholder="Lokasi" name="lokasi"></textarea>
                        </div>
                        <div class="col-md-12 my-3">
                            <label>Foto</label>
                            <input type="file" class="form-control" placeholder="Image" name="image">
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