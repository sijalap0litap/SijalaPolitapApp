@extends('template.admin')
@section('mega')
    @include('section.admin')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <h3 class="profile-username text-center"> {{ $data_peminjaman->data_laboratorium->nama_lab }}
                                @csrf
                                <p class="text-muted text-center">{{ $data_peminjaman->data_laboratorium->nama_teknisi }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Kapasitas Lab</b>
                                        <a class="float-right">{{ $data_peminjaman->data_laboratorium->kapasitas_lab }}</a>
                                    </li>
                                    {{-- <b>Jurusan</b>
                                <a class="float-right">{{$data_peminjaman->data_laboratorium->jurusan}}</a> --}}

                                    <li class="list-group-item">
                                        <b>Nama Gedung</b>
                                        <a class="float-right">{{ $data_peminjaman->data_laboratorium->nama_gedung }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Lantai</b>
                                        <a class="float-right">{{ $data_peminjaman->data_laboratorium->lantai }}</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <div class="post">
                                    <div class="user-block">
                                        <span class="username">
                                            <a href="#">{{ $data_peminjaman->nama_kelompok }}</a>
                                        </span>
                                        <span class="description">
                                            {{ $data_peminjaman->tanggal_peminjaman }}
                                        </span>
                                        <br>
                                        <span class="description">
                                            {!! nl2br($data_peminjaman->keperluan_alat) !!}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
