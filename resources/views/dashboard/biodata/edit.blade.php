@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('biodata.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Tambah Biodata</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('biodata.update', $data->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Foto<small
                                    class="text-danger">*</small></label>
                            <input type="file" class="form-control" name="foto" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap <small
                                    class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="nama_lengkap" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->nama_lengkap }}" placeholder="Nama Lengkap"
                                required>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Link Instagram</label>
                            <input type="url" class="form-control" name="ig" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->ig }}" placeholder="Url Instagram">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Link Facebook </label>
                            <input type="url" class="form-control" name="fb" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->fb }}" placeholder="Url Facebook">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Github</label>
                            <input type="url" class="form-control" name="github" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->github }}" placeholder="Url Github">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">About</label>
                            <textarea name="about" id="" cols="30" rows="10" class="form-control">{{ $data->about }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
