@extends('template.ketua_lab')
@section('mega')
    @include('section.kalab')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Keluhan</h3>
                            {{-- <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i
                                    class="fa fa-plus"></i> Masukan Keluhan </button> --}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>NIM/NIP </th> --}}
                                        <th>Nama Pengaju</th>
                                        {{-- <th>Jurusan</th> --}}
                                        <th>Deskripsi</th>
                                        <th>Foto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_keluhan as $data_keluhan)
                                        <tr>
                                            {{-- <td class="text-center">

                                                <div class="btn-group">
                                                <a href="{{"show/$data_keluhan->id_keluhan"}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                <a href="{{"edit/$data_keluhan->id_keluhan"}}" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                                </div>

                                            </td> --}}
                                            {{-- <td>{{ $data_keluhan->nip_nim }}</td> --}}
                                            <td>{{ $data_keluhan->nama_pengaju }}</td>
                                            {{-- <td>{{ $data_keluhan->jurusan}}</td> --}}
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
@endsection
