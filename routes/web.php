<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolMajorController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\CashTransactionController;
use App\Http\Controllers\CashTransactionFilterController;
use App\Http\Controllers\CashTransactionHistoryController;
use App\Http\Controllers\CashTransactionReportController;
use App\Http\Controllers\SchoolClassHistoryController;
use App\Http\Controllers\SchoolMajorHistoryController;
use App\Http\Controllers\StudentHistoryController;

require __DIR__ . '/auth.php';

// If accessing root path "/" it will be redirect to /login
// Route::redirect('/', 'events-webinars');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', DashboardController::class)->name('dashboard');

    Route::resource('admin/students', StudentController::class)->except('create', 'show', 'edit');
    Route::resource('admin/school-classes', SchoolClassController::class)->except('create', 'show', 'edit');
    Route::resource('admin/school-majors', SchoolMajorController::class)->except('create', 'show', 'edit');
    Route::resource('admin/administrators', AdministratorController::class)->except('create', 'show', 'edit', 'destroy');

    Route::get('/admin/cash-transactions/filter', CashTransactionFilterController::class)->name('cash-transactions.filter');
    Route::resource('admin/cash-transactions', CashTransactionController::class)->except('create', 'show', 'edit');

    //  Report routes
    Route::get('/admin/report', CashTransactionReportController::class)->name('report.index');
    // End of report routes

    // Soft Deletes Routes
    Route::controller(StudentHistoryController::class)->prefix('/admin/students/history')->name('students.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::controller(CashTransactionHistoryController::class)->prefix('/admin/cash-transactions/history')->name('cash-transactions.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::controller(SchoolClassHistoryController::class)->prefix('/admin/school-classes/history')->name('school-classes.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::controller(SchoolMajorHistoryController::class)->prefix('/admin/school-majors/history')->name('school-majors.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });
    // End Soft Deletes Routes

    require __DIR__ . '/export.php';
});

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('events-webinars.index');
    })->name('events-webinars');

    Route::get('/on-demands', function () {
        return view('on-demands.index');
    })->name('on-demands');

    Route::get('/popular', function () {
        return view('popular.index');
    })->name('popular');

    Route::get('/single-on-demand', function () {
        return view('single-on-demand.index');
    })->name('single-on-demand');

    Route::get('/dashboard', DashboardController::class)->name('dashboard.guest');

    Route::resource('students', StudentController::class, [
        'as' => 'guest'
    ])->except('store', 'update', 'destroy', 'create', 'show', 'edit');
    Route::resource('school-classes', SchoolClassController::class, [
        'as' => 'guest'
    ])->except('store', 'update', 'destroy', 'create', 'show', 'edit');
    Route::resource('school-majors', SchoolMajorController::class, [
        'as' => 'guest'
    ])->except('store', 'update', 'destroy', 'create', 'show', 'edit');

    Route::get('/cash-transactions/filter', CashTransactionFilterController::class)->name('cash-transactions.filter.guest');
    Route::resource('cash-transactions', CashTransactionController::class, [
        'as' => 'guest'
    ])->except('store', 'update', 'destroy', 'create', 'show', 'edit');

    //  Report routes
    Route::get('/report', CashTransactionReportController::class)->name('report.guest.index');
    // End of report routes

    require __DIR__ . '/export.php';
});