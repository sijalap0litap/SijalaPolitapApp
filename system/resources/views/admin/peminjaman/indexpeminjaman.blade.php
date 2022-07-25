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
                            <h3 class="card-title">Peminjaman Dosen</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Nama Laboratorium</th>
                                        <th>NIP</th>
                                        <th>Nama Kelompok</th>
                                        <th>Keperluan Alat</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_peminjaman as $data_peminjaman)
                                        @if ($data_peminjaman->status == 1)
                                            @if ($data_peminjaman->jabatan == 1)
                                                <tr>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ "showpeminjaman/$data_peminjaman->id_data_peminjaman" }}"
                                                                class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                            <form
                                                                action="{{ url('setuju', $data_peminjaman->id_data_peminjaman) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary"><span
                                                                        class="fa fa-check"></span> Setuju</button>
                                                            </form>
                                                            <form
                                                                action="{{ url('tolak', $data_peminjaman->id_data_peminjaman) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-warning"><span
                                                                        class="fa fa-times"></span> Tolak</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>{{ $data_peminjaman->data_laboratorium->nama_lab }}</td>
                                                    <td>{{ $data_peminjaman->nip_nim }}</td>

                                                    <td>{{ $data_peminjaman->keperluan_alat }}</td>
                                                    <td>{{ $data_peminjaman->tanggal_peminjaman }}</td>
                                                    <td>{{ $data_peminjaman->waktu_mulai }}</td>
                                                    <td>{{ $data_peminjaman->waktu_selesai }}</td>
                                                    {{-- <td>{{ $data_peminjaman->jurusan }}</td> --}}
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
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="card-header">
                            <h3 class="card-title">Peminjaman Mahasiswa</h3>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Nama Laboratorium</th>
                                        <th>NIM</th>
                                        <th>Nama Kelompok</th>
                                        <th>Keperluan Alat</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_peminjaman as $data_peminjaman)
                                        @if ($data_peminjaman->status == 1)
                                            @if ($data_peminjaman->jabatan == 2)
                                                <tr>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ "showpeminjaman/$data_peminjaman->id_data_peminjaman" }}"
                                                                class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                            <form
                                                                action="{{ url('setuju', $data_peminjaman->id_data_peminjaman) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary"><span
                                                                        class="fa fa-check"></span> Setuju</button>
                                                            </form>
                                                            <form
                                                                action="{{ url('tolak', $data_peminjaman->id_data_peminjaman) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-warning"><span
                                                                        class="fa fa-times"></span> Tolak</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>{{ $data_peminjaman->data_laboratorium->nama_lab }}</td>
                                                    <td>{{ $data_peminjaman->nip_nim }}</td>
                                                    <td>{{ $data_peminjaman->nama_kelompok }}</td>
                                                    <td>{{ $data_peminjaman->keperluan_alat }}</td>
                                                    <td>{{ $data_peminjaman->tanggal_peminjaman }}</td>
                                                    <td>{{ $data_peminjaman->waktu_mulai }}</td>
                                                    <td>{{ $data_peminjaman->waktu_selesai }}</td>
                                                    {{-- <td>{{ $data_peminjaman->jurusan }}</td> --}}
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
