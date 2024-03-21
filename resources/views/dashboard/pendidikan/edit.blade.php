@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('pendidikan.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Tambah Biodata</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pendidikan.update', $data->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Institusi</label>
                            <input type="text" class="form-control" name="institusi" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Perusahaan.." required
                                value="{{ $data->institusi }}">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Jurusan / Prodi</label>
                                        <input type="text" class="form-control" name="jurusan" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Bidang jurusan..."
                                            value="{{ $data->jurusan }}">
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label">Tahun Mulai</label>
                                    <select class="form-select select2" aria-label="Default select example"
                                        name="tahun_mulai", required>
                                        <option value="">Pilih Tahun Mulai...</option>
                                        @for ($tahun = $tahunMulai; $tahun <= $tahunIni; $tahun++)
                                            <option value="{{ $tahun }}"
                                                {{ $tahun == $data->tahun_mulai ? 'selected' : '' }}>{{ $tahun }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Kota</label>
                                    <input type="text" class="form-control" name="kota" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama Kota tempat bekerja"
                                        value="{{ $data->kota }}" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Selesai</label>
                                    <select class="form-select select2" aria-label="Default select example"
                                        name="tahun_selesai", required>
                                        <option value="">Pilih Tahun Selesai...</option>
                                        @for ($tahun = $tahunMulai; $tahun <= $tahunIni; $tahun++)
                                            <option value="{{ $tahun }}"
                                                {{ $tahun == $data->tahun_selesai ? 'selected' : '' }}>{{ $tahun }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Keterangan Pendidikan</label>
                            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"
                                placeholder="Ceritakan Tentang pendiidkan anda">{{ $data->keterangan }}</textarea>
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
