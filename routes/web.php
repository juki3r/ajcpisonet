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









