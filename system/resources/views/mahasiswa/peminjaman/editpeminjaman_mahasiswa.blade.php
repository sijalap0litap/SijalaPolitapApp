@extends('template.mahasiswa')
@section('mega')
    @include('section.mahasiswa')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Peminjaman</h3>
                            </div>
                            <form action="{{ url('updatepeminjaman_mahasiswa', $data_peminjaman->id_data_peminjaman) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row mt-3">
                                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Nama
                                        Laboratorium</label>
                                    <div class="col-sm-10">
                                        <select name="id_lab" class="form-control" id="" required>
                                            <option value=""> Pilih Nama Lab</option>
                                            @foreach ($list_data_laboratorium as $data_laboratorium)
                                                <option value="{{ $data_laboratorium->id_lab }}" required>
                                                    {{ $data_laboratorium->nama_lab }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nip_nim"
                                            value="{{ $data_peminjaman->nip_nim }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kelompok</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_kelompok"
                                            value="{{ $data_peminjaman->nama_kelompok }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_peminjaman"
                                            value="{{ date('Y-m-d', strtotime($data_peminjaman->tanggal_peminjaman)) }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Waktu Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="waktu_mulai"
                                            value="{{ $data_peminjaman->waktu_mulai }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Waktu Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="waktu_selesai"
                                            value="{{ $data_peminjaman->waktu_selesai }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keperluan Alat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="keperluan_alat"
                                            value="{{ $data_peminjaman->keperluan_alat }}" required>
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
