<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Dataka_LabController;
use App\Http\Controllers\Data_PeminjamanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Register_DosenController;
use App\Http\Controllers\Data_LaboratoriumController;
use App\Http\Controllers\Ketua_LabController;
use App\Http\Controllers\Laporanketua_LabController;
use App\Http\Controllers\DosenPeminjamanController;
use App\Http\Controllers\PeminjamanMahasiswaController;
use App\Http\Controllers\KeluhanMahasiswaController;
use App\Http\Controllers\KeluhanKetualabController;
use App\Http\Controllers\KeluhanDosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\JadwalmahasiswaController;
use App\Http\Controllers\JadwaldosenController;
use App\Http\Controllers\ProdiController;

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
    return view('login');
});

//admin
Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [HomeController::class, 'showdashboard']);
    Route::get('/laboratorium', [HomeController::class, 'showdatalaboratorium']);
    Route::get('/laporan', [HomeController::class, 'laporan']);
    Route::get('/data_peminjaman', [HomeController::class, 'showdata_peminjaman']);
    Route::get('/user', [HomeController::class, 'showuser']);

    Route::get('/peminjaman', [PeminjamanController::class, 'indexpeminjaman']);
    Route::post('storepeminjaman', [PeminjamanController::class, 'storepeminjaman']);
    Route::put('setuju/{id}', [PeminjamanController::class, 'setuju']);
    Route::put('tolak/{id}', [PeminjamanController::class, 'tolak']);
    Route::get('showpeminjaman/{id}', [PeminjamanController::class, 'showpeminjaman']);


    Route::get('/dataka_lab', [Dataka_LabController::class, 'indexdataka_lab']);
    Route::post('storedataka_lab', [Dataka_LabController::class, 'storedataka_lab']);
    Route::get('/editdataka_lab/{id}', [Dataka_LabController::class, 'editdataka_lab']);
    Route::put('/updatedataka_lab/{id}', [Dataka_LabController::class, 'updatedataka_lab']);
    Route::get('showdataka_lab/{id}', [Dataka_LabController::class, 'showdataka_lab']);


    Route::get('/data_peminjaman', [Data_PeminjamanController::class, 'indexdata_peminjaman']);
    Route::post('storedata_peminjaman', [Data_PeminjamanController::class, 'storedata_peminjaman']);
    Route::get('/editdata_peminjaman/{data_peminjaman}', [Data_peminjamanController::class, 'editdata_peminjaman']);
    Route::get('showdata_peminjaman/{id}', [Data_peminjamanController::class, 'showdata_peminjaman']);

    Route::get('keluhan', [KeluhanMahasiswaController::class, 'index']);


    Route::get('/laporan', [LaporanController::class, 'indexlaporan']);
    Route::put('/updatelaporan/{laporan}', [LaporanController::class, 'updatelaporan']);
    Route::post('storelaporan', [LaporanController::class, 'storelaporan']);


    Route::get('/user', [UserController::class, 'indexuser']);
    Route::put('verifikasi-mahasiswa/{id}', [UserController::class, 'verifikasi_mahasiswa']);
    Route::put('verifikasi-dosen/{id}', [UserController::class, 'verifikasi_data_dosen']);
    Route::get('/data_laboratorium', [Data_LaboratoriumController::class, 'indexdata_laboratorium']);
    Route::post('storedata_laboratorium', [Data_LaboratoriumController::class, 'storedata_laboratorium']);
    Route::get('/showlaboratorium/{id}', [Data_LaboratoriumController::class, 'showlaboratorium']);

    Route::get('/jadwal', [JadwalController::class, 'index']);
    Route::get('/jadwal/create', [FullCalenderController::class, 'index']);
    Route::post('/jadwal', [JadwalController::class, 'store']);
    Route::post('/full-calender/action', [FullCalenderController::class, 'action']);

    Route::post('storejadwal', [JadwalController::class, 'storejadwal']);
    Route::get('editjadwal/{id}', [JadwalController::class, 'editjadwal']);
    Route::put('updatejadwal/{id}', [JadwalController::class, 'updatejadwal']);
    Route::get('showjadwal/{id}', [JadwalController::class, 'showjadwal']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('editprofile/{id}', [ProfileController::class, 'editprofile']);
    Route::put('updateprofile/{id}', [ProfileController::class, 'updateprofile']);

    Route::get('/prodi', [ProdiController::class, 'index']);
    Route::post('storeprodi', [ProdiController::class, 'storeprodi']);
});


