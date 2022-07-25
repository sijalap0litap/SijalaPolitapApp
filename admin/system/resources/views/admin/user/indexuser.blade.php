@extends('template.admin')

@section('mega')
    @include('section.admin')

    @push('style')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush()

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data User</h3>
                            {{-- <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus"></i> Tambah Data User </button> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>NIM/NIP</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Email</th>
                                        <th>No HP</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_mahasiswa as $data_mahasiswa)
                                        @if ($data_mahasiswa->status == 1)
                                            <tr>
                                                <td>
                                                    <div class="btn-group">
                                                        <form
                                                            action="{{ url('verifikasi-mahasiswa', $data_mahasiswa->NIM) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="text"
                                                                value="{{ $data_mahasiswa->confirmasi_password }}"
                                                                name="confirmasi_password" hidden>
                                                            <button class="btn btn-primary"><span
                                                                    class="fa fa-check"></span> Verifikasi</button>
                                                        </form>
                                                    </div><br>
                                                    <a href="" class="btn btn-danger"><span
                                                            class="fa fa-trash"></span> Hapus</a>
                                                </td>
                                                <td>{{ $data_mahasiswa->NIM }}</td>
                                                <td>{{ $data_mahasiswa->nama }}</td>
                                                <td>{{ $data_mahasiswa->jurusan }}</td>
                                                <td>{{ $data_mahasiswa->email }}</td>
                                                <td>{{ $data_mahasiswa->no_hp }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @foreach ($list_data_dosen as $data_dosen)
                                        @if ($data_dosen->status == 1)
                                            <tr>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="{{ url('verifikasi-dosen', $data_dosen->NIP) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="text"
                                                                value="{{ $data_dosen->confirmasi_password }}"
                                                                name="confirmasi_password" hidden>
                                                            <button class="btn btn-primary"><span
                                                                    class="fa fa-check"></span> Verifikasi</button>
                                                        </form>
                                                    </div><br>
                                                    <a href="" class="btn btn-danger"><span
                                                            class="fa fa-trash"></span> Hapus</a>
                                                </td>
                                                <td>{{ $data_dosen->NIP }}</td>
                                                <td>{{ $data_dosen->nama }}</td>
                                                <td>{{ $data_dosen->jurusan }}</td>
                                                <td>{{ $data_dosen->email }}</td>
                                                <td>{{ $data_dosen->no_hp }}</td>

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

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
