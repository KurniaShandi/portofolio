<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skill::where('user_id', Auth::id())->orderBy('skill', 'asc')->get();
        return view('dashboard.skill.index', [
            'title' => 'skill',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.skill.create', [
            'title' => 'Create Skill',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'skill' => 'required',
        ]);

        Skill::create([
            'user_id' => Auth::id(),
            'skill' => $request->skill,
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Dibuat']);
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
        $data = Skill::find($id);
        return view('dashboard.skill.edit', [
            'title' => 'Update Skill',
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'skill' => 'required',
        ]);
        Skill::find($id)->update([
            'user_id' => Auth::id(),
            'skill' => $request->skill,
        ]);

        return redirect()->route('skill.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::find($id)->delete();
        return redirect()->route('skill.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
