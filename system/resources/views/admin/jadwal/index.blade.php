@extends('template.admin')
@section('mega')
    @include('section.admin')
    <div class="card">
        <div class="card-header">
            Jadwal Peminjaman
            <a href="{{ url('/jadwal/create') }}" class="btn btn-dark float-right">Tambah Jadwal</a>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        {{-- <th scope="">#</th> --}}
                        <th scope="col">Hari</th>
                        {{-- <th scope="col">Add</th> --}}
                        <th scope="col">Waktu Mulai</th>
                        <th scope="col">Waktu Selesai</th>
                        {{-- <th scope="col">Waktu Selesai</th> --}}

                    </tr>
                </thead>

                <tbody>
                    @foreach ($list_jadwal as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            {{-- <td>{{ $event->add }}</td> --}}
                            <td>{{ $event->start }}</td>
                            <td>{{ $event->end }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
