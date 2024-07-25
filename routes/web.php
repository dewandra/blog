<?php

use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\ContactPage;
use App\Livewire\FaqPage;
use App\Livewire\Homepage;
use App\Livewire\ServiceDetailPage;
use App\Livewire\ServicePage;
use App\Livewire\ShowPage;
use App\Livewire\TeamPage;
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

ROute::get('/',Homepage::class)->name('home');
ROute::get('/services',ServicePage::class)->name('services');
ROute::get('/service/{id}',ServiceDetailPage::class)->name('service');
ROute::get('/teams',TeamPage::class)->name('teams');
ROute::get('/blogs',BlogPage::class)->name('blogs');
Route::get('/blog/{id}',BlogDetailPage::class)->name('blog');
Route::get('/faqs',FaqPage::class)->name('faqs');
Route::get('/page/{id}',ShowPage::class)->name('page');
Route::get('/contacts',ContactPage::class)->name('contact');
