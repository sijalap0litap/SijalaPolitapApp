@extends('template.mahasiswa')
@section('mega')
    @include('section.mahasiswa')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        Ini Adalah Beberapa Detail Peminjaman Laboratorium Yang Ada Di Politeknik Negeri Ketapang
                    </div>
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Detail Peminjaman Laboratorium
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>

                                    <tr>
                                        <th>Nama Laboratorium</th>
                                        <th>NIM</th>
                                        <th>Nama Kelompok</th>
                                        <th>TanggalPeminjaman</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Kebutuhan Alat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @csrf
                                    <tr>
                                        <td class="text-center">{{ $data_peminjaman->data_laboratorium->nama_lab }}</td>
                                        <td class="text-center">{{ $data_peminjaman->nip_nim }}</td>
                                        <td class="text-center">{{ $data_peminjaman->nama_kelompok }}</td>
                                        <td class="text-center">{{ $data_peminjaman->tanggal_peminjaman }}</td>
                                        <td class="text-center">{{ $data_peminjaman->waktu_mulai }}</td>
                                        <td class="text-center">{{ $data_peminjaman->waktu_selesai }}</td>
                                        <td class="text-center">{{ $data_peminjaman->keperluan_alat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
