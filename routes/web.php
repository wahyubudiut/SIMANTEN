<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/sertifikat', 'HomeController@cari');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('user.home');
    Route::get('dashboard/pengabdian','PengabdianController@user');
    Route::get('dashboard/pengabdian/api', 'PengabdianController@userApi');
    Route::get('dashboard/praktikum','PraktikumController@user');
    Route::get('dashboard/praktikum/api', 'PraktikumController@userApi');
    Route::get('dashboard/organisasi','OrganizationController@user');
    Route::get('dashboard/organisasi/api', 'OrganizationController@userApi');
    Route::get('dashboard/kepanitiaan','KepanitiaanController@user');
    Route::get('dashboard/kepanitiaan/api', 'KepanitiaanController@userApi');
    Route::get('dashboard/performa','PerformaController@index');
    Route::get('dashboard/performa/api', 'PerformaController@api');
    Route::get('dashboard/chart','ChartController@index');
    Route::get('dashboard/chart/api', 'ChartController@api');
    Route::get('dashboard/sertifikat','SertifikatController@index');
    Route::get('dashboard/sertifikat/api', 'SertifikatController@api');
    Route::get('dashboard/sertifikat/preview/{code}','SertifikatController@preview');
    Route::get('dashboard/sertifikat/download/{code}','SertifikatController@download');
});
Auth::routes(['register'=> false]);

Route::get('admin/login', 'HomeController@adminLogin')->name('adminLogin');

Route::middleware(['is_admin'])->group(function () {
    Route::get('admin/', 'HomeController@adminHome')->name('admin.home');
    Route::get('admin/pengabdian','PengabdianController@index');
    Route::get('admin/pengabdian/api', 'PengabdianController@api');
    Route::get('admin/praktikum','PraktikumController@index');
    Route::get('admin/praktikum/api', 'PraktikumController@api');
    Route::get('admin/organisasi','OrganizationController@index');
    Route::get('admin/organisasi/api', 'OrganizationController@api');
    Route::get('admin/kepanitiaan','KepanitiaanController@index');
    Route::get('admin/kepanitiaan/api', 'KepanitiaanController@api');
    Route::get('admin/performa','PerformaController@index');
    Route::get('admin/performa/api', 'PerformaController@api');
    Route::get('dashboard/chart','ChartController@index');
    Route::get('dashboard/chart/api', 'ChartController@api');
    Route::get('admin/validasi', 'ValidationController@index');
    Route::get('admin/validasi/api', 'ValidationController@api');
});