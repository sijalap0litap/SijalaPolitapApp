@extends('template.mahasiswa')
@section('mega')
    @include('section.mahasiswa')
    @push('style')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush()

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Peminjaman</h3>
                            <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i
                                    class="fa fa-plus"></i> Tambah Peminjaman </button>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Nama Laboratorium</th>
                                        <th>NIM</th>
                                        <th>Nama Kelompok</th>
                                        <th>TanggalPeminjaman</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Kebutuhan Alat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_peminjaman as $data_peminjaman)
                                        @if ($data_peminjaman->nip_nim == $mahasiswa->NIM)
                                            <tr>
                                                <td class="text-center">

                                                    <div class="btn-group">
                                                        <a href="{{ "showpeminjaman_mahasiswa/$data_peminjaman->id_data_peminjaman" }}"
                                                            class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                        <a href="{{ "editpeminjaman/$data_peminjaman->id_data_peminjaman" }}"
                                                            class="btn btn-warning"><span class="fa fa-edit"></span>
                                                            Edit</a>
                                                    </div>

                                                </td>
                                                <td>{{ $data_peminjaman->data_laboratorium->nama_lab }}</td>
                                                <td>{{ $data_peminjaman->nip_nim }}</td>
                                                <td>{{ $data_peminjaman->nama_kelompok }}</td>

                                                <td>{{ $data_peminjaman->tanggal_peminjaman }}</td>
                                                {{-- <td>{{ $data_peminjaman->tanggal_selesai }}</td> --}}
                                                <td>{{ $data_peminjaman->waktu_mulai }}</td>
                                                <td>{{ $data_peminjaman->waktu_selesai }}</td>
                                                <td>{{ $data_peminjaman->keperluan_alat }}</td>
                                                <td>
                                                    @if ($data_peminjaman->status == 1)
                                                        <p>Pengajuan Baru</p>
                                                    @endif

                                                    @if ($data_peminjaman->status == 2)
                                                        <p>Pengajuan Diterima</p>
                                                    @endif

                                                    @if ($data_peminjaman->status == 3)
                                                        <p>Pengajuan Ditolak</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah peminjaman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('storepeminjaman_mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Laboratorium</label>
                            <select name="id_lab" class="form-control" id="" required>
                                <option value=""> Pilih Nama Lab</option>
                                @foreach ($list_data_laboratorium as $data_laboratorium)
                                    <option value="{{ $data_laboratorium->id_lab }}">
                                        {{ $data_laboratorium->nama_lab }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <input type="text" class="form-control" name="nip_nim" value="{{ $mahasiswa->NIM }}" hidden>
                        <input type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                            hidden>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Kelompok</label>
                            <input type="text" class="form-control" name="nama_kelompok" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="exampleInputTanggalPeminjaman"
                                name="tanggal_peminjaman" required>
                        </div>
                        <div class="form-grup pb-3">
                            <label for="exampleInputEmail1">Hari</label>
                            <select class="form-control" name="hari" required>
                                <option value="">Pilih Hari</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Mulai</label>
                            <select class="form-control" name="waktu_mulai" required>
                                <option value="">Pilih Jam</option>
                                <option value="8">7</option>
                                <option value="9">8</option>
                                <option value="10">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Selesai</label>
                            <select class="form-control" name="waktu_selesai" required>
                                <option value="">Pilih Jam</option>
                                <option value="8">7</option>
                                <option value="9">8</option>
                                <option value="10">9</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="exampleInputTanggalSelesai"
                                name="tanggal_selesai" required>
                        </div> --}}

                        <div class="form-group">
                            <label for="exampleInputPassword1">Kebutuhan Alat</label>
                            <input type="text" class="form-control" name="keperluan_alat" required>
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
