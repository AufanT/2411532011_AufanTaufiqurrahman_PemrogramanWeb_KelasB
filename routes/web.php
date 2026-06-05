<?php
// routes/web.php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});
Route::resource('students', StudentController::class);

// Report routes
Route::get('/report/top-major', [StudentController::class, 'reportTopMajor'])->name('report.top-major');
Route::get('/report/total-sks', [StudentController::class, 'reportTotalSks'])->name('report.total-sks');
