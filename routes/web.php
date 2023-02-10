<?php

use Illuminate\Support\Facades\Route;

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
   return redirect() -> route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) -> name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus']) -> name('aboutus');
Route::get('/buy', [App\Http\Controllers\HomeController::class, 'buy'])-> name('buy');
Route::get('/sell', [App\Http\Controllers\HomeController::class, 'sell'])->name('sell');
Route::get('/why-us', [App\Http\Controllers\HomeController::class, 'whyus'])->name('whyus');
Route::get('/find-and-agent', [App\Http\Controllers\HomeController::class, 'findandagent'])->name('findandagent');
Route::get('/agent', [App\Http\Controllers\HomeController::class, 'agent'])->name('agent');

Route::get('/admin', function () {
    return view('admin.login');
});
Route::group(['prefix' => 'admin'], function(){    
    Route::get("/login", [App\Http\Controllers\AdminController::class, 'login'])->middleware('admin.guest')->name("admin.login");
    Route::post("/login", [App\Http\Controllers\AdminController::class, 'login'])->middleware('admin.guest')->name("admin.login.check");
    Route::get("/register", [App\Http\Controllers\AdminController::class, 'register'])->middleware('admin.guest')->name("admin.register");
    Route::post("/register", [App\Http\Controllers\AdminController::class, 'register'])->middleware('admin.guest')->name("admin.register.submit");
    Route::get("/dashboard", [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('admin.auth')->name("admin.dashboard");
    Route::get("/agent", [App\Http\Controllers\AgentController::class, 'list'])->middleware('admin.auth')->name("agent.list");
    Route::get("/add-agent", [App\Http\Controllers\AgentController::class, 'add'])->middleware('admin.auth')->name("agent.insert");
    Route::post("/add-agent", [App\Http\Controllers\AgentController::class, 'add'])->middleware('admin.auth')->name("agent.insert.success");
    Route::get("/update-agent/{id}", [App\Http\Controllers\AgentController::class, 'update'])->middleware('admin.auth')->name("agent.update");
    Route::post("/update-agent", [App\Http\Controllers\AgentController::class, 'update'])->middleware('admin.auth')->name("agent.update.success");
    Route::get("/agent/delete/{id}", [App\Http\Controllers\AgentController::class, 'delete'])->middleware('admin.auth')->name("agent.delete");
    Route::get("/company/list", [App\Http\Controllers\CompanyController::class, 'getcompany'])->middleware('admin.auth') -> name("company.list");
    Route::get("/company/update", [App\Http\Controllers\CompanyController::class, 'updatecompany'])->middleware('admin.auth') -> name("company.update");
    Route::post("/company/update", [App\Http\Controllers\CompanyController::class, 'updatecompany'])->middleware('admin.auth') -> name("company.update.success");
    Route::get("/about-us", [App\Http\Controllers\AboutusController::class, 'getaboutus'])->middleware('admin.auth') -> name("aboutus.list");
    Route::get("/about-us/update", [App\Http\Controllers\AboutusController::class, 'updateaboutus'])->middleware('admin.auth') -> name("aboutus.update");
    Route::post("/about-us/update", [App\Http\Controllers\AboutusController::class, 'updateaboutus'])->middleware('admin.auth') -> name("aboutus.update.success");
    Route::get("/why-us", [App\Http\Controllers\WhyusController::class, 'getwhychooseus'])->middleware('admin.auth') -> name("whyus.list");
    Route::get("/why-us/update", [App\Http\Controllers\WhyusController::class, 'updatewhychooseus'])->middleware('admin.auth') -> name("whyus.update");
    Route::post("/why-us/update", [App\Http\Controllers\WhyusController::class, 'updatewhychooseus'])->middleware('admin.auth') -> name("whyus.update.success");
    Route::get("/seller", [App\Http\Controllers\SellerController::class, 'getseller'])->middleware('admin.auth') -> name("seller.list");
    Route::get("/seller/update", [App\Http\Controllers\SellerController::class, 'updateseller'])->middleware('admin.auth') -> name("seller.update");
    Route::post("/seller/update", [App\Http\Controllers\SellerController::class, 'updateseller'])->middleware('admin.auth') -> name("seller.update.success");
    Route::get("/buyer", [App\Http\Controllers\BuyerController::class, 'getbuyer'])->middleware('admin.auth') -> name("buyer.list");
    Route::get("/buyer/update", [App\Http\Controllers\BuyerController::class, 'updatebuyer'])->middleware('admin.auth') -> name("buyer.update");
    Route::post("/buyer/update", [App\Http\Controllers\BuyerController::class, 'updatebuyer'])->middleware('admin.auth') -> name("buyer.update.success");

    Route::get("/service/list", [App\Http\Controllers\ServiceController::class, 'servicelist'])->middleware('admin.auth')->name('service.list');
    Route::get("/service/add", [App\Http\Controllers\ServiceController::class, 'serviceadd'])->middleware('admin.auth')->name('service.add');
    Route::post("/service/add", [App\Http\Controllers\ServiceController::class, 'serviceadd'])->middleware('admin.auth')->name('service.add.success');
    Route::get("/service/update/{id}", [App\Http\Controllers\ServiceController::class, 'serviceupdate'])->middleware('admin.auth')->name('service.update');
    Route::post("/service/update", [App\Http\Controllers\ServiceController::class, 'serviceupdate'])->middleware('admin.auth')->name('service.update.success');
    Route::get("/service/delete/{id}", [App\Http\Controllers\ServiceController::class, 'servicedelete'])->middleware('admin.auth')->name('service.delete');
    
    Route::get("/benefit/list", [App\Http\Controllers\BenifitController::class, 'benifitlist'])->middleware('admin.auth')->name('benifit.list');
    Route::get("/benefit/add", [App\Http\Controllers\BenifitController::class, 'benifitadd'])->middleware('admin.auth')->name('benifit.add');
    Route::post("/benefit/add", [App\Http\Controllers\BenifitController::class, 'benifitadd'])->middleware('admin.auth')->name('benifit.add.success');
    Route::get("/benefit/update/{id}", [App\Http\Controllers\BenifitController::class, 'benifitupdate'])->middleware('admin.auth')->name('benifit.update');
    Route::post("/benefit/update", [App\Http\Controllers\BenifitController::class, 'benifitupdate'])->middleware('admin.auth')->name('benifit.update.success');
    Route::get("/benefit/delete/{id}", [App\Http\Controllers\BenifitController::class, 'benifitdelete'])->middleware('admin.auth')->name('benifit.delete');

    Route::get("/slider/update", [App\Http\Controllers\SliderController::class, 'updateSlider'])->middleware('admin.auth') -> name('slider.update');
    Route::post("/slider/update", [App\Http\Controllers\SliderController::class, 'updateSlider'])->middleware('admin.auth') -> name('slider.update.success');

    Route::get("/home/update", [App\Http\Controllers\AdminHomeController::class, 'updateHome'])->middleware('admin.auth') -> name('home.update');
    Route::post("/home/update", [App\Http\Controllers\AdminHomeController::class, 'updateHome'])->middleware('admin.auth') -> name('home.update.success');

}); 