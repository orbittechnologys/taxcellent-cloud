<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFileController;

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

//Route::get('/', function () {
//  return view('welcome');
//});
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

include_once 'admin.php';
include_once 'staff.php';
/* service*/
Route::get('/service-category/{slug}', [App\Http\Controllers\IndexController::class, 'serviceCategoryDetail']);

Route::get('/cat_service_details/{slug}', [App\Http\Controllers\IndexController::class, 'catServiceDetail']);

Route::get('/accounting-and-tax-service', [App\Http\Controllers\IndexController::class, 'accountingAndTaxService'])->name('accounting-and-tax-service');

Route::get('/business-registration-service', [App\Http\Controllers\IndexController::class, 'businessRegistrationService'])->name('business-registration-service');

Route::get('/gst-service', [App\Http\Controllers\IndexController::class, 'gstService'])->name('gst-service');

Route::get('/legal-service', [App\Http\Controllers\IndexController::class, 'legalService'])->name('legal-service');

Route::get('/compliances-service', [App\Http\Controllers\IndexController::class, 'compliancesService'])->name('compliances-service');

Route::get('/itr-service', [App\Http\Controllers\IndexController::class, 'itrService'])->name('itr-service');
/* Sub service*/
Route::get('/service/private-limited-company-registration-services', [App\Http\Controllers\IndexController::class, 'privateLimitedCompanyRegService'])->name('service/private-limited-company-registration-services');

Route::get('/service/limited-liability-partnership-company-registration-services', [App\Http\Controllers\IndexController::class, 'limitedLiabilityPartnershipCompanyRegService'])->name('service/limited-liability-partnership-company-registration-services');

Route::get('/service/one-person-company-registration-services', [App\Http\Controllers\IndexController::class, 'onePersonCompanyRegService'])->name('service/one-person-company-registration-services');

Route::get('/service/startups-launching-website-agreement-services', [App\Http\Controllers\IndexController::class, 'websiteAgreement'])->name('service/startups-launching-website-agreement-services');

Route::get('/service/startups-launching-legal-agreement-services', [App\Http\Controllers\IndexController::class, 'legalAgreement'])->name('service/startups-launching-legal-agreement-services');

Route::get('/service/startups-launching-Trademark', [App\Http\Controllers\IndexController::class, 'launchingTrademark'])->name('service/startups-launching-Trademark');

Route::get('/service/startups-launching-objection', [App\Http\Controllers\IndexController::class, 'launchingObjection'])->name('service/startups-launching-objection');

Route::get('/complete-business-accounting', [App\Http\Controllers\IndexController::class, 'completeBusinessAccounting'])->name('complete-business-accounting');

/*Route::get('service/business-accounting-bookkeeping-services', [App\Http\Controllers\IndexController::class, 'BusinessAccountingBookkeeping'])->name('service/business-accounting-bookkeeping-services');*/

Route::get('service/startups-launching-registration-advisory-services', [App\Http\Controllers\IndexController::class, 'startupLunchingRegistration'])->name('service/startups-launching-registration-advisory-services');

Route::get('/manageinvoice', [App\Http\Controllers\IndexController::class, 'manageinvoice'])->name('manageinvoice');

Route::get('/service/gst-returns-filing-services', [App\Http\Controllers\IndexController::class, 'gstReturnsFiling'])->name('service/gst-returns-filing-services');

Route::get('/service/gst-registration-services', [App\Http\Controllers\IndexController::class, 'gstRegistrationServices'])->name('service/gst-registration-services');

Route::get('/service/import-export-code-registration-services', [App\Http\Controllers\IndexController::class, 'importExportCodeReg'])->name('service/import-export-code-registration-services');

Route::get('/service/digital-signature-certificate-dsc-token', [App\Http\Controllers\IndexController::class, 'digitalSignatureCertificat'])->name('service/digital-signature-certificate-dsc-token');

Route::get('/service/director-identification-number-services', [App\Http\Controllers\IndexController::class, 'directorIdentificationNumber'])->name('service/director-identification-number-services');

Route::get('/service/income-tax-return-filing-salaried-individual', [App\Http\Controllers\IndexController::class, 'incomeTaxReturnFilingSalariedIndividual'])->name('service/income-tax-return-filing-salaried-individual');

