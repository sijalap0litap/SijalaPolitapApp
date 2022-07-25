@extends('template.admin')
@section('mega')
@include('section.admin')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <li class="list-group-item">
                            <b>NIP</b>
                        <h3 class="profile-username text-center"> {{$dataka_lab->nip}}
                        @csrf
                        <li class="list-group-item">
                            <b>Nama Pengurus</b>
                            <p class="text-muted text-center">{{$dataka_lab->nama_pengurus}}</p>
                            <li class="list-group-item">
                                <b>Jabatan</b>
                                <a class="float-right">{{$dataka_lab->jabatan}}</a>
                            </li>
                                <b>Email</b>
                                <a class="float-right">{{$dataka_lab->email}}</a>


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
                                    <a href="#">{{$dataka_lab->nama_kelompok}}</a>
                                    </span>
                                    <span class="description">
                                        {{$dataka_lab->tanggal_peminjaman}}
                                    </span>
                                    <br>
                                    <span class="description">
                                        {!! nl2br($dataka_lab->keperluan_alat) !!}
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


