<?php

use Illuminate\Support\Facades\Route;

Route::namespace ('admin')->prefix('admin')->group(function () {
    
    Route::get('/', [App\Http\Controllers\Admin\Homecontroller::class, 'index'])->name('admin.home');

    Route::namespace ('Auth')->group(function () {
        // Authentication Routes
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('admin.login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class,'login']);
        Route::get('logout',[App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('admin.logout');
        // Registration Routes
        //Route::get('register', 'RegisterController@showRegistrationForm')->name('Admin.register');
        //Route::post('register', 'RegisterController@register');
    });
    /* admin profile */
    Route::get('/profile', [App\Http\Controllers\Admin\Homecontroller::class, 'profile'])->name('admin.profile');
    Route::get('/editprofile', [App\Http\Controllers\Admin\Homecontroller::class, 'editprofile'])->name('admin.editprofile');
    Route::post('/userAccountUpadte', [App\Http\Controllers\Admin\Homecontroller::class, 'userAccountUpadte'])->name('admin.userAccountUpadte');
    Route::post('/userAccountPassword', [App\Http\Controllers\Admin\Homecontroller::class, 'userAccountPassword'])->name('admin.userAccountPassword');
    /* User profile */
    /* Side menu bar */
    Route::get('/uersProfile', [App\Http\Controllers\Admin\Clientcontroller::class, 'uersProfile'])->name('admin.uersProfile');
    Route::get('/uersSubscription', [App\Http\Controllers\Admin\Clientcontroller::class, 'uersSubscription'])->name('admin.uersSubscription');
   
    Route::get('/addServiceCategory', [App\Http\Controllers\Admin\Servicescontroller::class, 'addServiceCategory'])->name('admin.addServiceCategory');
    Route::post('/saveservicecategory', [App\Http\Controllers\Admin\Servicescontroller::class, 'store'])->name('admin.saveservicecategory');
    Route::get('/deleteservicecategory/{id}', [App\Http\Controllers\Admin\Servicescontroller::class, 'deletecategory'])->name('admin.deleteservicecategory/');
    Route::get('/editservicecategory/{id}', [App\Http\Controllers\Admin\Servicescontroller::class, 'editservicecategory'])->name('admin.editservicecategory/');
    Route::post('/editservicecategory/updateservicecategory', [App\Http\Controllers\Admin\Servicescontroller::class, 'updateservicecategory'])->name('admin.editservicecategory.editservicecategory/');
    Route::get('/serviceCategory', [App\Http\Controllers\Admin\Servicescontroller::class, 'ServiceCategory'])->name('admin.serviceCategory');

    Route::get('/service', [App\Http\Controllers\Admin\Servicecontroller::class, 'ServiceList'])->name('admin.service');
    Route::get('/addService', [App\Http\Controllers\Admin\Servicecontroller::class, 'addService'])->name('admin.addService');
    Route::post('/saveservice', [App\Http\Controllers\Admin\Servicecontroller::class, 'store'])->name('admin.saveservice');
    Route::get('/editservice/{id}', [App\Http\Controllers\Admin\Servicecontroller::class, 'editservice'])->name('admin.editservice/');
    Route::post('/editservice/updateservice', [App\Http\Controllers\Admin\Servicecontroller::class, 'updateservice']);
    Route::get('/deleteservice/{id}', [App\Http\Controllers\Admin\Servicecontroller::class, 'deleteservice'])->name('admin.deleteservice/');


    Route::get('/packages', [App\Http\Controllers\Admin\Packagescontroller::class, 'packagesList'])->name('admin.packages');
    Route::get('/addPackages', [App\Http\Controllers\Admin\Packagescontroller::class, 'addPackages'])->name('admin.addPackages');
    Route::post('/savepackages', [App\Http\Controllers\Admin\Packagescontroller::class, 'store'])->name('admin.savepackages');
    Route::get('/editpackages/{id}', [App\Http\Controllers\Admin\Packagescontroller::class, 'editpackages'])->name('admin.editpackages/');
    Route::post('/editpackages/updatepackages', [App\Http\Controllers\Admin\Packagescontroller::class, 'updatepackages']);
    Route::get('/deletepackages/{id}', [App\Http\Controllers\Admin\Packagescontroller::class, 'deletepackages'])->name('admin.deletepackages/');
    //Route::get('/businessRegistrationService', [App\Http\Controllers\Admin\Servicescontroller::class, 'businessRegistrationService'])->name('admin.businessRegistrationService');
    
    Route::get('/documentsList', [App\Http\Controllers\Admin\DocumentsController::class, 'DocumentList'])->name('admin.documentList');
    Route::get('/addDocument', [App\Http\Controllers\Admin\DocumentsController::class, 'addDocumentList'])->name('admin.addDocumentList');
    Route::post('/saveDocumentlist', [App\Http\Controllers\Admin\DocumentsController::class, 'store'])->name('admin.saveDocumentlist');
    Route::get('/editDocument/{id}', [App\Http\Controllers\Admin\DocumentsController::class, 'editDocument'])->name('admin.editDocument/');
    Route::post('/editDocument/updateDocument', [App\Http\Controllers\Admin\DocumentsController::class, 'updateDocument']);
    Route::get('/deleteDocument/{id}', [App\Http\Controllers\Admin\DocumentsController::class, 'deleteDocument'])->name('admin.deleteDocument/');
    
    // Route::get('/{doc}', function (){
    //     return Storage::download('doc');
    // })->name('admin.downloadZip');;
    Route::get('/businessService', [App\Http\Controllers\Admin\Servicescontroller::class, 'businessService'])->name('admin.businessService');
    Route::get('/businessServiceDetails/{id}/{service}', [App\Http\Controllers\Admin\Servicescontroller::class, 'businessServiceDetails'])->name('admin.businessServiceDetails');
    Route::get('/downloadFile/{id}/{fileDetails}', [App\Http\Controllers\Admin\Servicescontroller::class, 'downloadZip'])->name('admin.downloadZip');
    Route::post('/businessServiceDetails/{id}/{serviceId}/{catId}', [App\Http\Controllers\Admin\Servicescontroller::class, 'finalDocUpload'])->name('admin.uploadFile');

    Route::get('/legalService', [App\Http\Controllers\Admin\Servicescontroller::class, 'legalService'])->name('admin.legalService');
    Route::get('/uersAccountingService', [App\Http\Controllers\Admin\Servicescontroller::class, 'uersAccountingService'])->name('admin.uersAccountingService');
    Route::get('/uersCompliancesService', [App\Http\Controllers\Admin\Servicescontroller::class, 'uersCompliancesService'])->name('admin.uersCompliancesService');
    Route::get('/uersGSTService', [App\Http\Controllers\Admin\Servicescontroller::class, 'uersGSTService'])->name('admin.uersGSTService');
    Route::get('/uersTaxService', [App\Http\Controllers\Admin\Servicescontroller::class, 'uersTaxService'])->name('admin.uersTaxService');
    Route::get('/paymentStatus', [App\Http\Controllers\Admin\Paymentcontroller::class, 'paymentStatus'])->name('admin.paymentStatus');
    Route::get('/paymentSummary', [App\Http\Controllers\Admin\Paymentcontroller::class, 'paymentSummary'])->name('admin.paymentSummary');

});