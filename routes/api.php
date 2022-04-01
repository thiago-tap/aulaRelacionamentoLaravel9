<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;

//Usuário
// Um usuário, inicialmente, tem um endereço
Route::get('/users', [UserController::class, 'index']);
// Buscar um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);
// Inserir um novo usuário
Route::post('/users', [UserController::class, 'insert']);


//Endereço
// Buscar endereços
Route::get('/address', [AddressController::class, 'index']);
// Buscar endereço pelo ID
Route::get('/address/{id}', [AddressController::class, 'findOne']);
// Adicionar um novo endereço
Route::post('/address', [AddressController::class, 'insert']);


//Invoices
Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);
Route::post('/invoices', [InvoiceController::class, 'createInvoice']);


