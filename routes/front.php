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
Route::middleware(['auth:teacher'])->group(static function () {
    Route::prefix('teacher')->namespace('Teacher')->name('teacher/')->group(static function() {
        Route::get('/',                                             'ProfileController@index')->name('index');
        Route::get('/profile',                                             'ProfileController@profile')->name('profile');
        Route::post('/profile',                                             'ProfileController@saveprofile')->name('save-profile');
        Route::get('/password',                                             'ProfileController@password')->name('password');
        Route::post('/password',                                             'ProfileController@savepassword')->name('save-password');
        Route::get('/students',                                             'ProfileController@students')->name('students');
        Route::get('/courses',                                             'ProfileController@courses')->name('courses');
        Route::post('/courses',                                             'ProfileController@storeCourses')->name('storeCourses');
        Route::post('/courses/{course}',                                             'ProfileController@updateCourses')->name('updateCourses');
        Route::delete('/courses/{course}',                                             'ProfileController@destroyCourses')->name('destroyCourses');
        Route::post('/courses/bulk-destroy',                                             'ProfileController@bulkDestroyCourses')->name('bulkDestroyCourses');
        Route::post('/rooms',                                             'ProfileController@rooms')->name('rooms');
        Route::post('/join',                                             'ProfileController@join')->name('join');
        Route::post('/end',                                             'ProfileController@end')->name('end');
        Route::get('/orders',                                             'ProfileController@orders')->name('orders');
        Route::get('/homeworks',                                             'ProfileController@homeworks')->name('homeworks');
        Route::get('/tests',                                             'ProfileController@tests')->name('tests');
    });
});

Route::middleware(['auth:users'])->group(static function () {
    Route::prefix('users')->namespace('Users')->name('users/')->group(static function() {
        Route::get('/',                                             'ProfileController@index')->name('index');
        Route::get('/profile',                                             'ProfileController@profile')->name('profile');
        Route::post('/profile',                                             'ProfileController@saveprofile')->name('save-profile');
        Route::get('/password',                                             'ProfileController@password')->name('password');
        Route::post('/password',                                             'ProfileController@savepassword')->name('save-password');
        Route::get('/courses',                                             'ProfileController@courses')->name('courses');
        Route::get('/orders',                                             'ProfileController@orders')->name('orders');
        Route::get('/homeworks',                                             'ProfileController@homeworks')->name('homeworks');
        Route::get('/tests',                                             'ProfileController@tests')->name('tests');
    });
});

Route::namespace('Front')->group(static function() {
    Route::get('/', function () {return view('front.home');});
    Route::post('/request', 'RequestController@index');
    Route::get('/about', function () {return view('front.about');});
    Route::get('/faq', function () {return view('front.faq');});
    Route::get('/gallery', function () {return view('front.gallery');});
    Route::get('/services', function () {return view('front.services');});
    Route::get('/events', function () {return view('front.events');});
    Route::get('/contact', function () {return view('front.contact');});

    //Auth
    Route::get('/login', 'AuthController@loginView')->name('login');
    Route::post('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/register','AuthController@registerView')->name('register');
    Route::post('/register', 'AuthController@register');
    Route::get('/forget', function () {return view('front.auth.forget');});

    //Blog
    Route::get('/blog', function () {return view('front.blog.index');});
    Route::get('/blog/category/{category}', function () {return view('front.blog.category');});
    Route::get('/blog/search/{search}', function () {return view('front.blog.search');});
    Route::get('/blog/{post}', function () {return view('front.blog.post');});

    //Courses
    Route::get('/courses', function () {return view('front.courses.index');});
    Route::get('/courses/category/{category}', function () {return view('front.courses.category');});
    Route::get('/courses/search/{search}', function () {return view('front.courses.search');});
    Route::get('/courses/{course}', 'CourseController@single');

    //404
    Route::fallback(function () {return view('front.404');});

});

