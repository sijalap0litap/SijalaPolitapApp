@extends('template.ketua_lab')
@section('mega')
@include('section.kalab')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg{{$kalab->nip}}"><i class="fa fa-plus"></i> Edit Profile </button>

                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{url("public/$kalab->foto")}}" id="icon"
                        alt="User profile picture">

                    </div>
                    <h3 class="profile-username text-center">{{$kalab->nama_pengurus}}</h3>

                    <p class="text-muted text-center">{{$kalab->nip}}</p>

                    <ul class="list-group list-group-unbordered mb-12">
                        <li class="list-group-item">
                            <b>Username</b> <a class="float-right">{{$kalab->username}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jabatan</b> <a class="float-right">{{$kalab->jabatan}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>No Handphone</b> <a class="float-right">{{$kalab->no_hp}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-lg{{$kalab->nip}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit data profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('updateprofile_kalab', $kalab->nip) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputPassword1">NIP</label>
                        <input type="text" class="form-control" name="nip" value="{{$kalab->nip}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$kalab->username}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{$kalab->jabatan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="confirmasi_password" value="{{$kalab->confirmasi_password}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$kalab->email}}" required>
                    </div>
                        <label for="exampleInputPassword1">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="{{$kalab->no_hp}}" required>
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
