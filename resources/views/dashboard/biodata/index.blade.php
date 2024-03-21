@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
        <div class="card mb-0 ">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <h5 class="card-title fw-semibold mb-4 d-inline">Biodata</h5>
                    </div>
                    @if ($cekuser == null)
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('biodata.create') }}" class="btn  btn-primary"><i class="bi bi-plus"></i>
                                Tambah</a>
                        </div>
                    @endif

                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">FB</th>
                            <th scope="col">Github</th>
                            <th scope="col" width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><img src="{{ url('images/foto/' . $item->foto) }}" class="img-fluid"
                                        style="width: 100px"></td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td><a href="{{ $item->ig }}">{{ Str::limit($item->ig, 5, '...') }}</a></td>
                                <td><a href="{{ $item->fb }}">{{ Str::limit($item->fb, 5, '...') }}</a></td>
                                <td><a href="{{ $item->github }}">{{ Str::limit($item->github, 5, '...') }}</a></td>

                                <td>
                                    <a href="{{ route('biodata.edit', $item->id) }}"
                                        class="btn btn-sm btn-success">Edit</a>

                                    <form action="{{ route('biodata.destroy', $item->id) }}" method="POST"
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
