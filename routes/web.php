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

include 'helper.php';
include 'dev.php';
include 'front.php';

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/',                                             'DashboardController@index')->name('index');
        Route::post('/upload',                                             'UploadController@index')->name('upload');
    });
});

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Dev')->name('admin/')->group(static function() {
        Route::get('/plugins',                                             'GeneratorController@index')->name('index');
        Route::post('/plugins',                                             'GeneratorController@active')->name('active');
    });
});

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/rooms',                                             'RoomsController@index')->name('index');
        Route::post('/rooms',                                             'RoomsController@create')->name('create');
        Route::post('/rooms/join',                                             'RoomsController@join')->name('join');
        Route::post('/rooms/end',                                             'RoomsController@end')->name('end');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AdminUsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('settings')->name('settings/')->group(static function() {
            Route::get('/',                                             'SettingsController@index')->name('index');
            Route::get('/create',                                       'SettingsController@create')->name('create');
            Route::post('/',                                            'SettingsController@store')->name('store');
            Route::get('/{setting}/edit',                               'SettingsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SettingsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{setting}',                                   'SettingsController@update')->name('update');
            Route::delete('/{setting}',                                 'SettingsController@destroy')->name('destroy');
            Route::get('/export',                                       'SettingsController@export')->name('export');
        });
    });
});


