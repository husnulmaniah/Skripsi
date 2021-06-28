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
Route::get('/','DashController@index');

Route::get('Login','Auth\UserController@index')->name('Login');
Route::post('Dashboard','Auth\UserController@create')->name('LoginCek');
Route::get('Logout','Auth\UserController@logout')->name('Logout');

Route::get('Register','RegisterController@index')->name('Register');
Route::post('Register/create','RegisterController@create')->name('RegisCreate');
Route::get('Register/edit/{id}','RegisterController@edit')->name('RegisEdit');
Route::post('Register/update/{id}','RegisterController@update')->name('RegisUpdate');
Route::get('Register/delete/{id}','RegisterController@destroy')->name('RegisDelete');

Route::get('Pekerjaan','PekerjaanController@index')->name('PekerjaanShow');
Route::post('Pekerjaan/create','PekerjaanController@create')->name('CreatePekerjaan');
Route::get('Pekerjaan/edit/{id}','PekerjaanController@edit')->name('EditPekerjaan');
Route::post('Pekerjaan/update/{id}','PekerjaanController@update')->name('UpdatePekerjaan');
Route::get('Pekerjaan/{id}/delete','PekerjaanController@destroy')->name('DeletePekerjaan');

Route::get('Jabatan','JabatanController@index')->name('Jabatan');
Route::post('Jabatan/create','JabatanController@create')->name('CreateJabatan');
Route::get('Jabatan/{id}/edit','JabatanController@edit')->name('EditJabatan');
Route::post('Jabatan/update/{id}','JabatanController@update')->name('UpdateJabatan');
Route::get('Jabatan/{id}/delete','JabatanController@destroy')->name('DeleteJabatan');

Route::get('Tenaga','TenagaController@index')->name('Tenaga');
Route::post('Tenaga/create','TenagaController@create')->name('CreateTenaga');
Route::get('Tenaga/{id}/edit','TenagaController@edit')->name('EditTenaga');
Route::post('Tenaga/update/{id}','TenagaController@update')->name('UpdateTenaga');
Route::get('Tenaga/{id}/delete','TenagaController@destroy')->name('DeleteTenaga');

Route::get('Pendidikan','PendidikanController@index')->name('Pendidikan');
Route::post('Pendidikan/create','PendidikanController@create')->name('CreatePendidikan');
Route::get('Pendidikan/{id}/edit','PendidikanController@edit')->name('EditPendidikan');
Route::post('Pendidikan/update/{id}','PendidikanController@update')->name('UpdatePendidikan');
Route::get('Pendidikan/{id}/delete','PendidikanController@destroy')->name('DeletePendidikan');

Route::get('Tpendidikan','TpendidikanController@index')->name('Tpendidikan');
Route::post('Tpendidikan/create','TpendidikanController@create')->name('CreateTpendidikan');
Route::get('Tpendidikan/{id}/edit','TpendidikanController@edit')->name('EditTpendidikan');
Route::post('Tpendidikan/update/{id}','TpendidikanController@update')->name('UpdateTpendidikan');
Route::get('Tpendidikan/{id}/delete','TpendidikanController@destroy')->name('DeleteTpendidikan');

Route::get('Status','StatusPegController@index')->name('StatusPegawai');
Route::post('Status/create','StatusPegController@create')->name('CreateStatus');
Route::get('Status/{id}/edit','StatusPegController@edit')->name('EditStatus');
Route::post('Status/update/{id}','StatusPegController@update')->name('UpdateStatus');
Route::get('Status/{id}/delete','StatusPegController@destroy')->name('DeleteStatus');

Route::get('Pendonor','PendonorController@index')->name('Pendonor');
Route::post('Pendonor/create','PendonorController@create')->name('CreatePendonor');
Route::get('Pendonor/{id}/edit','PendonorController@edit')->name('EditPendonor');
Route::post('Pendonor/update/{id}','PendonorController@update')->name('UpdatePendonor');
Route::get('Pendonor/{id}/delete','PendonorController@destroy')->name('DeletePendonor');
Route::get('PrintPendonor','PendonorController@print')->name('PrintPendonor');

Route::get('Petugas','PetugasController@index')->name('Petugas');
Route::post('Petugas/create','PetugasController@create')->name('CreatePetugas');
Route::get('Petugas/{id}/edit','PetugasController@edit')->name('EditPetugas');
Route::post('Petugas/update/{id}','PetugasController@update')->name('UpdatePetugas');
Route::get('Petugas/{id}/delete','PetugasController@destroy')->name('DeletePetugas');

Route::get('PetugasHb','PetugasHbController@index')->name('PetugasHb');
Route::post('PetugasHb/create','PetugasHbController@create')->name('CreatePetugasHb');
Route::get('PetugasHb/{id}/edit','PetugasHbController@edit')->name('EditPetugasHb');
Route::post('PetugasHb/update/{id}','PetugasHbController@update')->name('UpdatePetugasHb');
Route::get('PetugasHb/{id}/delete','PetugasHbController@destroy')->name('DeletePetugasHb');

Route::get('Data','DataController@index')->name('Data');
Route::post('Data/create','DataController@create')->name('CreateData');
Route::get('PrintPDF','DataController@print')->name('PrintPDF');

Route::get('PetugasAftap','AftapController@index')->name('Aftap');
Route::post('PetugasAftap/Create','AftapController@create')->name('CreateAftap');
Route::get('PetugasAftap/{id}/Edit','AftapController@edit');
Route::post('PetugasAftap/Update/{id}','AftapController@update');
Route::get('PetugasAftap/{id}/Delete','AftapController@destroy');

Route::get('Home','HomeController@index')->name('Home');

Route::get('Statistik','StatistikController@index')->name('Statistik');

Route::get('Pesan','IsiPesanController@index')->name('Pesan');
Route::post('Pesan/Create','IsiPesanController@create')->name('CreatePesan');
Route::get('Pesan/{id}/Edit','IsiPesanController@edit');
Route::post('Pesan/Update/{id}','IsiPesanController@update');
Route::get('Pesan/{id}/Delete','IsiPesanController@destroy');

Route::get('SentPesan','PesanController@index')->name('SentPesan');
Route::post('SentPesan','PesanController@create')->name('ApiSent');

Route::get('User','UserController@index')->name('User');
Route::post('User/Create','UserController@create')->name('UserCreate');
Route::get('User/{id}/Delete','UserController@destroy');

// Route::get('LaporanPDF','LaporanController@print')->name('Print');