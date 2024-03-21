<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Project;

class FrontendController extends Controller
{


    public function index()
    {
        $biodata = Biodata::all()->first();
        $pengalaman = Pengalaman::all();
        $pendidikan = Pendidikan::all();
        $project = Project::all();
        return view('portofolio', [
            'biodata' => $biodata,
            'pengalaman' => $pengalaman,
            'pendidikan' => $pendidikan,
            'project' => $project,
        ]);
    }

    public function about()
    {
        $biodata = Biodata::all()->first();
        return view('about', [
            'biodata' => $biodata,
        ]);
    }

    public function resume()
    {
        $biodata = Biodata::all()->first();
        $pengalaman = Pengalaman::all();
        $pendidikan = Pendidikan::all();
        return view('resume', [
            'biodata' => $biodata,
            'pengalaman' => $pengalaman,
            'pendidikan' => $pendidikan,
        ]);
    }
    public function project()
    {
        $biodata = Biodata::all()->first();
        $project = Project::all();
        return view('project', [
            'biodata' => $biodata,
            'project' => $project,
        ]);
    }
}
