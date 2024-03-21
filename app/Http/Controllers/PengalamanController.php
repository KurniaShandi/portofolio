<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengalaman::where('user_id', Auth::id())->orderBy('tahun_mulai', 'desc')->get();
        return view('dashboard.pengalaman.index', [
            'title' => 'Pengalaman',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tahunMulai = 2000;
        $tahunIni  = date('Y');
        return view('dashboard.pengalaman.create', [
            'title' => 'Create Pengalaman',
            'tahunMulai' => $tahunMulai,
            'tahunIni' => $tahunIni,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tahun_mulai' => 'required|integer|min:2000|max:9999',
            'tahun_selesai' => 'required|integer|min:2000|max:9999|after_or_equal:tahun_mulai',
        ]);

        Pengalaman::create([
            'user_id' => Auth::id(),
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'pekerjaan' => $request->pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'kota' => $request->kota,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('pengalaman.index')->with(['success' => 'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tahunMulai = 2000;
        $tahunIni  = date('Y');
        $data = Pengalaman::find($id);
        return view('dashboard.pengalaman.edit', [
            'title' => 'Update Pengalaman',
            'data' => $data,
            'tahunMulai' => $tahunMulai,
            'tahunIni' => $tahunIni,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'tahun_mulai' => 'required|integer|min:2000|max:9999',
            'tahun_selesai' => 'required|integer|min:2000|max:9999|after_or_equal:tahun_mulai',
        ]);

        Pengalaman::find($id)->update([
            'user_id' => Auth::id(),
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_selesai' => $request->tahun_selesai,
            'pekerjaan' => $request->pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'kota' => $request->kota,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('pengalaman.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengalaman::find($id)->delete();
        return redirect()->route('pengalaman.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
