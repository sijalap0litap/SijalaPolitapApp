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
                <h3 class="card-title">Data Laboratorium</h3>
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus"></i> Tambah Data Laboratorium </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Aksi</th>
                    <th>Nama Laboratorium</th>
                    <th>Jurusan</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($list_data_laboratorium as $data_laboratorium)
                    <tr>
                    <td>
                        <div class="btn-group">
                        <a href="{{"showlaboratorium/$data_laboratorium->id_lab"}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                        </div>
                    </td>
                    <td>{{$data_laboratorium->nama_lab}}</td>
                    <td>{{$data_laboratorium->jurusan}}</td>
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
        <h4 class="modal-title">Tambah Data Laboratorium</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('storedata_laboratorium')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Nama Laboratorium</label>
            <input type="text" class="form-control" placeholder="Nama Laboratorium"  name="nama_lab" required>
          </div>
          <div class="form-group">
            <label>Nama Gedung</label>
            <input type="text" class="form-control" placeholder="Nama Gedung"  name="nama_gedung" required>
          </div>
          <div class="form-group">
            <label>Lantai</label>
            <input type="text" class="form-control" placeholder="Lantai"  name="lantai" required>
          </div>
          <div class="form-group">
            <label>Kapasitas Lab</label>
            <input type="text" class="form-control" placeholder="Kapasitas Lab"  name="kapasitas_lab" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jurusan</label>
            <select name="jurusan" id="" class="form-control">
              <option value=""> Pilih Jurusan</option>
              <option value="Teknik Informatika"> Teknik Informatika</option>
              <option value="Teknik Elektro"> Teknik Elektro</option>
              <option value="Teknik Sipil"> Teknik Sipil</option>
              <option value="Teknik Mesin"> Teknik Mesin</option>
              <option value="Teknik Pertambangan"> Teknik Pertambangan</option>
              <option value="TPHP"> TPHP</option>
              <option value="BTP"> BTP</option>
              <option value="Agroindustri"> Agroindustri</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Teknisi</label>
            <input type="text" class="form-control" name="nama_teknisi" required>
          </div>

          <div class="card">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
      $('#deskripsi').summernote();
    });
</script>
