@extends('template.dosen')
@section('mega')
@include('section.dosen')

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
            <div class="card card-primary card-outline">
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg{{$dosen->NIP}}"><i class="fa fa-plus"></i> Edit Profile </button>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{url("public/$dosen->foto")}}" id="icon"
                        alt="User profile picture">

                    </div>
                    <h3 class="profile-username text-center">{{$dosen->NIP}}</h3>

                    <p class="text-muted text-center">{{$dosen->nama}}</p>

                    <ul class="list-group list-group-unbordered mb-12">
                        <li class="list-group-item">
                            <b>No Handphone</b> <a class="float-right">{{$dosen->no_hp}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right">{{$dosen->email}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-lg{{$dosen->NIP}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('updateprofile_dosen', $dosen->NIP) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputPassword1">NIP</label>
                        <input type="text" class="form-control" name="NIP" value="{{$dosen->NIP}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="confirmasi_password" value="{{$dosen->confirmasi_password}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$dosen->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$dosen->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="{{$dosen->no_hp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" required>
                    </div>
                    <div class="card">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span>
                                Simpan</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush()
