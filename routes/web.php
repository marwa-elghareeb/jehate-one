<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ListController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\EventsController;

use App\Http\Controllers\Site\IndexController;
//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\PayementGeteway\Payment;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExportpdfController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\TestController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\AuthController;
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
//Portal Routes:
Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutUs', [IndexController::class, 'aboutUs']);
Route::get('/contactUs', [IndexController::class, 'contactUs']);
Route::get('/media', [IndexController::class, 'media']);
Route::get('/footerPages', [IndexController::class, 'footerPages']);
Route::get('/ourTeam', [IndexController::class, 'ourTeam']);

//Help Center
Route::get('/helpcenter', [IndexController::class, 'help']);
Route::get('/helpcenter/{id}', [IndexController::class, 'helpDetails']);
Route::get('/question', [IndexController::class, 'question']);
Route::post('/search', [IndexController::class, 'search']);
//Towers
Route::get('/cards', [IndexController::class, 'cards']);
Route::get('/towers', [IndexController::class, 'towers']);
Route::get('/allCompanies', [IndexController::class, 'companies']);
Route::get('/department/{id}', [IndexController::class, 'department']);
Route::get('/employe/{id}', [IndexController::class, 'employees']);
Route::get('/allEvents', [IndexController::class, 'events']);
Route::get('/employeesEvent/{id}', [IndexController::class, 'employeesEvent']);

//Admin
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('list', ListController::class);
    Route::resource('pages', PagesController::class);
    Route::resource('companies', CompaniesController::class);
    Route::resource('employees', EmployeesController::class);
    Route::resource('activitylog', ActivityController::class);
    Route::resource('faq', FAQController::class);
    Route::resource('departments', DepartmentsController::class);
    Route::resource('events', EventsController::class);
    Route::get('/contact-us',[ContactController::class,'contact']);
    Route::post('contact',[ContactController::class,'sendEmail'])->name('contact.us');


});
