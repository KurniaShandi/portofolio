<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::where('user_id', Auth::user()->id);
        return view('dashboard.project.index', [
            'data' => $data->get(),
            'title' => 'Project',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.project.create', [
            'title' => 'Create Project',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_projek'    => 'required',
            'keterangan'    => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('/images/foto/', $foto->hashName());
        Project::create([
            'foto' => $foto->hashName(),
            'user_id' => Auth::id(),
            'nama_projek' => $request->nama_projek,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('project.index')->with(['success' => 'Berhasil Create Data']);
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
        $data = Project::find($id);
        return view('dashboard.project.edit', [
            'data' => $data,
            'title' => 'Edit project',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama_projek'    => 'required',
            'keterangan'    => 'required',
        ]);

        $foto = $request->file('foto');
        $cekData = Project::find($id);
        if ($foto) {
            // hapus foto lama
            Storage::exists('images/foto/' . $cekData->foto);
            Storage::delete('images/foto/' . $cekData->foto);
            // upload foto baru
            $foto->storeAs('/images/foto/', $foto->hashName());
            $data = [
                'foto' => $foto->hashName(),
                'user_id' => Auth::id(),
                'nama_projek' => $request->nama_projek,
                'keterangan' => $request->keterangan,
            ];
        } else {
            $data = [
                'user_id' => Auth::id(),
                'nama_projek' => $request->nama_projek,
                'keterangan' => $request->keterangan,
            ];
        }
        $cekData->update($data);
        return redirect()->route('project.index')->with(['success' => 'Berhasil Update Data']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cekData = Project::find($id);
        Storage::exists('images/foto/' . $cekData->foto);
        Storage::delete('images/foto/' . $cekData->foto);
        $cekData->delete();
        return redirect()->route('project.index')->with(['success' => 'Berhasil Hapus Data']);
    }
}
