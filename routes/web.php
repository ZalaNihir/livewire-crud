<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomers;
use App\Livewire\PostIndex;
use App\Livewire\ViewCustomers;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::('/',[]);
Route::get('/',Customers::class)->name('index');
Route::get('/create',CreateCustomer::class)->name('create');
Route::get('customer/{customer}',ViewCustomers::class)->name('view');
Route::get('customer/{customer}/edit',EditCustomers::class)->name('edit');

Route::get('/posts',PostIndex::class)->name('post.index');