@extends('template.admin')
@section('mega')
    @include('section.admin')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Horizontal Form</h3>
                            </div>
                            <form action="{{ url('updatepeminjaman', $peminjaman->id_peminjaman) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Kelompok</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_kelompok"
                                                value="{{ $peminjaman->nama_kelompok }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Laboratorium</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_laboratorium"
                                                value="{{ $peminjaman->nama_laboratorium }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address"
                                            class="col-md-4 col-form-label text-md-right">Jurusan</label>
                                        <div class="col-md-6">
                                            <input type="text" id="permanent_address" class="form-control" name="jurusan"
                                                value="Teknik Informatika" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keperluan Alat</label>
                                        <div class="col-sm-10">
                                            <textarea name="keperluan_alat" id="deskripsi" class="form-control" value="{{ $peminjaman->keperluan_alat }}"> {{ $peminjaman->keperluan_alat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_peminjaman"
                                                value="{{ date('Y-m-d', strtotime($peminjaman->tanggal_peminjaman)) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_selesai"
                                                value="{{ date('Y-m-d', strtotime($peminjaman->tanggal_selesai)) }}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info">Batal</button>
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
