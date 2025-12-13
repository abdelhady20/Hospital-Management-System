<?php

use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    //#################################################### User Dashboard ##########################
    Route::get('/dashboard/user', function () {
        return view('Dashboard.User.dashboard');
    })->middleware(['auth'])->name('dashboard.user');

    //#################################################### Admin Dashboard ##########################
    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard.admin');
    //#################################################### Backend Admin Dashboard ##########################

        Route::middleware(['auth:admin'])->group(function () {
            //section routes
            Route::resource('Sections', SectionController::class);

            //Doctor routes
            Route::resource('Doctors', DoctorController::class);
            Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
            Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');

            //Service
            Route::resource('Service', SingleServiceController::class);

            //Livewire
            Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');
            Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');
            Route::view('Print_single_invoices','livewire.single_invoices.print')->name('Print_single_invoices');
            Route::view('group_invoices','livewire.Group_invoices.index')->name('group_invoices');
            Route::view('group_Print_single_invoices','livewire.Group_invoices.print')->name('group_Print_single_invoices');

            //Insurance
            Route::resource('/insurance', InsuranceController::class);

            //Ambulance
            Route::resource('Ambulance', AmbulanceController::class);

            //Patients
            Route::resource('Patients', PatientController::class);

            //Receipt
            Route::resource('Receipt',ReceiptAccountController::class);

            //Payment
            Route::resource('Payment', PaymentAccountController::class);


        });


    //##############################################################################
    require __DIR__.'/auth.php';
});



//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


