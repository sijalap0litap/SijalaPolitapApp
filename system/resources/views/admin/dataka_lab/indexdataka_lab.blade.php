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
                <h3 class="card-title">Data Kepala Laboratorium</h3>
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus"></i> Tambah Data Kalab </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Aksi</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>No_hp</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($list_dataka_lab as $dataka_lab)
                    <tr>
                    <td>

                        <div class="btn-group">
                        <a href="{{"showdataka_lab/$dataka_lab->nip"}}" class="btn btn-dark"><i class="fa fa-info"></i> Lihat</a>
                        <a href="{{"editdataka_lab/$dataka_lab->nip"}}" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>

                        </div>
                    </td>
                    <td>{{$dataka_lab->nip}}</td>
                    <td>{{$dataka_lab->nama_pengurus}}</td>
                    <td>{{$dataka_lab->jabatan}}</td>
                    <td>{{$dataka_lab->email}}</td>
                    <td>{{$dataka_lab->no_hp}}</td>
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
        <h4 class="modal-title">Tambah Data Kepala Laboratorium</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('storedataka_lab')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Nip</label>
            <input type="text" class="form-control" id="exampleInputNip" placeholder="Nip"  name="nip" required>
          </div>
          <div class="form-group">
            <label>Nama Pengurus</label>
            <input type="text" class="form-control" id="exampleInputNamaPengurus" placeholder="Nama Pengurus"  name="nama_pengurus" required>
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="exampleInputNamaPengurus" placeholder="Username"  name="username" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password"  name="password" required>
          </div>

          <div class="form-group">
            <label>Confirmasi Password</label>
            <input type="password" class="form-control" placeholder="Confirmasi Password"  name="confirmasi_password" required>
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Jabatan"  name="jabatan" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email"  name="email" required>
          </div>
          <div class="form-group">
            <label>No_Hp</label>
            <input type="text" class="form-control" id="exampleInputNo_Hp" placeholder="No_Hp"  name="no_hp" required>
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
