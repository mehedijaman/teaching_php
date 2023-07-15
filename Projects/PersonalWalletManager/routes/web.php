<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function(){

    Route::get('income/{id}/delete',[IncomeController::class,'destroy']);
    Route::get('income/delete',[IncomeController::class,'destroyAll']);
    Route::get('income/trash',[IncomeController::class,'trash']);
    Route::get('income/{id}/delete/parmanently',[IncomeController::class,'forceDelete']);
    Route::get('/income/delete/parmanently',[IncomeController::class,'emptyTrash']);
    Route::get('income/{id}/restore',[IncomeController::class,'restore']);

    Route::get('income/restore',[IncomeController::class,'restoreAll']);

    Route::resource('income',IncomeController::class);

    

    // Route::get('income',[IncomeController::class,'index']);
    // Route::post('income/store',[IncomeController::class,'store']);
    // Route::get('income/edit/{id}',[IncomeController::class,'edit']);
    Route::post('income/update',[IncomeController::class,'update']);

    Route::get('income/category',[IncomeCategoryController::class,'index']);
    Route::post('income/category/store',[IncomeCategoryController::class,'store']);
    Route::get('expense',[ExpenseController::class,'index']);
    Route::get('expense/category',[ExpenseCategoryController::class,'index']);

    Route::get('report',[ReportController::class,'index']);
    Route::get('report/all',[ReportController::class,'allReport']);
    Route::post('report/all',[ReportController::class,'printAllreport']);
    Route::get('report/income',[ReportController::class,'incomeReport']);
    Route::post('report/income',[ReportController::class,'printIncomeReport']);

    Route::get('email',[EmailController::class,'create']);
    Route::post('email/send',[EmailController::class,'send']);

    Route::get('profile/edit',[ProfileController::class,'edit']);
    Route::post('profile/update',[ProfileController::class,'update']);

    Route::post('search',[SearchController::class,'search']);
});




require __DIR__.'/auth.php';
