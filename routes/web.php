<?php

use App\Http\Controllers\Client\Company\ApplysController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\Company\StatisticalController;
use App\Http\Controllers\Client\Company\DonUngTuyenController;
use App\Http\Controllers\Client\Company\CandidatesController;
use App\Http\Controllers\Client\Company\BlogsController;
use App\Http\Controllers\Client\Company\UserNhaTDController;
use App\Http\Controllers\Client\Company\UserRecruitmentController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Apply;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Route general
 */
Route::get('dang-ky', [HomeController::class, 'signup'])->name('signup');
Route::get('dang-nhap', [HomeController::class, 'login'])->name('login');
Route::get('dang-xuat', [HomeController::class, 'logout'])->name('logout');
Route::get('doi-mat-khau', [HomeController::class, 'changePassword'])->name('change_password');
Route::get('quen-mat-khau', [HomeController::class, 'forgotPassword'])->name('forgot_assword');

/**
 * Route full page candidate
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('cong-viec/{slug}', [HomeController::class, 'job'])->name('job');

Route::get('ung-vien/{id}', [HomeController::class, 'candidate'])->name('candidate');
Route::get('cong-ty/{id}', [HomeController::class, 'company'])->name('company');

Route::get('ung-tuyen', [HomeController::class, 'apply'])->name('apply');
Route::get('yeu-thich', [HomeController::class, 'jobSave'])->name('job_save');

/**
 * Route full page recruitment
 */
Route::prefix('nha-tuyen-dung')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('recruitment.index');
    Route::get('thong-ke',[StatisticalController::class , 'index'])->name('statistical.index');
    Route::post('thong-ke',[StatisticalController::class , 'index']);
    Route::get('quan-ly-tin-tuyen-dung', [BlogsController::class, 'index'])->name('blog.index');
    Route::get('quan-ly-tin-tuyen-dung/xoa/{id}', [BlogsController::class, 'delete'])->name('blog.delete');
    Route::get('quan-ly-tin-tuyen-dung/tao-moi', [BlogsController::class, 'addForm'])->name('blog.add');
    Route::post('quan-ly-tin-tuyen-dung/tao-moi', [BlogsController::class, 'saveAdd']);
    Route::get('quan-ly-tin-tuyen-dung/cap-nhat/{id}', [BlogsController::class, 'editForm'])->name('blog.edit');
    Route::post('quan-ly-tin-tuyen-dung/cap-nhat/{id}', [BlogsController::class, 'saveEdit']);
    Route::get('tim-kiem-ung-vien', [CandidatesController::class, 'index'])->name('candidatesearch.index');
    Route::get('tim-kiem-ung-vien/xoa{id}', [CandidatesController::class, 'delete'])->name('candidatesearch.delete');
    Route::get('quan-ly-don-ung-tuyen', [ApplysController::class, 'index'])->name('apply.index');
    Route::get('quan-ly-don-ung-tuyen/chi-tiet/{id}', [ApplysController::class, 'detail'])->name('apply.detail');
    Route::get('quan-ly-don-ung-tuyen/sua', [ApplysController::class, 'update'])->name('apply.update');
    Route::get('user-nha-tuyen-dung' ,[UserRecruitmentController::class , 'editForm' ])->name('userCompany.edit');
    Route::post('user-nha-tuyen-dung' ,[UserRecruitmentController::class , 'saveEdit' ]);

});

Route::get('ung-vien/{id}', [HomeController::class, 'candidate'])->name('candidate');
;
Route::prefix('tim-kiem-ung-vien')->group(function () {
    
});
// Route::prefix('user-nha-tuyen-dung')->group(function() {
//     Route::get('/' ,[UserNhaTDController::class , 'index' ])->name('userNTD.index');
// }); 
// Route::prefix('quan-ly-don-ung-tuyen')->group(function () {
//     Route::get('/', [SingleapplyController::class, 'index'])->name('singleapply.index');
//     Route::get('detail/{id}', [SingleapplyController::class, 'detail'])->name('singleapply.detail');
//     Route::get('sua', [SingleapplyController::class, 'update'])->name('singleapply.update');
// });

Route::get('dang-nhap', [HomeController::class, 'login'])->name('login');
Route::post('dang-nhap', [HomeController::class, 'postLogin']);
Route::get('dang-xuat', [HomeController::class, 'logout'])->name('logout');

