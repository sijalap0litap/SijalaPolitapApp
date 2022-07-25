@extends('template.dosen')
@section('mega')
    @include('section.dosen')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Keluhan</h3>
                        </div>
                        <form action="{{ url('updatekeluhan_dosen', $data_keluhan->id_keluhan) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Pengaju</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_pengaju"
                                            value="{{ $data_keluhan->nama_pengaju }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="deskripsi"
                                            value="{{ $data_keluhan->deskripsi }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="foto"
                                            value="{{ $data_keluhan->foto }}" accept=".jpg, .png, .jpeg">
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
