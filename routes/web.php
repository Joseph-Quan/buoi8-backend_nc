<?php 
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; 
use App\Http\Controllers\PostController;
  
// ─── Routes độc lập ───────────────────────────────────────── 
Route::get('/', function () { 
    return view('welcome'); 
})->name('home'); 
 
Route::get('/about', function () { 
    return view('about'); 
})->name('about'); 
 
Route::get('/contact', function () { 
    return view('contact'); 
})->name('contact'); 
 
// ─── Route Group với prefix /shop ─────────────────────────── 
Route::prefix('shop')->name('shop.')->group(function () { 
 
    Route::get('/products', function () { 
        return view('shop.products'); 
    })->name('products'); 
    // → URI: /shop/products  |  Tên: shop.products 
 
    Route::get('/cart', function () { 
        return view('shop.cart'); 
    })->name('cart'); 
    // → URI: /shop/cart  |  Tên: shop.cart 
 
});
Route::resource('articles', ArticleController::class);
Route::get('/posts/trashed', [PostController::class, 'trashed'])
->name('posts.trashed'); 
Route::patch('/posts/{id}/restore', [PostController::class, 'restore'])
->name('posts.restore');
Route::resource('posts', PostController::class);