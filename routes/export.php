<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Export\AdministratorController;
use App\Http\Controllers\Export\StudentController;
use App\Http\Controllers\Export\CashTransactionController;
use App\Http\Controllers\Export\CashTransactionReportController;

Route::get('/admin/report/filter/export/{start_date}/{end_date}', CashTransactionReportController::class)->name('report.export');
Route::get('/admin/students/export', StudentController::class)->name('students.export');
Route::get('/admin/cash-transactions/export', CashTransactionController::class)->name('cash-transactions.export');
Route::get('/admin/administrators/export', AdministratorController::class)->name('administrators.export');
