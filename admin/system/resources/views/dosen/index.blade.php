@extends('template.dosen')
@section('mega')
    @include('section.dosen')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card m12">
                        <div class="col-lg-12">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $peminjaman }}</h3>

                                    <p>Jumlah Peminjaman</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $lab }}</h3>

                                    <p>Jumlah Lab</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-home"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">

            <div class="col-lg-12">
                <h5 class="text-center "><b> INFORMASI LABORATORIUM </b></h5>
            </div>
        </div>
        <div class="ml-12 mr-12 mb-12">
            <table class="table table-bordered">
                <thead>
                    <th>Nama Laboratorium</th>
                    <th>Jurusan</th>
                    <th>Kapasitas</th>
                </thead>
                <tbody>
                    @foreach ($list_data_laboratorium as $data_laboratorium)
                        <tr>
                            <td>{{ $data_laboratorium->nama_lab }}</td>
                            <td>{{ $data_laboratorium->jurusan }}</td>
                            <td>{{ $data_laboratorium->kapasitas_lab }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
