<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CandidateController;

use App\Models\Admin;





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

Route::get('/',[PagesController::class,'home'])->name('homePage');


Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact',[PagesController::class, 'contact']);
Route::get('/dashboard/{id}',[AdminController::class, 'show'])->where('id','\d+')->name('dash');
Route::get('/details',[PagesController::class, 'details'])->name('JobDetails');
Route::get('/update',[PagesController::class, 'update']);
Route::get('/candidate/details/{id}/{Cid}',[CandidateController::class, 'show'])->where('id','\d+')->name('candidateDetails');
Route::get('/addCandidate',[PagesController::class, 'addCandidate']);
Route::get('/adminAccount/{id}',[adminController::class, 'index'])->where('id','\d+')->name('adminAccount');


Route::post('/jobs/apply/{id}',[CandidateController::class, 'create'])->where('id','\d+')->name('apply');
Route::post('/apply/store',[CandidateController::class, 'store'])->name('storeCandidate');
Route::get('/candidate/{id}',[CandidateController::class, 'index'])->where('id','\d+')->name('candidate');


Route::get('profile/create',[ProfileController::class, 'create'])->name('CUser');
Route::post('profile/store',[ProfileController::class, 'store'])->name('storeUser');
Route::get('user/register/error',[ProfileController::class, 'error'])->name('error');


Route::get('/jobs', [offerController::class, 'index'])->name('AllJobs');
Route::get('/offer/edit/{adminId}/{id}', [offerController::class, 'edit'])->where('id','\d+')->name('editOffer');
Route::put('/offer/update/{adminId}/{id}', [offerController::class, 'update'])->where('id','\d+')->name('updateOffer');

Route::get('/offer/{id}', [offerController::class, 'offer'])->where('id','\d+')->name('offer');
Route::get('/offer/create/{id}', [offerController::class, 'create'])->where('id','\d+')->name('createOffer');
Route::post('/offer/store', [offerController::class, 'store'])->name('storeOffer');
Route::get('/offer/details/{id}/{offerId}', [offerController::class, 'offerDetails'])->where('id','\d+')->name('offerDetails');

Route::get('/offer/delete/{adminId}/{offerId}', [offerController::class, 'destroy'])->where('id','\d+')->name('destroyOffer');
Route::get('/candidate/delete/{Aid}/{Cid}', [CandidateController::class, 'destroy'])->where('id','\d+')->name('destroyCandidate');

Route::get('/admin/delete/{id}', [adminController::class, 'destroy'])->where('id','\d+')->name('destroyadmin');
Route::get('/admin/edit/{id}', [adminController::class, 'edit'])->where('id','\d+')->name('editAdmin');
Route::put('/admin/update/{id}', [adminController::class, 'update'])->where('id','\d+')->name('updateAdmin');


Route::get('/jobs/{id}', [offerController::class, 'show'])->where('id','\d+')->name('showOffer');



Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login/connected',[LoginController::class, 'store'])->name('Ulogin');


Route::get('/admin/login', [adminController::class, 'create'])->name('loginAdmin');
Route::post('/admin/register', [adminController::class, 'store'])->name('storeAdmin');
Route::post('/admin/connected', [adminController::class, 'login'])->name('loginAd');


