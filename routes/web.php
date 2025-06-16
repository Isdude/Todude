<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CompletedController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/completed',[CompletedController::class, 'index'])->name('completed.index');

Route::get('main', function () {
    return view('todos.main');
    })->name('main');



Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'create'])->name('login');

    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisController::class, 'create'])->name('register');

    Route::post('/register', [RegisController::class, 'store'])->name('register.store');

});

Route::middleware('auth')->group(function(){
    // Route::get('todos', function(){
    //     $user = auth()->user();
    //     return view('todos.index', compact('user'));
    // })->name('todos.index');
Route::get('/todos', [TodosController::class, 'index'])->name('todos.index');
Route::get('/create', [TodosController::class, 'create'])->name('todos.create');
Route::post('/create', [TodosController::class, 'store'])->name('todos.store');
Route::get('/todos/{user}/edit', [TodosController::class, 'edit'])->name('todos.edit');
Route::put('/todos/{user}', [TodosController::class, 'update'])->name('todos.update');
Route::delete('/todos/{id}', action: [TodosController::class, 'destroy'])->name('todos.destroy');
Route::put('/todos/{id}/status', [TodosController::class, 'updateStatus'])->name('todos.status');

    Route::post('logout', [LoginController::class,
    'destroy'])->name('logout');

});

// Route::middleware('auth')->group(function(){
//     Route::get('Admin',function(){
//         $user = auth()->user();
//         return view('dasboard.index',compact('user'));
//     })->name('dashboard')->middleware('auth');
//     Route::resource('post',postController::class);
//     Route::post('logout',[LoginController::class,'destroy'])->name('logout');
//     Route::get('/pamerkan',[EventController::class, 'create'])->name('Event');

//     Route::Get('adminTiketinAja',function(){
//         if(! Gate::allows('just-admin')){
//             abort(403);
//         }
//         return 'hallo admin';
//     });
// });

// Route::get('/home', [LandingController::class, 'index'])->name('home');
// Route::post('/home', [LandingController::class, 'store']);
