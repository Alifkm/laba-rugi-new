<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;

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

Route::controller(DashboardController::class)->group(function() {
  Route::get('/', 'index')->middleware('auth')->name('dashboard.index');
  Route::get('/report', 'index')->middleware('auth')->name('dashboard.index'); // dashboard
  Route::post('/report', 'filter')->middleware('auth')->name('dashboard.filter'); // filter dashboard
  Route::get('/report/chart', 'chartIndex')->middleware('auth')->name('chart.index'); // chart
  Route::post('/report/chart', 'chartFilter')->middleware('auth')->name('chart.filter'); // filter chart
});


// ADMIN CONTROLLER
Route::controller(AdminController::class)->group(function() {
  Route::get('/admin', 'index')->middleware('auth')->name('admin.index'); // get all admin
  Route::get('/admin/create', 'create')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.create'); // create admin form
  Route::post('/admin', 'store')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.store'); // store admin data
  Route::get('/admin/{admin}/edit', 'edit')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.edit'); // show admin edit form
  Route::put('/admin/{admin}', 'update')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.udpate'); // update admin data
  Route::get('/admin/{admin}', 'destroy')->middleware(['thisIsSuperAdmin', 'auth'])->name('admin.delete'); // delete admin data
});



// PROJECT CONTROLLER
Route::controller(ProjectController::class)->group(function() {
  Route::get('/project', 'index')->middleware('auth')->name('project.index'); // get all project
  Route::get('/project/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('project.create'); // create project form
  Route::post('/project', 'store')->middleware(['thisIsAdmin', 'auth'])->name('project.store'); // store project data
  Route::get('/project/{project}/edit', 'edit')->middleware('auth')->name('project.edit'); // show project edit form
  Route::put('/project/{project}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('project.update'); // update project data
  Route::get('/project/{project}', 'destroy')->middleware(['thisIsAdmin', 'auth'])->name('project.delete'); // delete project data
});



// EMPLOYEE CONTROLLER
Route::controller(EmployeeController::class)->group(function() {
  Route::get('/employee', 'index')->middleware('auth')->name('employee.index'); // get all employee
  Route::get('/employee/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('employee.create'); // create employee form
  Route::post('/employee', 'store')->middleware(['thisIsAdmin', 'auth'])->name('employee.store'); // store employee data
  Route::get('/employee/{employee}/edit', 'edit')->middleware('auth')->name('employee.edit'); // show employee edit form
  Route::put('/employee/{employee}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('employee.update'); // update employee data
  Route::get('/employee/{employee}', 'destroy')->middleware(['thisIsAdmin', 'auth'])->name('employee.delete'); // delete employee data
});



// INCOME CONTROLLER
Route::controller(IncomeController::class)->group(function() {
  Route::get('/income', 'index')->middleware('auth')->name('income.index'); // all income
  Route::get('/income/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('income.create'); // create income form 
  Route::post('/income', 'store')->middleware(['thisIsAdmin', 'auth'])->name('income.store'); // store income data
  Route::get('/income/{income}/edit', 'edit')->middleware('auth')->name('income.edit'); // show income edit form
  Route::put('/income/{income}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('income.update'); // update income data
  Route::post('/income/request-delete', 'requestDelete')->middleware(['thisIsAdmin', 'auth'])->name('income.request-delete'); // approve transaction
  // Route::get('/income/{income}', 'destroy')->middleware(['thisIsAdmin', 'auth'])->name('income.delete'); // delete income data
});



// OUTCOME CONTROLLER
Route::controller(OutcomeController::class)->group(function() {
  Route::get('/outcome', 'index')->middleware('auth')->name('outcome.index'); // all outcome
  Route::get('/outcome/create', 'create')->middleware(['thisIsAdmin', 'auth'])->name('outcome.create'); // create outcome form
  Route::post('/outcome', 'store')->middleware(['thisIsAdmin', 'auth'])->name('outcome.store'); // store outcome data
  Route::get('/outcome/{outcome}/edit', 'edit')->middleware('auth')->name('outcome.edit'); // show outcome edit form
  Route::put('/outcome/{outcome}', 'update')->middleware(['thisIsAdmin', 'auth'])->name('outcome.update'); // update outcome data
  Route::post('/outcome/request-delete', 'requestDelete')->middleware(['thisIsAdmin', 'auth'])->name('outcome.request-delete'); // approve transaction
  // Route::get('/outcome/{outcome}', 'destroy')->middleware('auth')->name('outcome.delete'); // delete outcome data
});


// APPROVE CONTROLLER
Route::controller(ApprovalController::class)->group(function() {
  Route::get('/approval', 'index')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.index'); // get all approval
  Route::post('/approval/approve', 'approveTransaction')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.approved'); // approve transaction
  Route::post('/approval/decline', 'declineTransaction')->middleware(['thisIsSuperAdmin', 'auth'])->name('approval.decline'); // decline transaction
});


// CHANGE PASSWORD CONTROLLER 
Route::controller(ChangePasswordController::class)->group(function() {
  Route::get('/change-password', 'index')->middleware('auth')->name('changePassword.index'); // show password
  Route::post('/change-password', 'changePassword')->middleware('auth')->name('changePassword.update'); // change password
});

Auth::routes();



// Route::controller(UserController::class)->group(function() {
//   Route::get('/user', 'index')->name('user.index'); // all user
//   Route::get('/user/create', 'create')->name('user.create'); // create user form
//   Route::post('/user', 'store')->name('user.store'); // store user data
//   Route::get('/user/{user}/edit', 'edit')->name('user.edit'); // show user edit form
//   Route::put('/user/{user}', 'update')->name('user.update'); // update user data
//   Route::get('/user/{user}', 'destroy')->name('user.delete'); // delete user data
// });


  // Route::get('/chart/{year?}', 'chart')->middleware('auth')->name('chart.index'); // filter chart