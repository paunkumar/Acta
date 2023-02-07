<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserblogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\LoginController;
use App\Http\Controllers\AdminController\MetatagController;
use App\Http\Controllers\AdminController\BlogController;
use App\Http\Controllers\AdminController\CareerController;
use App\Http\Controllers\UserController\IndexController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ContactController;
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

// Route::get('/admin/login', function () {
//     return redirect('admin/login');
// });

Route::redirect('/public/', 'https://www.actaintl.com', 301);

Route::group( [ 'prefix' => 'admin'], function()
{
    Route::get('/login', [LoginController::class,'login'])->middleware('guest')->name('login');

    Route::post('/login',[LoginController::class,'verify']);
    Route::get('/register',[LoginController::class,'register'])->middleware('guest');
    Route::post('/register',[LoginController::class,'save']);
    Route::get('/logout',[LoginController::class,'logout']);

    Route::get('/dashboard',[DashboardController::class,'index']);

    //     //pages
    Route::get('/view-page-list',[MetatagController::class,'pageList']);
    Route::post('/Add-pageUrl',[MetatagController::class,'addPageList']);
    Route::get('/Edit-MetaContent/{id}',[MetatagController::class,'metaContentEdit']);
    Route::post('/updateMeta/{id}',[MetatagController::class,'metaContentUpdate']);

     //blogs
    Route::get('/blog',[BlogController::class,'uploadBlog']);
    Route::post('/blog/save',[BlogController::class,'saveBlog']);
    Route::get('/view-blog',[BlogController::class,'listBlog']);
    Route::get('/changeBlogStatus',[BlogController::class, 'changeBlogStatus']);
    Route::get('/EditBlog/{id}',[BlogController::class,'editBlog']);
    Route::post('/blog/update',[BlogController::class,'updateBlog']);
    Route::get('/deleteSpecificBlog',[BlogController::class,'deleteBlog']);
    Route::post('ckeditor/blog-upload',[BlogController::class,'upload'])->name('ckeditor.blogimage-upload');

    //     //career
    Route::get('/Add-Current-Openings',[CareerController::class,'add']);
    Route::post('/saveCareer',[CareerController::class,'save']);
    Route::get('/View-Openings',[CareerController::class,'view']);
    Route::get('/changeCareerStatus',[CareerController::class,'changeStatus']);
    Route::get('/EditOpenings/{id}',[CareerController::class,'edit']);
    Route::post('/updateCareer',[CareerController::class,'update']);
    Route::get('/deleteSpecificOpening',[CareerController::class,'delete']);
    Route::post('ckeditor/upload',[CareerController::class,'upload'])->name('ckeditor.image-upload');
    Route::get('/View-Applications',[CareerController::class,'viewApplications']);
    Route::get('/EditApplications/{id}',[CareerController::class,'editApplications']);

    Route::get('/contact',[ContactController::class,'listContact']);

});

// Route::middleware(['prefix' => 'admin', 'middleware' => 'auth'])->group(function(){

//     

//     //profile
//     Route::get('/Profile-Update',[DashboardController::class,'profileUpdate']);
//     Route::post('Profile-update',[DashboardController::class,'update']);

//     //pages
//     Route::get('/view-page-list',[MetatagController::class,'pageList']);
//     Route::post('/Add-pageUrl',[MetatagController::class,'addPageList']);
//     Route::get('/Edit-MetaContent/{id}',[MetatagController::class,'metaContentEdit']);
//     Route::post('/updateMeta/{id}',[MetatagController::class,'metaContentUpdate']);


// });




// //user website
// Route::get('/index',[HomeController::class,'index']);
// Route::get('/why-acta',[HomeController::class,'whyacta']);
Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/management-team',[HomeController::class,'management']);
Route::get('/our-team',[HomeController::class,'ourTeam']);
Route::get('/data-security-confidentiality',[HomeController::class,'dataSecurity']);

Route::get('/careers', [HomeController::class,'careerActa']);
Route::get('/career-view/{id}', [HomeController::class,'careerview']);
Route::get('/contact-us',[HomeController::class,'contactus']);
Route::get('/sitemap',[SitemapController::class,'index']);
Route::get('sitemap.xml', [SitemapController::class,'sitemap']);


Route::post('/save-contact',[ContactController::class,'store']);

Route::post('/upload-resume',[ContactController::class,'uploadResume']);

Route::get('/privacy-policy',[HomeController::class,'privacypolicy']);

// //blogs
// Route::get('/All-Blog',[UserblogController::class,'allBlog']);
// Route::get('/blog-details/{id}/{meta}',[UserblogController::class,'blogDetails']);
// Route::post('/blog-search/{id}',[UserblogController::class,'blogSearch']);

//services
Route::get('/services/USA/Accounting-Bookkeeping-services/',[ServiceController::class,
    'servicesUSA']);
Route::get('services/australia/Accounting-Bookkeeping-services/',[ServiceController::class,'servicesAustralia']);
Route::get('services/canada/accounting-and-bookkeeping-services/',[ServiceController::class,'servicesCanada']);
Route::get('/services/uk/Virtual-accounting-bookkeeping-services/',[ServiceController::class,'servicesUk']);
Route::get('/services/uae/accounting-bookkeeping-services/',[ServiceController::class,
    'servicesUae']);
Route::get('/services/india/accounting-bookkeeping-GST-income-tax/',[ServiceController::class,
    'servicesIndia']);
Route::get('/services/othercountries',[ServiceController::class,
    'servicesOtherCountries']);

//user
Route::get('/', [HomeController::class,'index']);
