<?php

use App\Http\Controllers\MenuItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// openbare pagina's
Route::get('/', fn () => view('home'))->name('home');
Route::get('/menu', [MenuItemController::class, 'public'])->name('menu');
Route::view('/contact', 'contact')->name('contact');
Route::get('/menu', [PostController::class, 'menu'])->name('menu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Contactpagina tonen
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Formulier versturen
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');


// inlogfunctionaliteit (Breeze regelt routes)
require __DIR__.'/auth.php';

// backend CRUD (alleen voor ingelogde users)
Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard/menu-items', MenuItemController::class)->except(['show']);
});


// Alleen ingelogde gebruikers kunnen een gerecht toevoegen
Route::get('/menu/create', [MenuItemController::class, 'create'])->middleware('auth')->name('menu.create');
Route::post('/menu', [MenuItemController::class, 'store'])->middleware('auth')->name('menu.store');

Route::middleware(['auth'])->group(function () {
    // Route voor het formulier om een nieuwe post toe te voegen
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

    // Route om de post daadwerkelijk op te slaan
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});

Route::middleware(['auth'])->group(function () {
    // Nieuwe post maken
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});


Route::middleware(['auth'])->group(function () {
    // Route voor het maken van een nieuwe post
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Route voor bewerken van een post (edit)
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');

    // Route voor het maken van een nieuwe post
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});


Route::middleware(['auth'])->group(function () {
    // Route voor dashboard (alle posts)
    Route::get('/dashboard', [PostController::class, 'index'])->name('posts.index'); // Dit maakt de posts.index route
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});
