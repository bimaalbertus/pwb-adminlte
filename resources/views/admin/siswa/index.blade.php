@extends('layout.layout')
@section('title', 'Tabel')
@section('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
            <div class="d-flex">
                <a href="/admin/siswa/tambah" class="mr-2">
                    <button type="button" class="btn btn-primary">Tambah Siswa</button>
                </a>
                <form action="/admin/siswa" method="POST" onsubmit="return confirm('Kamu yakin ingin menghapus semua?');"
                    class="mr-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus semua data</button>
                </form>
            </div>
        </div>
    </section>

    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td class="d-flex">
                        <form action="/admin/siswa/{{ $siswa->id }}" method="POST"
                            onsubmit="return confirm('Kamu yakin ingin menghapus {{ $siswa->nama }}?');" class="mr-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="/admin/siswa/{{ $siswa->id }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
