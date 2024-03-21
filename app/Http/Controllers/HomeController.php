<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengalaman = Pengalaman::all();
        $project = Project::all();
        $skill = Skill::all();
        return view('dashboard.home', [
            'title' => 'Dashboard',
            'pengalaman' => $pengalaman,
            'project' => $project,
            'skill' => $skill,
        ]);
    }
}
