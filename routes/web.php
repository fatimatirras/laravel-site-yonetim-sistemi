<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'index'])->name('homepage');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/home/signin', [HomeController::class, 'signin'])->name('home_signin');
Route::get('/home/myaccount', [HomeController::class, 'myaccount'])->name('home_myaccount');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/content/{id}/{slug}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontents/{id}/{slug}', [HomeController::class, 'menucontents'])->name('menucontents');
Route::post('/sendreview/{id}/{slug}', [HomeController::class, 'sendreview'])->name('sendreview');
Route::post('/sendrequest', [HomeController::class, 'sendrequest'])->name('sendrequest');
Route::get('/request', [HomeController::class, 'request'])->name('request');






Route::get('/test/{id}/{name}',[HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

// Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');



    #content
    Route::prefix('content')->group(function (){
        //route assigned name "admin.users"
        Route::get('/',[\App\Http\Controllers\Admin\ContentController::class,'index'])->name('admin_contents');
        Route::get('create',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_add');
        Route::post('store',[\App\Http\Controllers\Admin\ContentController::class,'store'])->name('admin_content_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ContentController::class,'edit'])->name('admin_content_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ContentController::class,'update'])->name('admin_content_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('admin_content_delete');
        Route::post('show',[\App\Http\Controllers\Admin\ContentController::class,'show'])->name('admin_content_show');

    });

    #message
    Route::prefix('messages')->group(function (){

        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::post('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');

    });


    #content image menu
    Route::prefix('image')->group(function (){
        Route::get('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::post('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

    });

    #setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    Route::prefix('review')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');

    });
    Route::prefix('faq')->group(function () {
        Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');

    });

    Route::prefix('payment')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('admin_payments');
        Route::post('create', [\App\Http\Controllers\Admin\PaymentController::class, 'create'])->name('admin_payment_add');
        Route::post('store', [\App\Http\Controllers\Admin\PaymentController::class, 'store'])->name('admin_payment_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\PaymentController::class, 'edit'])->name('admin_payment_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\PaymentController::class, 'update'])->name('admin_payment_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\PaymentController::class, 'destroy'])->name('admin_payment_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\PaymentController::class, 'show'])->name('admin_payment_show');
    });

    Route::prefix('requestmng')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\RequestMngController::class, 'index'])->name('admin_requestmng');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\RequestMngController::class, 'update'])->name('admin_requestmng_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\RequestMngController::class, 'destroy'])->name('admin_requestmng_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\RequestMngController::class, 'show'])->name('admin_requestmng_show');

    });

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('userprofile');

    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
        Route::post('update/{id}',[\App\Http\Controllers\ReviewController::class,'update'])->name('user_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    });

    Route::prefix('payment')->group(function (){
        Route::get('/',[PaymentController::class,'index'])->name('user_payments');
        Route::post('create',[PaymentController::class,'create'])->name('user_payment_add');
        Route::post('store',[PaymentController::class,'store'])->name('user_payment_store');
        Route::get('edit/{id}',[PaymentController::class,'edit'])->name('user_payment_edit');
        Route::post('update/{id}',[PaymentController::class,'update'])->name('user_payment_update');
        Route::get('delete/{id}',[PaymentController::class,'destroy'])->name('user_payment_delete');
        Route::get('show/{id}',[PaymentController::class,'show'])->name('user_payment_show');
    });
    Route::prefix('request')->group(function (){

        Route::get('/',[\App\Http\Controllers\RequestMngController::class,'index'])->name('user_request');


    });

});




Route::get('/admin/giris',[HomeController::class, 'giris'])->name('admin_giris');
Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
Route::post('/logincheck', [HomeController::class, 'logincheck'])->name('logincheck');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
