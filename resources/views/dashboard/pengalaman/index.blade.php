@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Pengalaman</h2>
                </div>
            </div>
        </div>
        <div class="card mb-0 ">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <h5 class="card-title fw-semibold mb-4 d-inline">Pengalaman</h5>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('pengalaman.create') }}" class="btn  btn-primary"><i class="bi bi-plus"></i>
                            Tambah</a>
                    </div>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Bidang Pekerjaan</th>
                            <th scope="col">Tahun Mulai</th>
                            <th scope="col">Tahun Selesai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_perusahaan }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td>{{ $item->tahun_mulai }}</td>
                                <td>{{ $item->tahun_selesai }}</td>
                                <td>
                                    <a href="{{ route('pengalaman.edit', $item->id) }}"
                                        class="btn btn-sm btn-success">Edit</a>

                                    <form action="{{ route('pengalaman.destroy', $item->id) }}" method="POST"
                                        onclick="return confirm('Yakin Untuk Mengapus Data ?')" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
