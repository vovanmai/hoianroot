<?php

use App\Mail\SendContactMail;
use App\Mail\SendMakeReservationMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('', function () {
    return view('user.home', ['showPrice' => true, 'isHome' => true]);
})->name('home');

Route::get('about.html', function () {
    return view('user.about', ['showPrice' => true]);
})->name('about');

Route::get('contact.html', function () {
    return view('user.contact');
})->name('contact');

Route::get('make-reservation.html', function () {
    return view('user.make_reservation');
})->name('make-reservation');


Route::get('gallery.html', [App\Http\Controllers\User\GalleryController::class, 'index'])->name('gallery');


Route::post('reservations', function () {
    request()->validate([
        'full_name' => 'required|string|max:100',
        'phone' => 'required|regex:/^[0-9]{6,15}$/',
        'email' => 'nullable|email|max:255',
        'number_of_guests' => 'required|integer|min:1',
        'date' => 'required||date_format:Y-m-d|after_or_equal:today',
        'time' => 'required|string|max:10',
        'note' => 'nullable|string|max:255',
    ]);

    $to = config('app.admin_emails', []);

    if ($to) {
        Mail::to($to)
            ->cc(['vovanmai.dt3@gmail.com'])
            ->send(new SendMakeReservationMail(request()->all()));
    }

    return response()->json([
        'success' => true,
        'message' => 'Reservation made successfully.',
    ]);
})->name('reservation.store');


Route::post('contact', function () {
    request()->validate([
        'full_name' => 'required|string|max:100',
        'phone' => 'required|regex:/^[0-9]{6,15}$/',
        'message' => 'required|string|max:255',
    ]);

    $to = config('app.admin_emails', []);

    if ($to) {
        Mail::to($to)->send(new SendContactMail(request()->all()));
    }

    return response()->json([
        'success' => true,
        'message' => 'Contact form submitted successfully.',
    ]);
})->name('contact.store');
