<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PropertyController;

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
    return view('layout.home');
});

// Route::get('/Home', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('/Index', function () {
    return view('layout.master');
});

Route::get('/Home', function () {
    return view('layout.home');
});

// Route::get('/Registration', function(){
//      return view('Registration.regis-form');
// });

// Route::get('/RegistrationList', function(){
//     return view('Registration.regis-list');
// });

Route::get('/Apartments', function(){
    return view('Sale.apartmentForSale');
});
Route::get('/Lands', function(){
    return view('Sale.landForSale');
});

Route::get('/Contact', function(){
    return view('Registration.contactForm');
});

// Route::get('/Property', function(){
//     return view('Sale.propertyDetails');
// });

Route::get('/Admin', function(){
    return view('admin.adminRegisForm');
});
Route::get('/Admin/list', function(){
    return view('admin.adminList');
});

Route::get('/Admin/Property', function(){
    return view('admin.addPropertyForm');
});

Route::get('/Registration/list', [RegistrationController::class, 'showRegistrations']);
Route::get('/Registration/add', [RegistrationController::class, 'addRegistration'])->name('addRegistration');
Route::get('/Contact Us', [RegistrationController::class, 'showContactUS'])->name('showContactUS');
Route::get('/Contact Us', [RegistrationController::class, 'showContactUS'])->name('showContactUS');
//Route::get('/courses/{id}', [CourseController::class, 'showOneCourse'])->name('viewCourse');

Route::prefix('/Property')->group(function(){
    Route::get('/', [PropertyController::class, 'showProperties'])->name('showAllProperties');
    Route::get('/add', [PropertyController::class, 'addProperty'])->name('addProperty');
    Route::get('/ViewProperty', [PropertyController::class, 'showOneProperty'])->name('showOneProperty');
    Route::get('/Apartments', [PropertyController::class, 'showApartmentsForSale'])->name('showApartmentsForSale');
    Route::get('/Lands', [PropertyController::class, 'showLandsForSale'])->name('showLandsForSale');
    Route::get('/{id}/edit', [PropertyController::class, 'showEditPropertyPage'])->name('showEditPropertyPage');
    //Route::get('/{id}', [PropertyController::class, 'showOneProperty'])->name('showStudentDetails');
    
    Route::post('/', [PropertyController::class, 'showProperties'])->name('saveProperty');
    Route::put('/', [PropertyController::class, 'showProperties'])->name('updateProperty');
    Route::patch('/', [PropertyController::class, 'showProperties']);

});
