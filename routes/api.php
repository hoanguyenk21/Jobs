<?php
use App\Http\Controllers\Client\Company\ApplysController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::POST('them-ghi-chu', [ApplysController::class, 'addNote'])->name('note');
Route::GET('ghi-chu/{id}', [ApplysController::class, 'listNote'])->name('listnote');
Route::POST('xoa-ghi-chu', [ApplysController::class, 'deleteNote'])->name('delete.listnote');
Route::POST('gui-mail', [ApplysController::class, 'sendmailNote'])->name('sendmail.listnote');
