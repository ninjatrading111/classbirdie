<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\backend\UserListController;
use App\Http\Controllers\backend\AddUserController;
use App\Http\Controllers\backend\TransactionController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\WelcomeController;
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
//route login
Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Auth::routes();
Route::prefix('google')->name('google.')->group(function () {
    Route::get('/login', [GoogleController::class,'loginWithGoogle'])->name('login');
    Route::any('/callback/{id?}', [GoogleController::class,'callbackFromGoogle'])->name('callback');
});
Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => 'redirectToRole'], function () {

        Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //--------- profile page ---------//
        Route::get('/user/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/user/profile/getdat', [ProfileController::class, 'getdata'])->name('profile.getdata');
        Route::post('/user/profile/edit', [ProfileController::class, 'profiledit'])->name('profile.edit');

        Route::get('/user/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/user/payment', [PaymentController::class, 'index'])->name('payment');
        Route::get('/user/payment/fetch', [PaymentController::class, 'payWithStripe'])->name('payment.fetch');
    });

    //--------- Admin ---------//
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard');
        Route::get('/subscription', [AdminDashboardController::class,'subscription'])->name('subscription');

        //--------- user list ---------//
        Route::get('/userlist', [UserListController::class,'index'])->name('userlist');
        Route::post('/userlist/pending', [UserListController::class,'pending'])->name('userlist.pending');
        //--------- user add ---------//
        Route::get('/adduser/{id?}', [AddUserController::class,'index'])->name('adduser');
        Route::post('/adduser/saveuser', [AddUserController::class,'saveuser'])->name('adduser.saveuser');
        //--------- transaction history ---------//
        Route::get('/transaction', [TransactionController::class,'index'])->name('trancation');
        //--------- completeed user status ---------//
        Route::get('/complete', [TransactionController::class,'complete'])->name('complete');
        //--------- weekly transaction ---------//
        Route::get('/weekly', [TransactionController::class,'weekly'])->name('weekly');
        //--------- weekly transaction ---------//
        Route::get('/monthly', [TransactionController::class,'monthly'])->name('monthly');
    });

});
