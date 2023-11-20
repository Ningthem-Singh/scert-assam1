<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeimsAdminController;
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


//-----Homepage Routes-----

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/institutes', [HomeController::class, 'institutes'])->name('institutes');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//-----End Home page Routes-----


//-----Admin Routes--------------

Auth::routes();
Route::middleware(['admin'])->group(function () {

    // Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    // ---------------------------- Slider Section ----------------------------------
    Route::get('/admin/sliders', [AdminController::class, 'view_Slider']);
    Route::get('/admin/sliders/delete/{id}', [AdminController::class, 'slider_delete']);

    //crop image upload
    Route::post('/admin/sliders/crop-image-upload', [AdminController::class, 'uploadCropImage'])->name('uploadCropImage');


    // ----------------------------- Institutes --------------------------------------
    Route::get('/admin/institutes', [AdminController::class, 'institutes']);

    Route::post('/post/institutesmember', [AdminController::class, 'postInstitutesMember']);
    Route::get('/post/institutesmember/delete/{id}', [AdminController::class, 'institute_delete']);
    Route::get('/admin/manage-institutes/edit', [AdminController::class, 'institutes_edit'])->name('institutesEdit');
    Route::post('/admin/manage-institutes/update', [AdminController::class, 'institutes_update'])->name('institutesUpdate');


    //------------------------------- About Section -----------------------------------
    Route::get('/admin/manage_about', [AdminController::class, 'manage_about']);
    Route::post('/admin/manage_about_post', [AdminController::class, 'manage_about_post']);
    Route::get('/admin/manage_about/delete/{id}', [AdminController::class, 'manage_about_delete']);
    Route::get('/admin/manage_about/edit', [AdminController::class, 'manage_about_edit'])->name('manage_about_edit');
    Route::post('/admin/manage_about/update', [AdminController::class, 'manage_about_update'])->name('manage_about_update');


    //-------------------------- Master District -----------------------------------
    Route::get('/admin/master_districts', [AdminController::class, 'master_districts']);

    Route::post('/post/master_districtsmember', [AdminController::class, 'postDistrictsMember']);
    Route::delete('/post/master_districtsmember/delete/{id}', [AdminController::class, 'districts_delete'])->name('delete-district');

    Route::get('/admin/manage-master_districts/edit', [AdminController::class, 'master_districts_edit'])->name('master_districtEdit');

    Route::post('/admin/manage-master_districts/update', [AdminController::class, 'master_districts_update'])->name('master_districtUpdate');


    // --------------------------- Manage Notification ------------------------------------------
    Route::get('/admin/manage_notifications', [AdminController::class, 'manage_notifications'])->name('manage_notifications');
    Route::get('/admin/get-notifications', [AdminController::class, 'getNotifications']);
    Route::post('/post/master_notificationmember', [AdminController::class, 'postNotificationMember']);
    Route::post('/admin/manage-notifications/update', [AdminController::class, 'updateNotification'])->name('update_notification');
    Route::get('/admin/manage-notifications/delete/{id}', [AdminController::class, 'notificationDelete'])->name('delete_notification');


    // Manage Contact
    Route::get('/admin/manage_contact', [AdminController::class, 'manage_contact']);
    Route::post('/post/manageContact', [AdminController::class, 'postManageContact']);
    Route::get('/admin/manage_contact/delete/{id}', [AdminController::class, 'contact_delete']);
    Route::get('/admin/manage_contact/edit', [AdminController::class, 'manage_contact_edit']);
    Route::post('/post/manageContactUpdate', [AdminController::class, 'manage_contact_update'])->name('postManageContactUpdate');


    // Manage Diet
    Route::get('/admin/manage_diet', [AdminController::class, 'manage_diet']);

    // manage TEIS
    Route::get('/admin/manage_teis', [AdminController::class, 'manage_teis']);


    //----------Admin Routes End------------
});


// TEIMS dashboard routes here
Route::middleware(['teimsadmin'])->group(function () {
    Route::get('/teims/dashboard', [TeimsAdminController::class, 'index']);
});
