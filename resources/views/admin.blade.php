@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Data Aduan</div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Aduan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($aduans as $aduan)
                        <tr>
                            <td>{{ $aduan->nama }}</td>
                            <td>{{ $aduan->aduan }}</td>
                            <td>
                                @if($aduan->status == 0)
                                    <span class="badge badge-primary p-2">Data baru masuk</span>
                                @elseif($aduan->status == 1)
                                    <span class="badge badge-info p-2">Data Sedang dikerjakan</span>
                                @else
                                    <span class="badge badge-success p-2">Data Selesai dikerjakan</span>
                                @endif
                            </td>
                            <td>
                                <a href="javascript:;" data-toggle="popajax" data-url="{{ route('admin') }}/{{ $aduan->id }}" data-url-type="html" data-bs-toggle="tooltip" data-bs-placement="top" title="See" data-original-title="See"class="action-btn btn-edit bs-tooltip me-2 border-0 bg-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"> <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-modal-box" tabindex="-1" role="dialog" aria-labelledby="add-modal-box-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-modal-box-title"></h5>
                    <button type="button" class="btn-close bg-transparent border-0" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">

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