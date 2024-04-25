<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about');
});





Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/lecteur', [LivreController::class, 'index1'])->name('lecteur');
Route::post('/lecteur/traitement', [LivreController::class, 'store1']);


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::controller(LivreController::class)->prefix('products')->group(function () {
    Route::get('', 'index')->name('products');
    Route::get('create', 'create')->name('products.create');
    Route::post('store', 'store')->name('products.store');
    Route::get('show/{id}', 'show')->name('products.show');
    Route::get('edit/{id}', 'edit')->name('products.edit');
    Route::put('edit/{id}', 'update')->name('products.update');
    Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
});
Route::controller(LivreController::class)->prefix('readers')->group(function () {
    Route::get('', 'indexr')->name('readers');
    Route::post('store', 'store')->name('readers.store');
    Route::get('showr/{id}', 'showr')->name('readers.showr');
    Route::delete('destroyr/{id}', 'destroyr')->name('readers.destroyr');
});

Route::get('/indexlivre2', [LivreController::class, 'liste_livre2']);
Route::get('/searchlivre2', [LivreController::class, 'searchlivre2']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile',[App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::middleware('auth')->put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');

    Route::middleware('auth')->get('/users', [AuthController::class, 'index'])->name('users.index');
    // routes/web.php

    Route::get('/users/{id}/edit', [App\Http\Controllers\AuthController::class,'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\AuthController::class,'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\AuthController::class,'destroy'])->name('users.destroy');


    
});


Route::get('/emprunt', [LivreController::class, 'index2']);
Route::get('/emprunt', [LivreController::class, 'createForm']);
Route::post('/emprunt', [LivreController::class, 'storeForm']);

Route::get('/livres_empruntes', [LivreController::class, 'indexEmprunt']);
// Route pour afficher la liste des livres empruntés
Route::get('/livres_empruntes', [LivreController::class, 'liste_empruntes'])->name('liste_empruntes');
// Route pour retourner un livre emprunté
Route::post('/livres/{id}/retourner', [LivreController::class, 'retournerLivre'])->name('retourner_livre');





Route::controller(LivreController::class)->prefix('borrower')->group(function () {
Route::get('','loanList')->name('borrower');
Route::delete('destroyemprunt/{id}','destroyemprunt')->name('borrower.destroyemprunt');
});


Route::get('/', [AuthController::class, 'showRegistrationForm']);

Route::get('/loginhome', [AuthController::class, 'showLoginForm'])->name('loginhome');
Route::post('/loginhome', [AuthController::class, 'loginhome']);
Route::get('/registerhome', [AuthController::class, 'showRegistrationForm'])->name('registerhome');
Route::post('/registerhome', [AuthController::class, 'registerhome']);
Route::get('/logouthome', [AuthController::class, 'logouthome'])->middleware('auth')->name('logouthome');


Route::get('/livres/{id}', [LivreController::class, 'bookshow'])->name('bookDetail.bookshow');

Route::get('/bookDetail', function () {
    return view('bookDetail');
});









