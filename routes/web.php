<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\InvoiceController;

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
//    return view('welcome');
//});

Auth::routes();

Route::get('/user-home', [App\Http\Controllers\HomeController::class,'index2'])->name('admin.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');

Route::group(['middleware' => ['checkadmin']], function(){

    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
    
    // brand
    Route::get('/admin/brand/',[App\Http\Controllers\BrandController::class, 'showBrands'])->name('brand.index');
    Route::get('/admin/brand/create',[App\Http\Controllers\BrandController::class, 'createBrands'])->name('brand.create');
    Route::post('/admin/brand/create',[App\Http\Controllers\BrandController::class,'saveBrand'])->name('brand.create');

    Route::get('/admin/brands/edit/{key}',[App\Http\Controllers\BrandController::class,'getBrand'])->name('brand.edit');
    Route::put('/admin/brands/edit/{id}',[App\Http\Controllers\BrandController::class,'saveBrand'])->name('brand.update');
    Route::delete('/admin/brand/delete/{id}',[App\Http\Controllers\BrandController::class,'deleteBrand'])->name('brand.delete');
    // brand end

    // bankaccount
    Route::get('/admin/bank-account/',[App\Http\Controllers\BankController::class, 'showBanks'])->name('bank.index');
    Route::get('/admin/bank-account/create',[App\Http\Controllers\BankController::class, 'createBanks'])->name('bank.create');
    Route::post('/admin/bank-account/create',[App\Http\Controllers\BankController::class,'saveBank'])->name('bank.create');
    Route::get('/admin/bank-account/edit/{key}',[App\Http\Controllers\BankController::class,'getBank'])->name('bank.edit');
    Route::put('/admin/bank-account/edit/{id}',[App\Http\Controllers\BankController::class,'saveBank'])->name('bank.update');
    Route::delete('/admin/bank/delete/{id}',[App\Http\Controllers\BankController::class,'deleteBank'])->name('bank.delete');
    // bankaccountend

    //holiday
    Route::get('/admin/holiday-type/',[App\Http\Controllers\HolidayController::class, 'showHolidays'])->name('holiday.index');
    Route::get('/admin/holiday-type/create',[App\Http\Controllers\HolidayController::class, 'createHolidays'])->name('holiday.create');
    Route::post('/admin/holiday-type/create',[App\Http\Controllers\HolidayController::class,'saveHoliday'])->name('holiday.create');
    Route::get('/admin/holiday-type/edit/{key}',[App\Http\Controllers\HolidayController::class,'getHoliday'])->name('holiday.edit');
    Route::put('/admin/holidaytype/edit/{id}',[App\Http\Controllers\HolidayController::class,'saveHoliday'])->name('holiday.update');
    Route::delete('/admin/holiday-type/delete/{id}',[App\Http\Controllers\HolidayController::class,'deleteHoliday'])->name('holiday.delete');
    //endholiday

    // holidaydestination 
    Route::get('/admin/holiday-destination/',[App\Http\Controllers\HolidayDestinationController::class, 'showHolidays'])->name('holiday_d.index');
    Route::get('/admin/holiday-destination/create',[App\Http\Controllers\HolidayDestinationController::class, 'createHolidays'])->name('holiday_d.create');

    Route::post('/select-ajax',[App\Http\Controllers\HolidayDestinationController::class,'selectAjax'])->name('select-ajax');

    Route::post('/admin/holiday-destination/create',[App\Http\Controllers\HolidayDestinationController::class,'saveHoliday'])->name('holiday_d.create');
    Route::get('/admin/holiday-destination/edit/{key}',[App\Http\Controllers\HolidayDestinationController::class,'getHoliday'])->name('holiday_d.edit');
    Route::put('/admin/holiday-destination/edit/{id}',[App\Http\Controllers\HolidayDestinationController::class,'saveHoliday'])->name('holiday_d.update');
    Route::delete('/admin/holiday-destination/delete/{id}',[App\Http\Controllers\HolidayDestinationController::class,'deleteHoliday'])->name('holiday_d.delete');
    // endholidaydestination


      // region
      Route::get('/admin/region/',[App\Http\Controllers\RegionController::class, 'showRegions'])->name('region.index');
      Route::get('/admin/regions/create',[App\Http\Controllers\RegionController::class, 'createRegions'])->name('region.create');
  
    //   Route::post('/select-ajax',[App\Http\Controllers\HolidayDestinationController::class,'selectAjax'])->name('select-ajax');
  
      Route::post('/admin/region/create',[App\Http\Controllers\RegionController::class,'saveRegion'])->name('region.create');
      Route::get('/admin/region/edit/{key}',[App\Http\Controllers\RegionController::class,'getRegion'])->name('region.edit');
      Route::put('/admin/region/edit/{id}',[App\Http\Controllers\RegionController::class,'saveRegion'])->name('region.update');
      Route::delete('/admin/region/delete/{id}',[App\Http\Controllers\RegionController::class,'deleteRegion'])->name('region.delete');
      // end region 


      // country
      Route::get('/admin/country/',[App\Http\Controllers\CountryController::class, 'showCountry'])->name('country.index');
      Route::get('/admin/country/create',[App\Http\Controllers\CountryController::class, 'createCountries'])->name('country.create');
      Route::post('/admin/country/create',[App\Http\Controllers\CountryController::class,'saveCountry'])->name('country.create');
      Route::get('/admin/country/edit/{key}',[App\Http\Controllers\CountryController::class,'getCountry'])->name('country.edit');
      Route::put('/admin/country/edit/{id}',[App\Http\Controllers\CountryController::class,'saveCountry'])->name('country.update');
      Route::delete('/admin/country/delete/{id}',[App\Http\Controllers\CountryController::class,'deleteCountry'])->name('country.delete');
      // ENDCOUNTRY




  // Users
  Route::get('/admin/All-Users/',[App\Http\Controllers\UserController::class, 'showUsers'])->name('allusers.index');
  Route::get('/admin/All-Users/create',[App\Http\Controllers\UserController::class, 'createUsers'])->name('user.create');
  Route::post('/admin/All-Users/store',[App\Http\Controllers\UserController::class, 'saveUser'])->name('user.store');

  Route::get('/admin/All-Users/edit/{key}',[App\Http\Controllers\UserController::class,'getUser'])->name('user.edit');
  Route::put('/admin/All-Users/edit/{id}',[App\Http\Controllers\UserController::class,'saveUser'])->name('user.update');
  Route::delete('/admin/All-Users/delete/{id}',[App\Http\Controllers\UserController::class,'deleteUser'])->name('user.delete');
  // ENDusers
 
  
// Email Template
  Route::get('/admin/Email-Templates/',[App\Http\Controllers\EmailTemplateController::class,'showEmailtemplates'])->name('email.template.index');
  Route::get('/admin/Email-Templates/create',[App\Http\Controllers\EmailTemplateController::class, 'createEmailTemplates'])->name('email.template.create');
  Route::post('/admin/Email-Template/store',[App\Http\Controllers\EmailTemplateController::class, 'saveEmailTemplate'])->name('email.template.store');
  Route::get('/admin/Email-Template/edit/{key}',[App\Http\Controllers\EmailTemplateController::class,'getEmailtemplate'])->name('email.template.edit');
  Route::put('/admin/Email-Template/edit/{id}',[App\Http\Controllers\EmailTemplateController::class,'saveEmailTemplate'])->name('email.template.update');
  Route::delete('/admin/Email-Template/delete/{id}',[App\Http\Controllers\EmailTemplateController::class,'deleteEmailTemplate'])->name('emailtemplate.delete');
// End Email template 


// Email Banner
  Route::get('/admin/Email-Banners/',[App\Http\Controllers\EmailBannerController::class,'showEmailbanners'])->name('email.banner.index');
  Route::get('/admin/Email-Banners/create',[App\Http\Controllers\EmailBannerController::class, 'createEmailBanners'])->name('email.banner.create');
  Route::post('/admin/Email-Banner/store',[App\Http\Controllers\EmailBannerController::class, 'saveEmailBanner'])->name('email.banner.store');
  Route::get('/admin/Email-Banner/edit/{key}',[App\Http\Controllers\EmailBannerController::class,'getEmailbanner'])->name('email.banner.edit');
  Route::put('/admin/Email-Banner/edit/{id}',[App\Http\Controllers\EmailBannerController::class,'saveEmailBanner'])->name('email.banner.update');
  Route::delete('/admin/Email-Banner/delete/{id}',[App\Http\Controllers\EmailBannerController::class,'deleteEmailBanner'])->name('emailbanner.delete');
// End Email Banner

// Default Banner 
  Route::get('/admin/Default-Banner/',[App\Http\Controllers\DefaultBannerController::class,'showDefaultbanner'])->name('defaultbanner.index');
  Route::get('/admin/Default-Banner/create',[App\Http\Controllers\DefaultBannerController::class, 'createDefaultBanners'])->name('defaultbanner.create');
  Route::post('/admin/Default-Banner/store',[App\Http\Controllers\DefaultBannerController::class, 'saveDefaultBanner'])->name('defaultbanner.store');
  Route::get('/admin/Default-Banner/edit/{key}',[App\Http\Controllers\DefaultBannerController::class,'getDefaultbanner'])->name('defaultbanner.edit');
  Route::put('/admin/Default-Banner/edit/{id}',[App\Http\Controllers\DefaultBannerController::class,'saveDefaultBanner'])->name('defaultbanner.update');
  // Route::delete('/admin/Email-Banner/delete/{id}',[App\Http\Controllers\EmailBannerController::class,'deleteEmailBanner'])->name('emailbanner.delete');
// end default banner


// invoice 
Route::get('/admin/Invoice/',[App\Http\Controllers\InvoiceController::class,'showInvoices'])->name('invoice.index');
Route::get('/admin/Invoice/create',[App\Http\Controllers\InvoiceController::class, 'createInvoice'])->name('invoice.create');
Route::post('/admin/Invoice/store',[App\Http\Controllers\InvoiceController::class,'saveInvoice'])->name('invoice.store');
Route::get('/admin/Invoice/edit/{key}',[App\Http\Controllers\InvoiceController::class,'getInvoice'])->name('invoice.edit');
Route::put('/admin/Invoice/edit/{id}',[App\Http\Controllers\InvoiceController::class,'saveInvoice'])->name('invoice.update');
Route::delete('/admin/Invoice/delete/{id}',[App\Http\Controllers\InvoiceController::class,'deleteInvoice'])->name('invoice.delete');
// end invoice


// Target 
Route::get('/admin/Targets/',[App\Http\Controllers\TargetController::class,'showTargets'])->name('target.index');
Route::get('/admin/Target/create',[App\Http\Controllers\TargetController::class, 'createTarget'])->name('target.create');
Route::post('/admin/Target/store',[App\Http\Controllers\TargetController::class,'saveTarget'])->name('target.store');
Route::get('/admin/Target/edit/{key}',[App\Http\Controllers\TargetController::class,'getTarget'])->name('target.edit');
Route::put('/admin/Target/edit/{id}',[App\Http\Controllers\TargetController::class,'saveTarget'])->name('target.update');
Route::delete('/admin/Target/delete/{id}',[App\Http\Controllers\TargetController::class,'deleteTarget'])->name('target.delete');
// EndTraget


// Settings


Route::get('/admin/Settings/edit/',[App\Http\Controllers\SettingController::class,'getSetting'])->name('settings.edit');
Route::put('/admin/Settings/edit/{id}',[App\Http\Controllers\SettingController::class,'saveSetting'])->name('settings.update');

// endsettings



    // Route::get('/customer',[App\Http\Controllers\UserCustomerController::class, 'index'])->name('customer.dashboard')->middleware('role:customer');

    // Route::get('/admin/user',[App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('permission:show users');
   
    // Route::post('/admin/user/store',[App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    // Route::get('/admin/user/{user}/edit',[\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')->middleware('permission:edit users');
    // Route::put('/admin/user/{user}/update',[\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    // Route::delete('/admin/user/{user}/delete',[\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy')->middleware('permission:delete users');
    // Route::put('/admin/user/{user}/status',[\App\Http\Controllers\UserController::class, 'status'])->name('user.status')->middleware('permission:users status');
 });


// frontend
Route::get('/form',[App\Http\Controllers\FrontEndController::class, 'form'])->name('frontend.form');
// endfrontend


Route::group(['middleware' => ['auth','checkStatus']], function (){
  

});


//front-end

Route::get('/',[App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/about',[App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/category',[App\Http\Controllers\FrontEndController::class, 'category'])->name('category');
Route::get('/contact',[App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
//Route::get('/order',[App\Http\Controllers\FrontEndController::class, 'order'])->name('order');
Route::get('/single/{product}/product',[App\Http\Controllers\FrontEndController::class, 'single_product'])->name('single_product');
Route::get('/single/{colour}/colour/{product}/product',[App\Http\Controllers\FrontEndController::class, 'single_colour'])->name('single_colour');
