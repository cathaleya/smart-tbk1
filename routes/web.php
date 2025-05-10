<?php

use App\Models\Transporter;
use App\Models\JenisSuratJalan;
use App\Http\Controllers\Operasional;
use App\Http\Controllers\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlocController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncotController;
use App\Http\Controllers\ItemUnitController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransporterController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\JenisSuratJalanController;
use App\Http\Controllers\TransportController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('client.login');
    })->name('view-login');

    Route::post('/login', [UserController::class, 'login'])->name('login');
});



Route::middleware(['kontrolPengguna'])->group(function () {
    Route::resource('user', UserController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/update-profile/{user}', [UserController::class, 'updateProfileView'])->name('update-profile');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');


    Route::get('/lainnya', [Operasional::class, 'index'])->name('lainnya');

    // MATERIAL ROUTE
    Route::get('/lainnya/material', [Operasional::class, 'allMaterialView'])->name('all-material');
    Route::get('/lainnya/material/tambah', [Operasional::class, 'viewTambahMaterial'])->name('add-material-view');
    Route::post('/lainnya/material/tambah', [Operasional::class, 'tambahMaterial'])->name('add-material');
    Route::get('/lainnya/material/{id}/edit', [Operasional::class, 'viewEditMaterial']);
    Route::post('/lainnya/material/edit', [Operasional::class, 'editMaterial']);
    Route::get('/lainnya/material/{id}/hapus', [Operasional::class, 'hapusMaterial']);

    // TRANSPORTER ROUTE
    Route::get('/lainnya/transporter', [TransporterController::class, 'transporter']);
    Route::get('/lainnya/transporter/tambah', [TransporterController::class, 'viewTambahTransporter']);
    Route::post('/lainnya/transporter/tambah', [TransporterController::class, 'tambahTransporter']);
    Route::get('/lainnya/transporter/{id}/edit', [TransporterController::class, 'viewEditTransporter']);
    Route::post('/lainnya/transporter/edit', [TransporterController::class, 'editTransporter']);
    Route::get('/lainnya/transporter/{id}/hapus', [TransporterController::class, 'hapusTransporter']);

    // TRANSPORTER ROUTE
    Route::get('/lainnya/transporter', [TransporterController::class, 'transporter']);
    Route::get('/lainnya/transporter/tambah', [TransporterController::class, 'viewTambahTransporter']);
    Route::post('/lainnya/transporter/tambah', [TransporterController::class, 'tambahTransporter']);
    Route::get('/lainnya/transporter/{id}/edit', [TransporterController::class, 'viewEditTransporter']);
    Route::post('/lainnya/transporter/edit', [TransporterController::class, 'editTransporter']);
    Route::get('/lainnya/transporter/{id}/hapus', [TransporterController::class, 'hapusTransporter']);

    // SLOC ROUTE
    Route::get('/lainnya/sloc', [SlocController::class, 'sloc']);
    Route::get('/lainnya/sloc/tambah', [SlocController::class, 'viewTambahSloc']);
    Route::post('/lainnya/sloc/tambah', [SlocController::class, 'tambahSloc']);
    Route::get('/lainnya/sloc/{id}/edit', [SlocController::class, 'viewEditSloc']);
    Route::post('/lainnya/sloc/edit', [SlocController::class, 'editSloc']);
    Route::get('/lainnya/sloc/{id}/hapus', [SlocController::class, 'hapusSloc']);

    // incot ROUTE
    Route::get('/lainnya/incot', [IncotController::class, 'incot']);
    Route::get('/lainnya/incot/tambah', [IncotController::class, 'viewTambahincot']);
    Route::post('/lainnya/incot/tambah', [IncotController::class, 'tambahincot']);
    Route::get('/lainnya/incot/{id}/edit', [IncotController::class, 'viewEditincot']);
    Route::post('/lainnya/incot/edit', [IncotController::class, 'editincot']);
    Route::get('/lainnya/incot/{id}/hapus', [IncotController::class, 'hapusincot']);

    // SU ROUTE
    Route::get('/lainnya/su', [ItemUnitController::class, 'index']);
    Route::get('/lainnya/su/tambah', [ItemUnitController::class, 'viewTambahsu']);
    Route::post('/lainnya/su/tambah', [ItemUnitController::class, 'tambahsu']);
    Route::get('/lainnya/su/{id}/edit', [ItemUnitController::class, 'viewEditsu']);
    Route::post('/lainnya/su/edit', [ItemUnitController::class, 'editsu']);
    Route::get('/lainnya/su/{id}/hapus', [ItemUnitController::class, 'hapussu']);

    // SJ ROUTE
    Route::get('/lainnya/jenis-surat-jalan', [JenisSuratJalanController::class, 'index']);
    Route::get('/lainnya/jenis-surat-jalan/tambah', [JenisSuratJalanController::class, 'viewTambahsj']);
    Route::post('/lainnya/jenis-surat-jalan/tambah', [JenisSuratJalanController::class, 'tambahsj']);
    Route::get('/lainnya/jenis-surat-jalan/{id}/edit', [JenisSuratJalanController::class, 'viewEditsj']);
    Route::post('/lainnya/jenis-surat-jalan/edit', [JenisSuratJalanController::class, 'editsj']);
    Route::get('/lainnya/jenis-surat-jalan/{id}/hapus', [JenisSuratJalanController::class, 'hapussj']);

    // VT ROUTE
    Route::get('/lainnya/vehicle-type', [VehicleTypeController::class, 'index']);
    Route::get('/lainnya/vehicle-type/tambah', [VehicleTypeController::class, 'viewTambahvt']);
    Route::post('/lainnya/vehicle-type/tambah', [VehicleTypeController::class, 'tambahvt']);
    Route::get('/lainnya/vehicle-type/{id}/edit', [VehicleTypeController::class, 'viewEditvt']);
    Route::post('/lainnya/vehicle-type/edit', [VehicleTypeController::class, 'editvt']);
    Route::get('/lainnya/vehicle-type/{id}/hapus', [VehicleTypeController::class, 'hapusvt']);

    // CT ROUTE
    Route::get('/lainnya/customer-type', [CustomerTypeController::class, 'index']);
    Route::get('/lainnya/customer-type/tambah', [CustomerTypeController::class, 'viewTambahct']);
    Route::post('/lainnya/customer-type/tambah', [CustomerTypeController::class, 'tambahct']);
    Route::get('/lainnya/customer-type/{id}/edit', [CustomerTypeController::class, 'viewEditct']);
    Route::post('/lainnya/customer-type/edit', [CustomerTypeController::class, 'editct']);
    Route::get('/lainnya/customer-type/{id}/hapus', [CustomerTypeController::class, 'hapusct']);


    // transaction
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/transaction/tambah-data', [TransactionController::class, 'viewAddTransaction']);
    Route::post('/transaction/tambah-data', [TransactionController::class, 'AddTransaction']);
    Route::get('/transaction/{id}/edit-data', [TransactionController::class, 'viewEditTransaction']);
    Route::post('/transaction/edit-data', [TransactionController::class, 'editTransaction']);
    Route::get('/transaction/{id}/hapus-data', [TransactionController::class, 'deleteTransaction']);
    Route::get('/transaction/{id}/detail', [TransactionController::class, 'detailTransaction']);


    // transport

    Route::get('/transport', [TransportController::class, 'index']);
    Route::get('/transport/tambah-data', [TransportController::class, 'addTransportView']);
    Route::post('/transport/tambah-data', [TransportController::class, 'addTransport']);
    Route::get('/transport/data', [TransportController::class, 'allTransport']);
    Route::get('/transport/{id}/edit', [TransportController::class, 'viewEditTransport']);
    Route::post('/transport/edit', [TransportController::class, 'EditTransport']);
    Route::get('/transport/{id}/delete', [TransportController::class, 'deleteTransport']);

    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
        ]);
    })->name('dashboard');

    Route::get('/warehouse', function () {
        return view('sales.delivery-order', [
            'title' => 'Delivery Order',
        ]);
    })->name('warehouse')->middleware('warehouse');
});
