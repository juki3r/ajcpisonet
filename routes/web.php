<?php

use App\Mail\InquireMail;
use App\Mail\MyMailingServices;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AJCController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllclientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LinkaccountCoctroller;

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

Route::get('/', [AJCController::class, 'homepage']);
Route::get('/applynow', [AJCController::class, 'applynow'])->name('applynow');
Route::put('/applynow', [AJCController::class, 'applynow_store'])->name('applynow_store');
Route::get('/applynow800', [AJCController::class, 'applynow800'])->name('applynow800');
Route::get('/applynow1000', [AJCController::class, 'applynow1000'])->name('applynow1000');
Route::get('/applynow1300', [AJCController::class, 'applynow1300'])->name('applynow1300');
Route::get('/applynow1500', [AJCController::class, 'applynow1500'])->name('applynow1500');
Route::get('/jupiterarcenas', [AJCController::class, 'jupiterarcenas'])->name('jupiterarcenas');

Route::get('/automation', [AJCController::class, 'automation'])->name('automation');

Route::middleware(['auth', 'verified'])->group(function () {

    // Mailing
    Route::get('clients/{email}/{fullname}/{accountnumber}', function($email, $fullname, $accountnumber){
        //Send email to client Bill Reminder
        Mail::to($email)->send (new MyMailingServices($fullname, $email, $accountnumber));
        return redirect()->back()->with('status', 'Bill reminder email sent');
    })->name('sendemail');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


// Mail Contact US
Route::get('sendinquire', [AJCController::class, 'sendemailinquire'])->name('sendemailinquire');









