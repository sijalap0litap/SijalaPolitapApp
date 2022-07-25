@extends('template.admin')
@section('mega')
@include('section.admin')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card card-primary card-outline">
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg{{$user->id}}"><i class="fa fa-plus"></i> Edit Profile </button>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{url("public/$user->foto")}}" id="icon"
                        alt="User profile picture">

                    </div>
                    <h3 class="profile-username text-center" >
                        {{$user->nama}}
                    </h3>

                    <ul class="list-group list-group-unbordered mb-12">
                        <li class="list-group-item">
                            <b>Username</b> <a class="float-right">{{$user->username}}</a >
                        </li>
                        <li class="list-group-item">
                            <b>Password</b> <a class="float-right">{{$user->password}}</a >
                        </li>
                        {{-- <li class="list-group-item">
                            <b>No Handphone</b> <a class="float-right">13,287</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-lg{{$user->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('updateprofile', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$user->username}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="confirmasi_password" value="{{$user->confirmasi_password}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$user->nama}}" required>
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
