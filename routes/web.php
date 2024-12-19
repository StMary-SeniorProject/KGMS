
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

//Dashboard Redirect
 Route::get('/home', [HomeController::class, 'index']
   )->name('home');

Route::resource('accounts', AccountController::class);

//Account Management Route
Route::get('/all-users', [AccountController::class, 'index'])->name('account.show');

Route::patch('/accounts/{user}', [AccountController::class, 'update'])->name('account.update');
