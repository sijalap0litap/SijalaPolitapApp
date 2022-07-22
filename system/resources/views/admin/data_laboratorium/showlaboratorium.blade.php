@extends('template.admin')
@section('mega')
@include('section.admin')

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
             Ini Adalah Beberapa Detail Laboratorium Yang Ada Di Politeknik Negeri Ketapang
            </div>
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Detail Laboratorium
                  </h4>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>Nama_Laboratorium</th>
                    <th>Jurusan</th>
                    <th>Nama Gedung</th>
                    <th>Lantai</th>
                    <th>Nama Teknisi</th>
                    <th>Kapasitas</th>
                    </tr>
                    </thead>
                      <tbody>
                        @csrf
                         <tr>
                           <td>{{$data_laboratorium->nama_lab}}</td>
                           <td>{{$data_laboratorium->jurusan}}</td>
                           <td>{{$data_laboratorium->nama_gedung}}</td>
                           <td>{{$data_laboratorium->lantai}}</td>
                           <td>{{$data_laboratorium->nama_teknisi}}</td>
                           <td>{{$data_laboratorium->kapasitas_lab}}</td>
                          </tr>

                      </tbody>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </section>
@endsection
