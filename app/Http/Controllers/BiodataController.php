<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::where('user_id', Auth::user()->id);
        return view('dashboard.biodata.index', [
            'data' => $data->get(),
            'title' => 'Biodata',
            'cekuser' => $data->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.biodata.create', [
            'title' => 'Create Biodata',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_lengkap'    => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('/images/foto/', $foto->hashName());

        Biodata::create([
            'foto' => $foto->hashName(),
            'user_id' => Auth::id(),
            'nama_lengkap' => $request->nama_lengkap,
            'ig' => $request->ig,
            'fb' => $request->fb,
            'github' => $request->github,
            'about' => $request->about,
        ]);
        return redirect()->route('biodata.index')->with(['success' => 'Berhasil Create Data']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Biodata::find($id);
        return view('dashboard.biodata.edit', [
            'data' => $data,
            'title' => 'Edit Biodata',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama_lengkap'    => 'required',
        ]);

        $foto = $request->file('foto');
        $cekData = Biodata::find($id);
        if ($foto) {
            // hapus foto lama
            Storage::exists('images/foto/' . $cekData->foto);
            Storage::delete('images/foto/' . $cekData->foto);
            // upload foto baru
            $foto->storeAs('/images/foto/', $foto->hashName());
            $data = [
                'foto' => $foto->hashName(),
                'user_id' => Auth::id(),
                'nama_lengkap' => $request->nama_lengkap,
                'ig' => $request->ig,
                'fb' => $request->fb,
                'github' => $request->github,
                'about' => $request->about,
            ];
        } else {
            $data = [
                'user_id' => Auth::id(),
                'nama_lengkap' => $request->nama_lengkap,
                'ig' => $request->ig,
                'fb' => $request->fb,
                'github' => $request->github,
                'about' => $request->about,
            ];
        }
        $cekData->update($data);
        return redirect()->route('biodata.index')->with(['success' => 'Berhasil Update Data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cekData = Biodata::find($id);
        Storage::exists('images/foto/' . $cekData->foto);
        Storage::delete('images/foto/' . $cekData->foto);
        $cekData->delete();
        return redirect()->route('biodata.index')->with(['success' => 'Berhasil Hapus Data']);
    }
}