Route::get('/service/income-tax-return-filing-professional', [App\Http\Controllers\IndexController::class, 'incomeTaxReturnFilingProfessional'])->name('service/income-tax-return-filing-professional');

Route::get('/service/income-tax-return-filing-business', [App\Http\Controllers\IndexController::class, 'incomeTaxReturnFilingBusiness'])->name('service/income-tax-return-filing-business');

Route::get('/service/foreign-income-plan', [App\Http\Controllers\IndexController::class, 'foreignIncomePlan'])->name('service/foreign-income-plan');

Route::get('/service/income-tax-return-private-limited-company', [App\Http\Controllers\IndexController::class, 'incomeTaxReturnPrivateCompany'])->name('service/income-tax-return-private-limited-company');

Route::get('/service/income-tax-return-limited-liability-partnership-partnership-firm', [App\Http\Controllers\IndexController::class, 'incomeTaxReturnPartnershipfirm'])->name('service/income-tax-return-limited-liability-partnership-partnership-firm');

Route::get('/service/hni-plan', [App\Http\Controllers\IndexController::class, 'hriPlan'])->name('service/hni-plan');

Route::get('/contact-us', [App\Http\Controllers\IndexController::class, 'contactUs'])->name('contact-us');

Route::post('/contactform', [App\Http\Controllers\IndexController::class, 'contactForm'])->name('contactForm');
/* user routes */
/*profile routes*/
Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'myaccount'])->name('myaccount');
Route::get('/myprofile', [App\Http\Controllers\HomeController::class, 'myprofile'])->name('myprofile');
Route::get('/mydocument', [App\Http\Controllers\HomeController::class, 'mydocument'])->name('mydocument');
Route::get('/mypayment', [App\Http\Controllers\HomeController::class, 'mypayment'])->name('mypayment');
Route::get('/editprofile', [App\Http\Controllers\HomeController::class, 'editprofile'])->name('editprofile');
Route::post('/userAccountUpadte', [App\Http\Controllers\HomeController::class, 'userAccountUpadte'])->name('user.userAccountUpadte');
Route::post('uploadPanCard', [App\Http\Controllers\HomeController::class, 'uploadPanCard'])->name('uploadPanCard.post');
Route::post('uploadAadharCard', [App\Http\Controllers\HomeController::class, 'uploadAadharCard'])->name('uploadAadharCard.post');
Route::post('uploadGST', [App\Http\Controllers\HomeController::class, 'uploadGST'])->name('uploadGST.post');

/* close profile routes*/
/* Start cart routes*/
Route::get('/mycart', [App\Http\Controllers\CartController::class, 'mycart'])->name('cart.mycart');
Route::post('/addToCart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.addToCart');
Route::post('/removeFromCart', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.removeFromCart');
Route::post('/checkoutCart', [App\Http\Controllers\OrderController::class, 'store'])->name('checkout.order');
Route::get('/payment', [App\Http\Controllers\OrderController::class, 'index'])->name('payment.index');
Route::post('/payment', [App\Http\Controllers\OrderController::class, 'storepayment'])->name('payment.storepayment');
Route::post('/purchasePrivateLimitedCompany', [App\Http\Controllers\UserFileController::class, 'storeFile'])->name('user.fileUpload');
Route::post('/purchasePartnershipFirm/{catId}/{serviceId}', [App\Http\Controllers\UserFileController::class, 'storeFileMultiple'])->name('user.fileUploadMultiple');
//Route::patch('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
//Route::delete('remove-from-cart', [App\Http\Controllers\CartController::class, 'remove'])->name('remove.from.cart');

/*close cart routes */

/*Subscription routes start */
Route::get('/mysubscription', [App\Http\Controllers\SubscriptionController::class, 'index'])->name('mysubscription');
Route::get('/purchasePrivateLimitedCompany/{catID}/{serviceID}', [App\Http\Controllers\SubscriptionController::class, 'purchasePrivateLimitedCompany'])->name('purchase.privateLimitedCompany');

Route::get('/purchasePartnershipFirm', [App\Http\Controllers\SubscriptionController::class, 'purchasePartnershipFirm'])->name('purchase.partnershipFirm');
/*Subscription routes close */