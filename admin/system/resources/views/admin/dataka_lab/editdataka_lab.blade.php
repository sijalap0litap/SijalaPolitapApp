@extends('template.admin')
@section('mega')
    @include('section.admin')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Kepala Laboratorium</h3>
                            </div>
                            <form action="{{ url('updatedataka_lab', $dataka_lab->nip) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nip</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nip"
                                                value="{{ $dataka_lab->nip }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Pengurus</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_pengurus"
                                                value="{{ $dataka_lab->nama_pengurus }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jabatan"
                                                value="{{ $dataka_lab->jabatan }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username"
                                                value="{{ $dataka_lab->username }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="confirmasi_password"
                                                value="{{ $dataka_lab->confirmasi_password }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $dataka_lab->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_hp"
                                                value="{{ $dataka_lab->no_hp }}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-danger">Batal</button>
                                        <button class="btn btn-primary float-right">Simpan</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    @endsection

    @push('style')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush()

    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#deskripsi').summernote();
            });
        </script>
    @endpush
