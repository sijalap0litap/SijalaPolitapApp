@extends('template.dosen')
@section('mega')
    @include('section.dosen')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Keluhan</h3>
                            <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i
                                    class="fa fa-plus"></i> Masukan Keluhan </button>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        {{-- <th>NIM/NIP </th> --}}
                                        <th>Nama Pengaju</th>

                                        <th>Deskripsi</th>
                                        <th>Foto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_keluhan as $data_keluhan)
                                        <tr>
                                            <td class="text-center">

                                                <div class="btn-group">
                                                    {{-- <a href="{{"show/$data_keluhan->id_keluhan"}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a> --}}
                                                    <a href="{{ "editkeluhan_dosen/$data_keluhan->id_keluhan" }}"
                                                        class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                </div>

                                            </td>
                                            {{-- <td>{{ $data_keluhan->nip_nim }}</td> --}}
                                            <td>{{ $data_keluhan->nama_pengaju }}</td>
                                            {{-- <td>{{ $data_keluhan->jurusan }}</td> --}}
                                            <td>{{ $data_keluhan->deskripsi }}</td>
                                            <td>
                                                <img src="{{ url("public/$data_keluhan->foto") }}" alt=""
                                                    style="width: 50%; height: 50%;">
                                            </td>


                                        </tr>
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
                    <h4 class="modal-title">Tambah Keluhan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('storekeluhan_dosen') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">NIP/NIM Peminjaman</label>
                            <input type="text" class="form-control" name="nip_nim">
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Pengaju</label>
                            <input type="text" class="form-control" name="nama_pengaju" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" required>
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
