<!DOCTYPE html>
<html>

<head>
    <title>Import Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h4 class="mt-3">Import Data Siswa</h4>
            {{-- <h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5> --}}
        </center>

        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $sukses }}</strong>
            </div>
        @endif

        <button type="button" class="btn btn-primary  my-3" data-toggle="modal" data-target="#importExcel">
            IMPORT FILE EXCEL
        </button>
        <a href="/data-siswa/delete/" class="btn btn-danger my-3"
            onclick="return confirm('Yakin ingin menghapus semua data?')">HAPUS SEMUA DATA</a>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="/data-siswa" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">

                            {{ csrf_field() }}

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        {{-- <a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}

        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>No Absen</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $s->kelas }}</td>
                        <td>{{ $s->no_absen }}</td>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
