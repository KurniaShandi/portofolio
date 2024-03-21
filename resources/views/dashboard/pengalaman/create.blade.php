@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('pengalaman.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Tambah Biodata</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pengalaman.store') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_perusahaan" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Perusahaan.." required
                                value="{{ old('nama_perusahaan') }}">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Bidang Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Bidang pekerjaan..."
                                            value="{{ old('pekerjaan') }}" required>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label">Tahun Mulai</label>
                                    <select class="form-select select2" aria-label="Default select example"
                                        name="tahun_mulai", required>
                                        <option value="">Pilih Tahun Mulai...</option>
                                        @for ($tahun = $tahunMulai; $tahun <= $tahunIni; $tahun++)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Kota</label>
                                    <input type="text" class="form-control" name="kota" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama Kota tempat bekerja"
                                        value="{{ old('kota') }}" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Selesai</label>
                                    <select class="form-select select2" aria-label="Default select example"
                                        name="tahun_selesai", required>
                                        <option value="">Pilih Tahun Selesai...</option>
                                        @for ($tahun = $tahunMulai; $tahun <= $tahunIni; $tahun++)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Keterangan Pekerjaan</label>
                            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"
                                placeholder="Ceritakan Tentang pendiidkan anda"></textarea>
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
