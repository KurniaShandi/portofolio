<?php

use App\Http\Controllers\BahasaPemogramanController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('portofolio.index');
// });

Auth::routes();

######################
### Route Images ###
######################
Route::get('images/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/images/' . $folder . '/' . $filename);

    if (!file_exists($path)) {
        abort(500);
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file)->header('Content-Type', $type);
})->name('show-image');



######################
### Route Frontend ###
######################
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('portofolio.index');
Route::get('/about', [FrontendController::class, 'about'])->name('portofolio.about');
Route::get('/resume', [FrontendController::class, 'resume'])->name('portofolio.resume');
Route::get('/project', [FrontendController::class, 'project'])->name('portofolio.project');


######################
#### Route Backend ###
######################

Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', function () {
            return view('dashboard.home');
        });
        // Biodata
        Route::get('/Biodata', [BiodataController::class, 'index'])->name('biodata.index');
        Route::get('/Biodata/create', [BiodataController::class, 'create'])->name('biodata.create');
        Route::get('/Biodata/{id}/show', [BiodataController::class, 'show'])->name('biodata.show');
        Route::get('/Biodata/{id}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
        Route::patch('/Biodata/{id}', [BiodataController::class, 'update'])->name('biodata.update');
        Route::post('/Biodata/store', [BiodataController::class, 'store'])->name('biodata.store');
        Route::delete('/Biodata/destroy/{id}', [BiodataController::class, 'destroy'])->name('biodata.destroy');

        // Pendidikan
        Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
        Route::get('/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
        Route::get('/pendidikan/{id}/show', [PendidikanController::class, 'show'])->name('pendidikan.show');
        Route::get('/pendidikan/{id}/edit', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
        Route::patch('/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
        Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store');
        Route::delete('/pendidikan/destroy/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

        // Pengalaman
        Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index');
        Route::get('/pengalaman/create', [PengalamanController::class, 'create'])->name('pengalaman.create');
        Route::get('/pengalaman/{id}/show', [PengalamanController::class, 'show'])->name('pengalaman.show');
        Route::get('/pengalaman/{id}/edit', [PengalamanController::class, 'edit'])->name('pengalaman.edit');
        Route::patch('/pengalaman/{id}', [PengalamanController::class, 'update'])->name('pengalaman.update');
        Route::post('/pengalaman/store', [PengalamanController::class, 'store'])->name('pengalaman.store');
        Route::delete('/pengalaman/destroy/{id}', [PengalamanController::class, 'destroy'])->name('pengalaman.destroy');

        // skill
        Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
        Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
        Route::get('/skill/{id}/show', [SkillController::class, 'show'])->name('skill.show');
        Route::get('/skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
        Route::patch('/skill/{id}', [SkillController::class, 'update'])->name('skill.update');
        Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
        Route::delete('/skill/destroy/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');

        // Project
        Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
        Route::get('/project/{id}/show', [ProjectController::class, 'show'])->name('project.show');
        Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
        Route::patch('/project/{id}', [ProjectController::class, 'update'])->name('project.update');
        Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
        Route::delete('/project/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    }
);
