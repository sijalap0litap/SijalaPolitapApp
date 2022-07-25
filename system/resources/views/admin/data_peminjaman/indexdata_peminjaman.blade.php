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
                            <h3 class="card-title">Data Peminjaman</h3>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Aksi</th>
                                            <th>Nama Laboratorium</th>

                                            <th>Tanggal Peminjaman</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_peminjaman as $peminjaman)
                                            @if ($peminjaman->status == 2)
                                                <tr>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ "showdata_peminjaman/$peminjaman->id_data_peminjaman" }}"
                                                                class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $peminjaman->data_laboratorium->nama_lab }}</td>
                                                    {{-- <td>{{$peminjaman->jurusan}}</td> --}}
                                                    <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                                    <td>
                                                        @if ($peminjaman->status == 1)
                                                            <p>Pengajuan Baru</p>
                                                        @endif

                                                        @if ($peminjaman->status == 2)
                                                            <p>Pengajuan Diterima</p>
                                                        @endif

                                                        @if ($peminjaman->status == 3)
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
@endpush
