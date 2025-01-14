<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user-login', 'App\Http\Controllers\HomeController@login');

Auth::routes();
Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@home');
Route::get('/dashboard/akun', 'App\Http\Controllers\DashboardController@akun');
Route::get('/dashboard/tambahakun', 'App\Http\Controllers\DashboardController@tambahakun');
Route::group(['middleware' => 'auth'], function () {
       Route::middleware(['role:admin'])->group(function () {
       Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
       Route::get('/admin/GetSubCatAgainstMainCatEdit/{id}', [App\Http\Controllers\OperatorController::class, 'GetSubCatAgainstMainCatEdit'])->middleware(['role:admin']);
       Route::get('/admin/merkAjax/{id}', [App\Http\Controllers\OperatorController::class, 'merkAjax'])->middleware(['role:admin']);
       
       Route::get('/admin/tambahakun', [App\Http\Controllers\AdminController::class, 'tambahakun'])->middleware(['role:admin']);
       Route::get('/admin/akun', [App\Http\Controllers\AdminController::class, 'akun'])->middleware(['role:admin']);
       Route::get('/admin/guru', [App\Http\Controllers\AdminController::class, 'guru'])->middleware(['role:admin']);
       Route::get('/admin/tambah_guru', [App\Http\Controllers\AdminController::class, 'tambah_guru'])->middleware(['role:admin']);
       Route::get('/admin/edit_guru/{gurus}', [App\Http\Controllers\AdminController::class, 'edit_guru'])->middleware(['role:admin']);
       Route::post('/admin/update_guru/{users}', [App\Http\Controllers\AdminController::class, 'update_guru'])->middleware(['role:admin']);
       
       Route::get('/admin/mapel', [App\Http\Controllers\AdminController::class, 'mapel'])->middleware(['role:admin']);
       Route::get('/admin/tambah_mapel', [App\Http\Controllers\AdminController::class, 'tambah_mapel'])->middleware(['role:admin']);
       Route::get('/admin/edit_mapel/{mapels}', [App\Http\Controllers\AdminController::class, 'edit_mapel'])->middleware(['role:admin']);
       Route::post('/admin/update_mapel/{mapels}', [App\Http\Controllers\AdminController::class, 'update_mapel'])->middleware(['role:admin']);
       Route::post('/admin/store_mapel', [App\Http\Controllers\AdminController::class, 'store_mapel'])->middleware(['role:admin']);
       
       Route::get('/admin/nilai', [App\Http\Controllers\AdminController::class, 'nilai'])->middleware(['role:admin']);
       Route::get('/admin/tambah_nilai', [App\Http\Controllers\AdminController::class, 'tambah_nilai'])->middleware(['role:admin']);
       Route::get('/admin/edit_nilai/{nilais}', [App\Http\Controllers\AdminController::class, 'edit_nilai'])->middleware(['role:admin']);
       Route::post('/admin/store_nilai', [App\Http\Controllers\AdminController::class, 'store_nilai'])->middleware(['role:admin']);
       Route::put('/admin/update_nilai/{id}', [AdminController::class, 'update_nilai'])->name('update_nilai');

       Route::get('/admin/destroy_guru/{users}', [App\Http\Controllers\AdminController::class, 'destroy_guru'])->middleware(['role:admin']);
       Route::get('/admin/destroy_mapel/{users}', [App\Http\Controllers\AdminController::class, 'destroy_mapel'])->middleware(['role:admin']);
       Route::get('/admin/destroy_nilai/{users}', [App\Http\Controllers\AdminController::class, 'destroy_nilai'])->middleware(['role:admin']);
       

       Route::get('/admin/tambahakun_admin', [App\Http\Controllers\AdminController::class, 'tambahakun_admin'])->middleware(['role:admin']);
       
       Route::get('/admin/tambahakun_fakultas', [App\Http\Controllers\AdminController::class, 'tambahakun_fakultas'])->middleware(['role:admin']);
       Route::get('/admin/tambahakun_verifikator', [App\Http\Controllers\AdminController::class, 'tambahakun_verifikator'])->middleware(['role:admin']);
       Route::get('/admin/view_detail_akun/{users}', [App\Http\Controllers\AdminController::class, 'view_detail_akun'])->middleware(['role:admin']);
       Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->middleware(['role:admin']);
       Route::post('/admin/store_guru', [App\Http\Controllers\AdminController::class, 'store_guru'])->middleware(['role:admin']);
       Route::get('/admin/destroy/{users}', [App\Http\Controllers\AdminController::class, 'destroy'])->middleware(['role:admin']);
       Route::get('/admin/edit_akun_admin/{users}', [App\Http\Controllers\AdminController::class, 'edit_akun_admin'])->middleware(['role:admin']);
       Route::post('/admin/update_akun_admin/{users}', [App\Http\Controllers\AdminController::class, 'update_akun_admin'])->middleware(['role:admin']);
       Route::post('/admin/store_fakultas', [App\Http\Controllers\AdminController::class, 'store_fakultas'])->middleware(['role:admin']);
       Route::get('/admin/destroy_fakultas/{users}', [App\Http\Controllers\AdminController::class, 'destroy_fakultas'])->middleware(['role:admin']);
       Route::get('/admin/edit_akun_fakultas/{users}', [App\Http\Controllers\AdminController::class, 'edit_akun_fakultas'])->middleware(['role:admin']);
       Route::post('/admin/update_akun_fakultas/{users}', [App\Http\Controllers\AdminController::class, 'update_akun_fakultas'])->middleware(['role:admin']);
       Route::get('/admin/akun_fakultas', [App\Http\Controllers\AdminController::class, 'akun_fakultas'])->middleware(['role:admin']);
        
       Route::post('/admin/store_verifikator', [App\Http\Controllers\AdminController::class, 'store_verifikator'])->middleware(['role:admin']);
       Route::get('/admin/destroy_verifikator/{users}', [App\Http\Controllers\AdminController::class, 'destroy_verifikator'])->middleware(['role:admin']);
       Route::get('/admin/edit_akun_verifikator/{users}', [App\Http\Controllers\AdminController::class, 'edit_akun_verifikator'])->middleware(['role:admin']);
       Route::post('/admin/update_akun_verifikator/{users}', [App\Http\Controllers\AdminController::class, 'update_akun_verifikator'])->middleware(['role:admin']);
       Route::get('/admin/akun_verifikator', [App\Http\Controllers\AdminController::class, 'akun_verifikator'])->middleware(['role:admin']);
       
       Route::post('/admin/store_operator', [App\Http\Controllers\AdminController::class, 'store_operator'])->middleware(['role:admin']);
       Route::get('/admin/destroy_operator/{users}', [App\Http\Controllers\AdminController::class, 'destroy_operator'])->middleware(['role:admin']);
       Route::get('/admin/edit_akun_operator/{users}', [App\Http\Controllers\AdminController::class, 'edit_akun_operator'])->middleware(['role:admin']);
       Route::post('/admin/update_akun_operator/{users}', [App\Http\Controllers\AdminController::class, 'update_akun_operator'])->middleware(['role:admin']);
       Route::get('/admin/akun_operator', [App\Http\Controllers\AdminController::class, 'akun_operator'])->middleware(['role:admin']);
        
       Route::get('/admin/etor', [App\Http\Controllers\OperatorController::class, 'etor'])->middleware(['role:admin']);

       Route::get('/admin', [App\Http\Controllers\OperatorController::class, 'index']);
       Route::get('/admin/destroyetor/{id}', [App\Http\Controllers\OperatorController::class, 'destroyetor'])->middleware(['role:admin']);
       
       Route::get('/admin/tambahetor', [App\Http\Controllers\OperatorController::class, 'formetor'])->middleware(['role:admin']);
       Route::get('/admin/tes/{users}', [App\Http\Controllers\OperatorController::class, 'tes'])->middleware(['role:admin']);
       Route::get('/admin/tes2/{users}', [App\Http\Controllers\OperatorController::class, 'tes2'])->middleware(['role:admin']);
       
       Route::post('/admin/store_etor', [App\Http\Controllers\OperatorController::class, 'store_etor'])->middleware(['role:admin']);
       Route::get('/admin/etor/{id}', [App\Http\Controllers\OperatorController::class, 'etor'])->middleware(['role:admin']);

       Route::get('/admin/printpdf/{id}', [App\Http\Controllers\AdminController::class, 'printpdf'])->middleware(['role:admin']);
       Route::get('/admin/printexcel/{id}', [App\Http\Controllers\AdminController::class, 'printexcel'])->middleware(['role:admin']);

       Route::get('/admin/ceketor/{id}', [App\Http\Controllers\AdminController::class, 'ceketor'])->middleware(['role:admin']);


       Route::get('/admin/editetor/{id}', [App\Http\Controllers\OperatorController::class, 'editetor'])->middleware(['role:admin']);
       // Route::put('/operator/update_etor/{etors}', [App\Http\Controllers\OperatorController::class, 'update_etor'])->middleware(['role:operator']);
       Route::post('/admin/update_etor/{id}', [App\Http\Controllers\OperatorController::class, 'update_etor'])->middleware(['role:admin']);
        
       Route::get('/admin/tambah_iku/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_iku'])->middleware(['role:admin']);
  //     Route::get('/operator/tambah_ikk', [App\Http\Controllers\OperatorController::class, 'tambah_ikk'])->middleware(['role:operator']);
       Route::get('/admin/tambah_input_output', [App\Http\Controllers\OperatorController::class, 'tambah_input_output'])->middleware(['role:admin']);
       Route::get('/admin/jadwal1/{id}/{idy}', [App\Http\Controllers\OperatorController::class, 'jadwal1'])->middleware(['role:admin']);
        
       Route::post('/admin/store_iku', [App\Http\Controllers\OperatorController::class, 'store_iku'])->middleware(['role:admin']);
       Route::post('/admin/update_iku', [App\Http\Controllers\OperatorController::class, 'update_iku'])->middleware(['role:admin']);
       Route::post('/admin/store_kegiatan', [App\Http\Controllers\OperatorController::class, 'store_kegiatan'])->middleware(['role:admin']);
       Route::post('/admin/update_ikk', [App\Http\Controllers\OperatorController::class, 'update_ikk'])->middleware(['role:admin']);
       Route::post('/admin/store_ikk', [App\Http\Controllers\OperatorController::class, 'store_ikk'])->middleware(['role:admin']);
       
       Route::get('/admin/delete_iku/{id}', [App\Http\Controllers\OperatorController::class, 'delete_iku'])->middleware(['role:admin']);
       Route::get('/admin/delete_ikk/{id}', [App\Http\Controllers\OperatorController::class, 'delete_ikk'])->middleware(['role:admin']);
       Route::get('/admin/delete_ikk2/{id}', [App\Http\Controllers\OperatorController::class, 'delete_ikk2'])->middleware(['role:admin']);
       Route::post('/admin/update_ikk2', [App\Http\Controllers\OperatorController::class, 'update_ikk2'])->middleware(['role:admin']);
       
       Route::get('/admin/tambah_ikk/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_ikk'])->middleware(['role:admin']);
       Route::get('/admin/tambah_io/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_io'])->middleware(['role:admin']);

       Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       Route::post('/admin/store_io', [App\Http\Controllers\OperatorController::class, 'store_io'])->middleware(['role:admin']);
       Route::post('/admin/update_io', [App\Http\Controllers\OperatorController::class, 'update_io'])->middleware(['role:admin']);
       Route::get('/admin/delete_io/{id}', [App\Http\Controllers\OperatorController::class, 'delete_io'])->middleware(['role:admin']);
       Route::post('/admin/store_detailbelanja', [App\Http\Controllers\OperatorController::class, 'store_detailbelanja'])->middleware(['role:admin']);
       Route::post('/admin/update_detailbelanja', [App\Http\Controllers\OperatorController::class, 'update_detailbelanja'])->middleware(['role:admin']);
        
       Route::get('/admin/delete_detailbelanja/{id}', [App\Http\Controllers\OperatorController::class, 'delete_detailbelanja'])->middleware(['role:admin']);
        
       Route::post('/admin/store_jadwal1', [App\Http\Controllers\OperatorController::class, 'store_jadwal1'])->middleware(['role:admin']);
       Route::post('/admin/update_jadwal1', [App\Http\Controllers\OperatorController::class, 'update_jadwal1'])->middleware(['role:admin']);        
       Route::get('/admin/delete_jadwal1/{id}', [App\Http\Controllers\OperatorController::class, 'delete_jadwal1'])->middleware(['role:admin']);
        
       Route::get('/admin/listSubKategori/{kategori_id}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:admin']);
       Route::get('/admin/listSubKategori2/{kategori_id}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:admin']);
       Route::get('/admin/isiKategori2/{mak}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:admin']);
       Route::get('/admin/tesX2/{users}', [App\Http\Controllers\OperatorController::class, 'tesX2'])->middleware(['role:admin']);
       
    });
    Route::middleware(['role:siswa'])->group(function () {
       Route::get('/operator', [App\Http\Controllers\OperatorController::class, 'index']);
       Route::get('/operator/siswa', [App\Http\Controllers\OperatorController::class, 'siswa']);
       Route::get('/operator/merkAjax/{id}', [App\Http\Controllers\OperatorController::class, 'merkAjax'])->middleware(['role:operator']);
       
        
       Route::get('/operator/printpdf/{id}', [App\Http\Controllers\AdminController::class, 'printpdf'])->middleware(['role:operator']);
       Route::get('/operator/printexcel/{id}', [App\Http\Controllers\AdminController::class, 'printexcel'])->middleware(['role:operator']);


       Route::get('/operator/tambahetor', [App\Http\Controllers\OperatorController::class, 'formetor'])->middleware(['role:operator']);
       Route::get('/operator/tes/{users}', [App\Http\Controllers\OperatorController::class, 'tes'])->middleware(['role:operator']);
       Route::post('/operator/store_etor', [App\Http\Controllers\OperatorController::class, 'store_etor'])->middleware(['role:operator']);
       Route::get('/operator/etor/{id}', [App\Http\Controllers\OperatorController::class, 'etor'])->middleware(['role:operator']);
        
       Route::get('/operator/editetor/{id}', [App\Http\Controllers\OperatorController::class, 'editetor'])->middleware(['role:operator']);
       // Route::put('/operator/update_etor/{etors}', [App\Http\Controllers\OperatorController::class, 'update_etor'])->middleware(['role:operator']);
       Route::post('/operator/update_etor/{id}', [App\Http\Controllers\OperatorController::class, 'update_etor'])->middleware(['role:operator']);
        
       Route::get('/operator/tambah_iku/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_iku'])->middleware(['role:operator']);
  //     Route::get('/operator/tambah_ikk', [App\Http\Controllers\OperatorController::class, 'tambah_ikk'])->middleware(['role:operator']);
       Route::get('/operator/tambah_input_output', [App\Http\Controllers\OperatorController::class, 'tambah_input_output'])->middleware(['role:operator']);
       Route::get('/operator/jadwal1/{id}/{idy}', [App\Http\Controllers\OperatorController::class, 'jadwal1'])->middleware(['role:operator']);
        
       Route::post('/operator/store_iku', [App\Http\Controllers\OperatorController::class, 'store_iku'])->middleware(['role:operator']);
       Route::post('/operator/update_iku', [App\Http\Controllers\OperatorController::class, 'update_iku'])->middleware(['role:operator']);
       Route::post('/operator/store_kegiatan', [App\Http\Controllers\OperatorController::class, 'store_kegiatan'])->middleware(['role:operator']);
       Route::post('/operator/update_ikk', [App\Http\Controllers\OperatorController::class, 'update_ikk'])->middleware(['role:operator']);
       Route::post('/operator/store_ikk', [App\Http\Controllers\OperatorController::class, 'store_ikk'])->middleware(['role:operator']);
       
       Route::get('/operator/delete_iku/{id}', [App\Http\Controllers\OperatorController::class, 'delete_iku'])->middleware(['role:operator']);
       Route::get('/operator/delete_ikk/{id}', [App\Http\Controllers\OperatorController::class, 'delete_ikk'])->middleware(['role:operator']);
       Route::get('/operator/delete_ikk2/{id}', [App\Http\Controllers\OperatorController::class, 'delete_ikk2'])->middleware(['role:operator']);
       Route::post('/operator/update_ikk2', [App\Http\Controllers\OperatorController::class, 'update_ikk2'])->middleware(['role:operator']);
       
       Route::get('/operator/tambah_ikk/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_ikk'])->middleware(['role:operator']);
       Route::get('/operator/tambah_io/{id}', [App\Http\Controllers\OperatorController::class, 'tambah_io'])->middleware(['role:operator']);

       Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       Route::post('/operator/store_io', [App\Http\Controllers\OperatorController::class, 'store_io'])->middleware(['role:operator']);
       Route::post('/operator/update_io', [App\Http\Controllers\OperatorController::class, 'update_io'])->middleware(['role:operator']);
       Route::get('/operator/delete_io/{id}', [App\Http\Controllers\OperatorController::class, 'delete_io'])->middleware(['role:operator']);
       Route::post('/operator/store_detailbelanja', [App\Http\Controllers\OperatorController::class, 'store_detailbelanja'])->middleware(['role:operator']);
       Route::post('/operator/update_detailbelanja', [App\Http\Controllers\OperatorController::class, 'update_detailbelanja'])->middleware(['role:operator']);
        
       Route::get('/operator/delete_detailbelanja/{id}', [App\Http\Controllers\OperatorController::class, 'delete_detailbelanja'])->middleware(['role:operator']);
        
       Route::post('/operator/store_jadwal1', [App\Http\Controllers\OperatorController::class, 'store_jadwal1'])->middleware(['role:operator']);
       Route::post('/operator/update_jadwal1', [App\Http\Controllers\OperatorController::class, 'update_jadwal1'])->middleware(['role:operator']);
            
       Route::get('/operator/delete_jadwal1/{id}', [App\Http\Controllers\OperatorController::class, 'delete_jadwal1'])->middleware(['role:operator']);
        
       
       Route::get('/operator/ceketor/{id}', [App\Http\Controllers\AdminController::class, 'ceketor'])->middleware(['role:operator']);

       Route::get('/operator/listSubKategori/{kategori_id}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:operator']);
       Route::get('/operator/listSubKategori2/{kategori_id}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:operator']);
       Route::get('/operator/isiKategori2/{mak}', [App\Http\Controllers\OperatorController::class, 'listSubKategori'])->middleware(['role:operator']);


    });
    Route::middleware(['role:manager'])->group(function () {
        Route::get('/manager', [App\Http\Controllers\ManagerController::class, 'index']);
        Route::get('/manager/etor/{id}', [App\Http\Controllers\OperatorController::class, 'etor'])->middleware(['role:manager']);
        Route::get('/manager/ceketor/{id}', [App\Http\Controllers\AdminController::class, 'ceketor'])->middleware(['role:manager']);

    });
    Route::middleware(['role:verifikator'])->group(function () {
        Route::get('/verifikator', [App\Http\Controllers\VerifikatorController::class, 'index']);
        Route::get('/verifikator/etor/{id}', [App\Http\Controllers\OperatorController::class, 'etor'])->middleware(['role:verifikator']);
        Route::get('/verifikator/ceketor/{id}', [App\Http\Controllers\AdminController::class, 'ceketor'])->middleware(['role:verifikator']);
        
       Route::post('/verifikator/store_catatan', [App\Http\Controllers\AdminController::class, 'store_catatan'])->middleware(['role:verifikator']);
       Route::get('/verifikator/deletecatatan/{id}/{id_etor}', [App\Http\Controllers\AdminController::class, 'deletecatatan'])->middleware(['role:verifikator']);
       Route::post('/verifikator/update_catatan', [App\Http\Controllers\AdminController::class, 'update_catatan'])->middleware(['role:verifikator']);
       Route::post('/verifikator/store_oke', [App\Http\Controllers\AdminController::class, 'store_oke'])->middleware(['role:verifikator']);
         
    });

    
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
});
