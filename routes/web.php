<?php

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
    return view('auth.login');
});
Route::get('/home', 'HomeController@dashboard')->name('home');

/*
|--------------------------------------------------------------------------
| Logging In/Out Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*
|--------------------------------------------------------------------------
| Patient
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'patient', 'as' => 'patient.'], function ()
{
    Route::get('', 'PatientController@index')->name('index');
    Route::get('create', 'PatientController@create')->name('create');
    Route::post('', 'PatientController@store')->name('store');
    Route::post('/datatable', 'patientController@datatable')->name('datatable');
    Route::get('{patient}', 'PatientController@show')->name('show');
    Route::get('{patient}/edit', 'PatientController@edit')->name('edit');
    Route::put('{patient}', 'PatientController@update')->name('update');
    Route::delete('{patient}/destroy', 'PatientController@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Doctor
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'doctor', 'as' => 'doctor.'], function ()
{
    Route::get('', 'DoctorController@index')->name('index');
    Route::get('create', 'DoctorController@create')->name('create');
    Route::post('', 'DoctorController@store')->name('store');
    Route::post('/datatable', 'DoctorController@datatable')->name('datatable');
    Route::get('{doctor}', 'DoctorController@show')->name('show');
    Route::get('{doctor}/edit', 'DoctorController@edit')->name('edit');
    Route::put('{doctor}', 'DoctorController@update')->name('update');
    Route::delete('{doctor}/destroy', 'DoctorController@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Staff
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'staff', 'as' => 'staff.'], function ()
{
    Route::get('', 'StaffController@index')->name('index');
    Route::get('create', 'StaffController@create')->name('create');
    Route::post('', 'StaffController@store')->name('store');
    Route::post('/datatable', 'StaffController@datatable')->name('datatable');
    Route::get('{staff}', 'StaffController@show')->name('show');
    Route::get('{staff}/edit', 'StaffController@edit')->name('edit');
    Route::put('{staff}', 'StaffController@update')->name('update');
    Route::delete('{staff}/destroy', 'StaffController@destroy')->name('destroy');
});


/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'registration', 'as' => 'registration.'], function ()
{
    Route::get('', 'RegistrationController@index')->name('index');
    Route::get('create', 'RegistrationController@create')->name('create');
    Route::post('', 'RegistrationController@store')->name('store');
    Route::post('/datatable', 'RegistrationController@datatable')->name('datatable');
    Route::get('{registration}', 'RegistrationController@show')->name('show');
    Route::get('{registration}/edit', 'RegistrationController@edit')->name('edit');
    Route::put('{registration}', 'RegistrationController@update')->name('update');
    Route::delete('{registration}/destroy', 'RegistrationController@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Appointment
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'appointment', 'as' => 'appointment.'], function ()
{
    Route::get('', 'AppointmentController@index')->name('index');
    Route::get('create', 'AppointmentController@create')->name('create');
    Route::post('', 'AppointmentController@store')->name('store');
    Route::post('/datatable', 'AppointmentController@datatable')->name('datatable');
    Route::get('{appointment}', 'AppointmentController@show')->name('show');
    Route::get('{appointment}/edit', 'AppointmentController@edit')->name('edit');
    Route::put('{appointment}', 'AppointmentController@update')->name('update');
    Route::delete('{appointment}/destroy', 'AppointmentController@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Inpatient
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'inpatient', 'as' => 'inpatient.'], function ()
{
    Route::get('', 'InpatientController@index')->name('index');
    Route::get('create', 'InpatientController@create')->name('create');
    Route::post('', 'InpatientController@store')->name('store');
    Route::post('/datatable', 'InpatientController@datatable')->name('datatable');
    Route::get('{inpatient}', 'InpatientController@show')->name('show');
    Route::get('{inpatient}/edit', 'InpatientController@edit')->name('edit');
    Route::put('{inpatient}', 'InpatientController@update')->name('update');
    Route::delete('{inpatient}/destroy', 'InpatientController@destroy')->name('destroy');
});

Route::group(['prefix' => 'ResetPassword', 'as' => 'ResetPassword.'], function ()
{
    Route::get('', 'ResetPasswordController@index')->name('index');
    Route::get('create', 'ResetPasswordController@create')->name('create');
    Route::post('', 'ResetPasswordController@store')->name('store');
    Route::post('/datatable', 'ResetPasswordController@datatable')->name('datatable');
    Route::get('{appointment}', 'ResetPasswordController@show')->name('show');
    Route::get('{appointment}/edit', 'ResetPasswordController@edit')->name('edit');
    Route::put('{appointment}', 'ResetPasswordController@update')->name('update');
    Route::delete('{appointment}/destroy', 'ResetPasswordController@destroy')->name('destroy');
});