Route::fallback(function (){return view('error.404');});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('customers')->name('customers/')->group(static function() {
            Route::get('/',                                             'CustomersController@index')->name('index');
            Route::get('/create',                                       'CustomersController@create')->name('create');
            Route::post('/',                                            'CustomersController@store')->name('store');
            Route::get('/{customer}/edit',                              'CustomersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CustomersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{customer}',                                  'CustomersController@update')->name('update');
            Route::delete('/{customer}',                                'CustomersController@destroy')->name('destroy');
            Route::get('/export',                                       'CustomersController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('categores')->name('categores/')->group(static function() {
            Route::get('/',                                             'CategoresController@index')->name('index');
            Route::get('/create',                                       'CategoresController@create')->name('create');
            Route::post('/',                                            'CategoresController@store')->name('store');
            Route::get('/{categore}/edit',                              'CategoresController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategoresController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{categore}',                                  'CategoresController@update')->name('update');
            Route::delete('/{categore}',                                'CategoresController@destroy')->name('destroy');
            Route::get('/export',                                       'CategoresController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('classes')->name('classes/')->group(static function() {
            Route::get('/',                                             'ClassesController@index')->name('index');
            Route::get('/create',                                       'ClassesController@create')->name('create');
            Route::post('/',                                            'ClassesController@store')->name('store');
            Route::get('/{class}/edit',                                 'ClassesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ClassesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{class}',                                     'ClassesController@update')->name('update');
            Route::delete('/{class}',                                   'ClassesController@destroy')->name('destroy');
            Route::get('/export',                                       'ClassesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactsController@index')->name('index');
            Route::get('/create',                                       'ContactsController@create')->name('create');
            Route::post('/',                                            'ContactsController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactsController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactsController@destroy')->name('destroy');
            Route::get('/export',                                       'ContactsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('courses')->name('courses/')->group(static function() {
            Route::get('/',                                             'CoursesController@index')->name('index');
            Route::get('/create',                                       'CoursesController@create')->name('create');
            Route::post('/',                                            'CoursesController@store')->name('store');
            Route::get('/{course}/edit',                                'CoursesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CoursesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{course}',                                    'CoursesController@update')->name('update');
            Route::delete('/{course}',                                  'CoursesController@destroy')->name('destroy');
            Route::get('/export',                                       'CoursesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('faqs')->name('faqs/')->group(static function() {
            Route::get('/',                                             'FaqsController@index')->name('index');
            Route::get('/create',                                       'FaqsController@create')->name('create');
            Route::post('/',                                            'FaqsController@store')->name('store');
            Route::get('/{faq}/edit',                                   'FaqsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FaqsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{faq}',                                       'FaqsController@update')->name('update');
            Route::delete('/{faq}',                                     'FaqsController@destroy')->name('destroy');
            Route::get('/export',                                       'FaqsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('homework')->name('homework/')->group(static function() {
            Route::get('/',                                             'HomeworksController@index')->name('index');
            Route::get('/create',                                       'HomeworksController@create')->name('create');
            Route::post('/',                                            'HomeworksController@store')->name('store');
            Route::get('/{homework}/edit',                              'HomeworksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'HomeworksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{homework}',                                  'HomeworksController@update')->name('update');
            Route::delete('/{homework}',                                'HomeworksController@destroy')->name('destroy');
            Route::get('/export',                                       'HomeworksController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('homeworks-solves')->name('homeworks-solves/')->group(static function() {
            Route::get('/',                                             'HomeworksSolvesController@index')->name('index');
            Route::get('/create',                                       'HomeworksSolvesController@create')->name('create');
            Route::post('/',                                            'HomeworksSolvesController@store')->name('store');
            Route::get('/{homeworksSolf}/edit',                         'HomeworksSolvesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'HomeworksSolvesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{homeworksSolf}',                             'HomeworksSolvesController@update')->name('update');
            Route::delete('/{homeworksSolf}',                           'HomeworksSolvesController@destroy')->name('destroy');
            Route::get('/export',                                       'HomeworksSolvesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('materials')->name('materials/')->group(static function() {
            Route::get('/',                                             'MaterialsController@index')->name('index');
            Route::get('/create',                                       'MaterialsController@create')->name('create');
            Route::post('/',                                            'MaterialsController@store')->name('store');
            Route::get('/{material}/edit',                              'MaterialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MaterialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{material}',                                  'MaterialsController@update')->name('update');
            Route::delete('/{material}',                                'MaterialsController@destroy')->name('destroy');
            Route::get('/export',                                       'MaterialsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('menus')->name('menus/')->group(static function() {
            Route::get('/',                                             'MenusController@index')->name('index');
            Route::get('/create',                                       'MenusController@create')->name('create');
            Route::post('/',                                            'MenusController@store')->name('store');
            Route::get('/{menu}/edit',                                  'MenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{menu}',                                      'MenusController@update')->name('update');
            Route::delete('/{menu}',                                    'MenusController@destroy')->name('destroy');
            Route::get('/export',                                       'MenusController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('orders')->name('orders/')->group(static function() {
            Route::get('/',                                             'OrdersController@index')->name('index');
            Route::get('/create',                                       'OrdersController@create')->name('create');
            Route::post('/',                                            'OrdersController@store')->name('store');
            Route::get('/{order}/edit',                                 'OrdersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'OrdersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{order}',                                     'OrdersController@update')->name('update');
            Route::delete('/{order}',                                   'OrdersController@destroy')->name('destroy');
            Route::get('/export',                                       'OrdersController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('pages')->name('pages/')->group(static function() {
            Route::get('/',                                             'PagesController@index')->name('index');
            Route::get('/create',                                       'PagesController@create')->name('create');
            Route::post('/',                                            'PagesController@store')->name('store');
            Route::get('/{page}/edit',                                  'PagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{page}',                                      'PagesController@update')->name('update');
            Route::delete('/{page}',                                    'PagesController@destroy')->name('destroy');
            Route::get('/export',                                       'PagesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('payments')->name('payments/')->group(static function() {
            Route::get('/',                                             'PaymentsController@index')->name('index');
            Route::get('/create',                                       'PaymentsController@create')->name('create');
            Route::post('/',                                            'PaymentsController@store')->name('store');
            Route::get('/{payment}/edit',                               'PaymentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PaymentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{payment}',                                   'PaymentsController@update')->name('update');
            Route::delete('/{payment}',                                 'PaymentsController@destroy')->name('destroy');
            Route::get('/export',                                       'PaymentsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('photos')->name('photos/')->group(static function() {
            Route::get('/',                                             'PhotosController@index')->name('index');
            Route::get('/create',                                       'PhotosController@create')->name('create');
            Route::post('/',                                            'PhotosController@store')->name('store');
            Route::get('/{photo}/edit',                                 'PhotosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PhotosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{photo}',                                     'PhotosController@update')->name('update');
            Route::delete('/{photo}',                                   'PhotosController@destroy')->name('destroy');
            Route::get('/export',                                       'PhotosController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
            Route::get('/export',                                       'PostsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('reviews')->name('reviews/')->group(static function() {
            Route::get('/',                                             'ReviewsController@index')->name('index');
            Route::get('/create',                                       'ReviewsController@create')->name('create');
            Route::post('/',                                            'ReviewsController@store')->name('store');
            Route::get('/{review}/edit',                                'ReviewsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ReviewsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{review}',                                    'ReviewsController@update')->name('update');
            Route::delete('/{review}',                                  'ReviewsController@destroy')->name('destroy');
            Route::get('/export',                                       'ReviewsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('socials')->name('socials/')->group(static function() {
            Route::get('/',                                             'SocialsController@index')->name('index');
            Route::get('/create',                                       'SocialsController@create')->name('create');
            Route::post('/',                                            'SocialsController@store')->name('store');
            Route::get('/{social}/edit',                                'SocialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SocialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{social}',                                    'SocialsController@update')->name('update');
            Route::delete('/{social}',                                  'SocialsController@destroy')->name('destroy');
            Route::get('/export',                                       'SocialsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('tags')->name('tags/')->group(static function() {
            Route::get('/',                                             'TagsController@index')->name('index');
            Route::get('/create',                                       'TagsController@create')->name('create');
            Route::post('/',                                            'TagsController@store')->name('store');
            Route::get('/{tag}/edit',                                   'TagsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TagsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{tag}',                                       'TagsController@update')->name('update');
            Route::delete('/{tag}',                                     'TagsController@destroy')->name('destroy');
            Route::get('/export',                                       'TagsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('teachers')->name('teachers/')->group(static function() {
            Route::get('/',                                             'TeachersController@index')->name('index');
            Route::get('/create',                                       'TeachersController@create')->name('create');
            Route::post('/',                                            'TeachersController@store')->name('store');
            Route::get('/{teacher}/edit',                               'TeachersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TeachersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{teacher}',                                   'TeachersController@update')->name('update');
            Route::delete('/{teacher}',                                 'TeachersController@destroy')->name('destroy');
            Route::get('/export',                                       'TeachersController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('tests')->name('tests/')->group(static function() {
            Route::get('/',                                             'TestsController@index')->name('index');
            Route::get('/create',                                       'TestsController@create')->name('create');
            Route::post('/',                                            'TestsController@store')->name('store');
            Route::get('/{test}/edit',                                  'TestsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TestsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{test}',                                      'TestsController@update')->name('update');
            Route::delete('/{test}',                                    'TestsController@destroy')->name('destroy');
            Route::get('/export',                                       'TestsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('tests-solves')->name('tests-solves/')->group(static function() {
            Route::get('/',                                             'TestsSolvesController@index')->name('index');
            Route::get('/create',                                       'TestsSolvesController@create')->name('create');
            Route::post('/',                                            'TestsSolvesController@store')->name('store');
            Route::get('/{testsSolf}/edit',                             'TestsSolvesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TestsSolvesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{testsSolf}',                                 'TestsSolvesController@update')->name('update');
            Route::delete('/{testsSolf}',                               'TestsSolvesController@destroy')->name('destroy');
            Route::get('/export',                                       'TestsSolvesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
            Route::get('/export',                                       'UsersController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('comments')->name('comments/')->group(static function() {
            Route::get('/',                                             'CommentsController@index')->name('index');
            Route::get('/create',                                       'CommentsController@create')->name('create');
            Route::post('/',                                            'CommentsController@store')->name('store');
            Route::get('/{comment}/edit',                               'CommentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CommentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{comment}',                                   'CommentsController@update')->name('update');
            Route::delete('/{comment}',                                 'CommentsController@destroy')->name('destroy');
            Route::get('/export',                                       'CommentsController@export')->name('export');
        });
    });
});
