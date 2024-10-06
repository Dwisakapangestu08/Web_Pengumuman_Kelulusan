@extends('layouts.main')


@section('konten')
    <h5 class="card-title">Nama Siswa <span>| Keterangan</span></h5>

    <table class="table table-borderless datatable">
        <thead>
            <tr>
                <th scope="col">No Absen</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Keterangan</th>
                {{-- <th scope="col">Keterangan</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ Auth::user()->no_absen }}</th>
                <td>{{ Auth::user()->nis }}</td>
                <td>{{ Auth::user()->nama }}</td>
                <td>{{ Auth::user()->kelas }}</td>
                <td>{{ Auth::user()->keterangan }}</td>
            </tr>
        </tbody>
    </table>
@endsection
