<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Companies\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Opportunity\OpportunityController;
use App\Http\Controllers\Postgraduate\PostgraduateController;
use App\Http\Controllers\Routes\RoutesController;
use App\Http\Controllers\Scholarship\ScholarshipController;
use App\Http\Controllers\Servant\ServantController;
use App\Http\Controllers\Training\TrainingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|all_companies
*/

Route::get('/',[FrontController::class,'index'])->name('index');  
Route::get('/training_route',[FrontController::class,'training_route'])->name('training_route');  
Route::get('/education_route',[FrontController::class,'education_route'])->name('education_route');  
Route::get('/job_route',[FrontController::class,'job_route'])->name('job_route');  
Route::get('/all_companies',[FrontController::class,'all_companies'])->name('all_companies');  
Route::get('/get_articles',[FrontController::class,'get_articles'])->name('get_articles');  
Route::get('/article/{id}',[FrontController::class,'article'])->name('article');  
Route::get('/elharamain',[FrontController::class,'elharamain'])->name('elharamains');  
Route::get('/job/{id}',[FrontController::class,'job'])->name('job');  
Route::get('/postgraduates/{id}',[FrontController::class,'postgraduates'])->name('postgraduates');  
Route::get('/get_scholarship/{id}',[FrontController::class,'get_scholarship'])->name('get_scholarship');  
Route::get('/get_servant/{id}',[FrontController::class,'get_servant'])->name('get_servant');  
Route::get('/contact',[FrontController::class,'contact'])->name('contact');  
Route::Post('/storeContact',[FrontController::class,'storeContact'])->name('storeContact');  

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){


// Route::get('/', function () {
//     $routes = Route::all();
//     return view('routes.index',compact('routes'));
//     });  
Route::get('/',[RoutesController::class,'index' ])->name('elharamain');  

Route::resource('company',CompanyController::class);
Route::resource('opportunity',OpportunityController::class);
Route::resource('training',TrainingController::class);
Route::resource('scholarship',ScholarshipController::class);
Route::resource('postgraduate',PostgraduateController::class);
Route::resource('servant',ServantController::class);
Route::resource('article',ArticleController::class);
Route::resource('contacts',ContactController::class);
Route::post('file_upload',[CompanyController::class,'file_upload'])->name('file_upload');
Route::post('company_delete_all ',[CompanyController::class,'company_delete_all'])->name('company_delete_all');
Route::post('contact_update ',[ContactController::class,'contact_update'])->name('contact_update');
Route::resource('routes',RoutesController::class);
Route::post('enable_expired ',[OpportunityController::class,'enable'])->name('enable_expired');
Route::post('userUpdate ',[HomeController::class,'userUpdate'])->name('userUpdate');

});


Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









