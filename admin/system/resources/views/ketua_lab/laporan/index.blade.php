@extends('template.ketua_lab')

@section('mega')
    @include('section.kalab')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Seluruh Peminjaman</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Laboratorium</th>
                                        <th>Nama Kelompok</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Kebutuhan Alat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_data_peminjaman as $data_peminjaman)
                                        <tr>
                                            <td>{{ $data_peminjaman->data_laboratorium->nama_lab }}</td>
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
