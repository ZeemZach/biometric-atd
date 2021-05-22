<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', function(){
    if(auth()->check()){            
        return redirect(route('dashboard'));
    }
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::get('/faculty/register',[RegisterController::class, 'facultyForm'])->name('faculty_register');

Route::get('/faculty/login', [LoginController::class, 'facultyForm'])->name('faculty_login');

Route::get('/student/register', [RegisterController::class, 'studentForm'])->name('student_register');

Route::get('/student/login', [LoginController::class, 'studentForm'])->name('student_login');

// Route::get('/login', function(){
//     return redirect(route('home'));
// });

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'student'], function () {
                Route::get('/list', [StudentController::class, 'index'])->name('student_details');
    });

    Route::get('/todays-attendance', [AttendanceController::class, 'todaysAttendance'])->name('todays_attendance');
    
    Route::get('/everyday-attendance', [AttendanceController::class, 'everydayAttendance'])->name('everyday_attendance');
});