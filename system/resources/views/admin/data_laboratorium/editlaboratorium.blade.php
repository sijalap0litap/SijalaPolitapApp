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
                                <h3 class="card-title">Edit Data Laboratorium</h3>
                            </div>
                            <form action="{{ url('updatedata_laboratorium', $data_laboratorium->id_laboratorium) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Laboratorium</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_laboratorium"
                                                value="{{ $data_laboratorium->nama_laboratorium }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Kelompok</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_kelompok"
                                                value="{{ $data_laboratorium->nama_kelompok }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <select name="jurusan" id="" class="form-control">
                                                <option value="Teknik informatika"
                                                    @if ($data_laboratorium->jurusan == 'Teknik informatika') selected @endif> Teknik informatika
                                                </option>

                                                <option value="Teknik mesin"
                                                    @if ($data_laboratorium->jurusan == 'Teknik mesin') selected @endif> Teknik mesin</option>

                                                <option value="Teknik Informatika"
                                                    @if ($data_laboratorium->jurusan == 'Teknik Informatika') selected @endif> Teknik
                                                    Informatika</option>

                                                <option value="Teknik pertambangan"
                                                    @if ($data_laboratorium->jurusan == 'Teknik pertambangan') selected @endif> Teknik pertambangan
                                                </option>

                                                <option value="Teknik Elektro"
                                                    @if ($data_laboratorium->jurusan == 'Teknik Elektro') selected @endif> Teknik Elektro
                                                </option>

                                                <option value="TPHP" @if ($data_laboratorium->jurusan == 'TPHP') selected @endif>
                                                    TPHP</option>

                                                <option value="BTP" @if ($data_laboratorium->jurusan == 'BTP') selected @endif>
                                                    BTP</option>

                                                <option value="Teknik sipil"
                                                    @if ($data_laboratorium->jurusan == 'Teknik sipil') selected @endif> Teknik sipil</option>
                                                <option value="Agroindustri"
                                                    @if ($data_laboratorium->jurusan == 'Agroindustri') selected @endif> Agroindustri</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keperluan Alat</label>
                                        <div class="col-sm-10">
                                            <textarea name="keperluan_alat" id="deskripsi" class="form-control" value="{{ $data_laboratorium->keperluan_alat }}"> {{ $data_laboratorium->keperluan_alat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_peminjaman"
                                                value="{{ date('Y-m-d', strtotime($data_laboratorium->tanggal_peminjaman)) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tanggal_selesai"
                                                value="{{ date('Y-m-d', strtotime($data_laboratorium->tanggal_selesai)) }}">
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
