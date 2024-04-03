<?php

use App\Models\GroupModul;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoaController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/credit-term', function () {
    return view('coa/creditTermManagementAdd');
});
Route::get('/edit-credit-term', function () {
    return view('coa/creditTermManagementEdit');
});

Route::get('/list-credit-term/{id}', function () {
    return view('coa/creditTermManagement');
});

Route::get('/list-customer-supplier', function () {
    return view('coa/customerSupplierGroupManagement');
});

Route::get('/customer-supplier', function () {
    return view('coa/customerSupplierGroupManagementAdd');
});

Route::get('/list-supplier-type', function () {
    return view('coa/supplierTypeManagement');
});

Route::get('/supplier-type', function () {
    return view('coa/supplierTypeManagementAdd');
});

Route::get('/currency-management', function () {
    return view('coa/currencyManagementAdd');
});

Route::get('/list-currency-management', function () {
    return view('coa/currencyManagement');
});

Route::get('/list-group-modul', function () {
    $groupModuls = GroupModul::all();
    return view('coa.groupModul', compact('groupModuls'));
});

Route::get('/group-modul', function () {
    $groupModuls = GroupModul::all();
    return view('coa.groupModulAdd', compact('groupModuls'));
});

Route::get('/edit-group-modul/{id}', function ($id) {
    $groupModul = GroupModul::find($id);
    return view('coa.groupModulEdit', compact('groupModul'));
});

Route::get('/list-modul-form', function () {
    $modulForms = App\Models\ModulForm::all();
    return view('coa/modulForm', compact('modulForms'));
});

Route::get('/modul-form', 'App\Http\Controllers\CoaController@createModulForm');

Route::get('/edit-modul-form', function () {
    return view('coa/modulFormEdit');
});

Route::get('/list-doc-num', function () {
    return view('coa/documentNumberingFormat');
});

Route::get('/doc-num', function () {
    return view('coa/documentNumberingFormatAdd');
});

Route::get('/list-journal-type', function () {
    return view('coa/journalTypeManagement');
});

Route::get('/journal-type', function () {
    return view('coa/journalTypeManagementAdd');
});

Route::get('/list-pay-method', function () {
    return view('coa/paymentMethodManagement');
});

Route::get('/pay-method', function () {
    return view('coa/paymentMethodManagementAdd');
});

Route::get('/list-price-category', function () {
    return view('coa/priceCategoryManagement');
});

Route::get('/price-category', function () {
    return view('coa/priceCategoryManagementAdd');
});

Route::get('/list-tax-manage', function () {
    return view('coa/taxManagement');
});

Route::get('/tax-manage', function () {
    return view('coa/taxManagementAdd');
});

Route::post('/modul-form', [CoaController::class, 'storeModul'])->name('modulFormAdd');
Route::get('/modul-form', [CoaController::class, 'joinGroup']);
Route::get('/list-modul-form', [CoaController::class, 'index'])->name('coa.modulForm');
Route::get('/edit-modul-form/{id}', [CoaController::class, 'edit'])->name('modulFormEdit');
Route::put('/update-modul-form/{id}', [CoaController::class, 'update'])->name('modulFormUpdate');
Route::delete('/delete-modul-form/{id}', [CoaController::class, 'destroy'])->name('modulFormDelete');

//credit term
Route::get('/list-credit-term', [CoaController::class, 'indexCredit'])->name('creditTermManagement');
Route::post('/credit-term', [CoaController::class, 'storeCredit'])->name('storeCreditTerm');
Route::get('/credit-term', [CoaController::class, 'joinModul'])->name('creditAdd');
Route::get('/edit-credit-term/{id}', [CoaController::class, 'edit'])->name('edit-credit-term');
Route::put('/update-credit-term/{id}', [CoaController::class, 'update'])->name('update-credit-term');
Route::delete('/delete-credit-term/{id}', [CoaController::class, 'destroy'])->name('delete-credit-term');
