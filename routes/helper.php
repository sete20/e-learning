<?php
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Helpers')->name('admin/')->group(static function() {
        Route::get('/lang/{lang}',                                             'LangController@change')->name('change');
        Route::post('/view',                                             'ViewController@view')->name('view');
    });
});
