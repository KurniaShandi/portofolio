@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Skill</h2>
                </div>
            </div>
        </div>
        <div class="card mb-0 ">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <h5 class="card-title fw-semibold mb-4 d-inline">Skill</h5>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('skill.create') }}" class="btn  btn-primary"><i class="bi bi-plus"></i>
                            Tambah</a>
                    </div>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Skill</th>
                            <th scope="col" width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->skill }}</td>
                                <td>
                                    <a href="{{ route('skill.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>

                                    <form action="{{ route('skill.destroy', $item->id) }}" method="POST"
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
