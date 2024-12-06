<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::match(['get', 'post'], '/contact', function (Request $request) {
    if ($request->isMethod('post')) {
        // Procesa los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
        ]);

        // Aquí puedes enviar un correo, guardar en la base de datos, etc.
        return response()->json(['message' => 'Formulario enviado correctamente'], 200);
    }

    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources([
        'users' => UserController::class,
    ]);    

    Route::post('users/search', [UserController::class, 'search']);   
    
});

require __DIR__.'/auth.php';
