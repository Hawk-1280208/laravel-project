<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/admin', function () {
    return view('admin');
});





Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/room', function () {
    return view('pages.room');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/testimonial', function () {
    return view('pages.testimonial');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dash', function () {
    return view('admin-pages.dash');
});
Route::get('/view-feedback', function () {
    return view('pages.view-feedback');
});
Route::get('/feedback', function () {
    return view('pages.feedback');
});
Route::get('/book', function () {
    return view('pages.book');
});

Route::get('/booked-view', function () {
    return view('admin-pages.booked-view');
});

Route::get('/dashboard', function () {
    return view('admin-pages.dashboard');
});




Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::get('/admin-pages.booked-view', [BookingController::class, 'show'])->name('booked-view');


