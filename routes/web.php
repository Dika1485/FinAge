<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\TransactionNoteController;
use App\Http\Controllers\DebtCreditController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\TransactionCategoryController;
use App\Http\Controllers\MonthlyReportController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\BalanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('budget', BudgetController::class);
Route::resource('transaction_note', TransactionNoteController::class);
Route::resource('debt_credit', DebtCreditController::class);
Route::resource('investment', InvestmentController::class);
Route::resource('transaction_category', TransactionCategoryController::class);
Route::resource('monthly_report', MonthlyReportController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('income', IncomeController::class);
Route::resource('expense', ExpenseController::class);
Route::resource('balance', BalanceController::class);
Route::get('/token', function () {
    return csrf_token(); 
});