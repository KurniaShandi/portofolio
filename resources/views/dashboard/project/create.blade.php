@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('project.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Tambah Project</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Foto<small
                                    class="text-danger">*</small></label>
                            <input type="file" class="form-control" name="foto" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Project <small
                                    class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="nama_projek" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Project..." value="{{ old('nama_projek') }}"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Keterangan Project <small
                                    class="text-danger">*</small></label>
                            <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"
                                placeholder="Keterangan Project.." required>{{ old('keterangan') }}</textarea>
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
