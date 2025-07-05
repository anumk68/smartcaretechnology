<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BlogReviewController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ServicesBrandController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//--------------------frontend------------------------//

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/services/{slug?}', [IndexController::class, 'servicess'])->name('services');
Route::get('/services-details/{slug}', [IndexController::class, 'service_details'])->name('service.details');
Route::get('/how-we-work', [IndexController::class, 'howWeWork'])->name('how.we.work');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact-us', [IndexController::class, 'contact_store'])->name('contact.store');
Route::get('/pricing', [IndexController::class, 'pricing'])->name('pricing');
Route::get('/blogs/{slug?}', [IndexController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [IndexController::class, 'blog_details'])->name('blog.details');
Route::post('/blog-review', [IndexController::class, 'blog_review_store'])->name('blog.review.store');
Route::get('/search-blog', [IndexController::class, 'search_blog'])->name('search.blog');


//--------------------------------Admin---------------------------------------------//
// Public Auth Routes
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//   Protected Admin Routes
Route::middleware(['auth', 'isAdmin'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Blog Category
    Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
    Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
    Route::get('/blog-category/edit/{id}', [BlogCategoryController::class, 'edit'])->name('blog-category.edit');
    Route::post('/blog-category/update/{id}', [BlogCategoryController::class, 'update'])->name('blog-category.update');
    Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class, 'destroy'])->name('blog-category.destroy');

    // Blogs
    Route::get('/admin-blogs', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Blog Reviews
    Route::get('/blog-reviews', [BlogReviewController::class, 'index'])->name('blog.review.list');
    Route::patch('/review/toggle-status/{id}', [BlogReviewController::class, 'toggleStatus'])->name('review.toggleStatus');

    // Contact List
    Route::get('/contact-us-list', [ContactController::class, 'index'])->name('contact.us.list');

    // Brands
    Route::get('/brands', [ServicesBrandController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [ServicesBrandController::class, 'create'])->name('brands.create');
    Route::post('/brands', [ServicesBrandController::class, 'store'])->name('brands.store');
    Route::get('/brands/{brand}/edit', [ServicesBrandController::class, 'edit'])->name('brands.edit');
    Route::put('/brands/{brand}', [ServicesBrandController::class, 'update'])->name('brands.update');
    Route::delete('/brands/{brand}', [ServicesBrandController::class, 'destroy'])->name('brands.destroy');

    // Services
    Route::get('admin-service', [ServicesController::class, 'index'])->name('services.index');
    Route::get('service/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('services', [ServicesController::class, 'store'])->name('services.store');
    Route::get('services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('services/{service}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('services/{service}', [ServicesController::class, 'destroy'])->name('services.destroy');
});
