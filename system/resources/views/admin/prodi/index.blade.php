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
                    <th>Id Prodi</th>
                    <th>Nama Prodi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($list_prodi as $prodi)
                    <tr>

                    <td>{{$prodi->id_prodi}}</td>
                    <td>{{$prodi->nama_prodi}}</td>
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
        <form action="{{url('storeprodi')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Id Prodi</label>
            <input type="text" class="form-control" placeholder="Id Prodi"  name="id_prodi" required>
          </div>
          <div class="form-group">
            <label>Nama Prodi</label>
            <input type="text" class="form-control" placeholder="Nama Prodi"  name="nama_prodi" required>
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