//mahasiswa
Route::group(['guard' => 'data_mahasiswa'], function(){
    Route::get('editpeminjaman/{id}', [PeminjamanMahasiswaController::class, 'editpeminjaman_mahasiswa']);
    Route::put('updatepeminjaman_mahasiswa/{id}', [PeminjamanMahasiswaController::class, 'updatepeminjaman_mahasiswa']);
    Route::get('showpeminjaman_mahasiswa/{id}', [PeminjamanMahasiswaController::class, 'showpeminjaman_mahasiswa']);
    Route::get('dashboard_mahasiswa', [HomeController::class, 'showdashboard_mahasiswa']);
    Route::get('mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('store_mahasiswa', [MahasiswaController::class, 'store_mahasiswa']);
    Route::get('peminjaman_mahasiswa', [PeminjamanMahasiswaController::class, 'index']);
    Route::post('storepeminjaman_mahasiswa', [PeminjamanMahasiswaController::class, 'storepeminjaman_mahasiswa']);
    Route::get('keluhan_mahasiswa', [KeluhanMahasiswaController::class, 'indexkeluhan']);
    Route::get('editkeluhan/{id}', [KeluhanMahasiswaController::class, 'editkeluhan']);
    Route::put('update_keluhan/{id}', [KeluhanMahasiswaController::class, 'update_keluhan']);
    Route::post('store_keluhan', [KeluhanMahasiswaController::class, 'storekeluhan']);


    Route::get('profile_mahasiswa', [ProfileController::class, 'index_profile']);
    Route::get('edit_mahasiswa/{id}', [ProfileController::class, 'editprofile_mahasiswa']);
    Route::put('updateprofile_mahasiswa/{id}', [ProfileController::class, 'updateprofile_mahasiswa']);

    Route::get('jadwal_mahasiswa', [JadwalmahasiswaController::class, 'index']);

});


//dosen
Route::group(['guard' => 'data_dosen'], function(){
    Route::get('dashboard_dosen', [HomeController::class, 'showdashboard_dosen']);
    Route::get('dosen_peminjaman', [DosenPeminjamanController::class, 'index']);
    Route::get('showpeminjaman_dosen/{id}', [DosenPeminjamanController::class, 'showpeminjaman_dosen']);
    Route::get('editpeminjaman_dosen/{id}', [DosenPeminjamanController::class, 'editpeminjaman_dosen']);
    Route::put('updatepeminjaman_dosen/{id}', [DosenPeminjamanController::class, 'updatepeminjaman_dosen']);
    Route::post('storepeminjaman_dosen', [DosenPeminjamanController::class, 'storepeminjaman_dosen']);

    Route::get('dosen_keluhan', [KeluhanDosenController::class, 'index']);
    Route::get('editkeluhan_dosen/{id}', [KeluhanDosenController::class, 'editkeluhan_dosen']);
    Route::put('updatekeluhan_dosen/{id}', [KeluhanDosenController::class, 'updatekeluhan_dosen']);
    Route::post('storekeluhan_dosen', [KeluhanDosenController::class, 'storekeluhan_dosen']);

    Route::get('profile_dosen', [ProfileController::class, 'index_profile_dosen']);
    Route::get('editprofile_dosen/{id}', [ProfileController::class, 'editprofile_dosen']);
    Route::put('updateprofile_dosen/{id}', [ProfileController::class, 'updateprofile_dosen']);

    Route::get('jadwal_dosen', [JadwaldosenController::class, 'index']);
});


//ketualab
Route::group(['guard' => 'dataka_lab'], function(){
    Route::get('dashboard_ketua_lab', [HomeController::class, 'showdashboard_ketua_lab']);
    Route::get('ketua_lab', [Ketua_LabController::class,'index']);
    Route::get('store_ketua_lab', [Ketua_LabController::class, 'store_ketua_lab']);
    Route::get('laporan_ketualab', [Laporanketua_LabController::class, 'index']);
    Route::get('keluhan_ketualab', [KeluhanKetualabController::class, 'index']);

    Route::get('profile_kalab', [ProfileController::class, 'index_profile_kalab']);
    Route::get('editprofile_kalab/{id}', [ProfileController::class, 'editprofile_kalab']);
    Route::put('updateprofile_kalab/{id}', [ProfileController::class, 'updateprofile_kalab']);
});


Route::get('register', [RegisterController::class, 'register']);
Route::post('store-register', [RegisterController::class, 'store']);
Route::get('register_dosen', [Register_DosenController::class, 'register_dosen']);
Route::post('store-register_dosen', [Register_DosenController::class, 'store_register_dosen']);


Route::get ('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);

