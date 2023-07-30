<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DesignationContgroller;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('admin-login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'adminLogin'])->name('admin.login');

// admin group route
Route::middleware('is_admin')->group(function () {
    Route::get('/admin/home', [AdminController::class,'admin'])->name('admin.home');
    Route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');

    // Service category route
    Route::group(['prefix'=>'service-category'], function(){
        Route::get('/', [CategoryController::class,'index'])->name('category.index');
        Route::get('/create', [CategoryController::class,'create'])->name('category.create');
        Route::post('/store', [CategoryController::class,'store'])->name('store.category');
        Route::get('/delete/{id}', [CategoryController::class,'destroy'])->name('category.delete');
        Route::get('/edit/{id}', [CategoryController::class,'edit']);
        Route::post('/update', [CategoryController::class,'update'])->name('update.category');
    });

    // Service sub category route
    Route::group(['prefix'=>'service-subcategory'], function(){
        Route::get('/', [SubCategoryController::class,'index'])->name('subcategory.index');
        Route::get('/create', [SubCategoryController::class,'create'])->name('subcategory.create');
        Route::post('/store', [SubCategoryController::class,'store'])->name('store.subcategory');
        Route::post('/delete/{id}', [SubCategoryController::class,'destroy'])->name('destroy.subcategory');
        Route::get('/edit/{id}', [SubCategoryController::class,'edit']);
        Route::post('/update', [SubCategoryController::class,'update'])->name('update.subcategory');
    });

    // Designation route
    Route::group(['prefix'=>'designation'], function(){
        Route::get('/', [DesignationContgroller::class,'index'])->name('designation.index');
        Route::get('/create', [DesignationContgroller::class,'create'])->name('designation.create');
        Route::post('/store', [DesignationContgroller::class,'store'])->name('store.designation');
        Route::get('/delete/{id}', [DesignationContgroller::class,'destroy'])->name('designation.destroy');
        Route::get('/edit/{id}', [DesignationContgroller::class,'edit']);
        Route::post('/update', [DesignationContgroller::class,'update'])->name('designation.update');
    });

    // team member route
    Route::group(['prefix'=>'team-members'], function(){
        Route::get('/', [DesignationContgroller::class,'index'])->name('designation.index');
        // Route::get('/create', [DesignationContgroller::class,'create'])->name('designation.create');
        // Route::post('/store', [DesignationContgroller::class,'store'])->name('store.designation');
        // Route::get('/delete/{id}', [DesignationContgroller::class,'destroy'])->name('designation.destroy');
        // Route::get('/edit/{id}', [DesignationContgroller::class,'edit']);
        // Route::post('/update', [DesignationContgroller::class,'update'])->name('designation.update');
    });


    

});
