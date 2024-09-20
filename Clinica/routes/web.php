<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MakeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\MedicosController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('doctors', [DoctorsController::class, 'index'])->name('doctors');

Route::get('news', [NewsController::class, 'index'])->name('news');

Route::get('make', [MakeController::class, 'index'])->name('make');
Route::get('make/create', [MakeController::class, 'create'])->name('make.create');
Route::post('make', [MakeController::class, 'store'])->name('make.store');
Route::get('make{make}', [MakeController::class, 'show'])->name('make.show');
Route::get('/make/{make}/edit', [MakeController::class, 'edit'])->name('make.edit');
Route::put('/make/{make}', [MakeController::class, 'update'])->name('make.update');
Route::delete('/make/{meke}', [MakeController::class, 'destroy'])->name('make.destroy');

//adm pacientes

Route::get('/pacientes', [pacientesController::class, 'index'])->name('pacientes');
Route::get('/pacientes/create', [pacientesController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [pacientesController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{paciente}', [pacientesController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{paciente}/edit', [pacientesController::class, 'edit'])->name('pacientes.edit');
Route::put('/pacientes/{paciente}', [pacientesController::class, 'update'])->name('pacientes.update');
Route::delete('/pacientes/{paciente}', [pacientesController::class, 'destroy'])->name('pacientes.destroy');

//agendamentos

Route::get('/agendamentos', [AgendamentosController::class, 'index'])->name('agendamentos');
Route::get('/agendamentos/create', [AgendamentosController::class, 'create'])->name('agendamentos.create');
Route::post('/agendamentos', [AgendamentosController::class, 'store'])->name('agendamentos.store');
Route::get('/agendamentos/{agendamento}', [AgendamentosController::class, 'show'])->name('agendamentoss.show');
Route::get('/agendamentos/{agendamento}/edit', [AgendamentosController::class, 'edit'])->name('agendamentoss.edit');
Route::put('/agendamentos/{agendamento}', [AgendamentosController::class, 'update'])->name('agendamentos.update');
Route::delete('/agendamentos/{agendamento}', [AgendamentosController::class, 'destroy'])->name('agendamentos.destroy');

//medicos

Route::get('/medicos', [MedicosController::class, 'index'])->name('medicos');
Route::get('/medicos/create', [MedicosController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicosController::class, 'store'])->name('medicos.store');
Route::get('/medicos/{medico}', [MedicosController::class, 'show'])->name('medicos.show');
Route::get('/medicos/{medico}/edit', [MedicosController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{medico}', [MedicosController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{medico}', [MedicosController::class, 'destroy'])->name('medicos.destroy');
