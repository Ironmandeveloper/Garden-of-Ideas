<?php

use App\Http\Controllers\ExploreGardenController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\WateredIdeaController;
use App\Http\Controllers\YourGardenController;
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

// Route::redirect('/', '/sow-your');

Route::get('/', function () {
    // prevent chatting with self
    return redirect("/login");
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('sow-your', [IdeaController::class, 'index'])->name('ideas.create');
    Route::post('/sow', [IdeaController::class, 'store'])->name('ideas.store');
    Route::post('/ideas/refine', [IdeaController::class, 'refineAjax'])->name('ideas.refine');
    Route::get('/explore-the-garden', [ExploreGardenController::class, 'index'])->name('explore.gardens');
    Route::get('/ideas/{id}/analysis', [ExploreGardenController::class, 'getAiAnalysis'])->name('ideas.getAiAnalysis');
    Route::get('/your-garden', [YourGardenController::class, 'index'])->name('your.gardens');
    Route::post('/your-garden/send-ai-message', [YourGardenController::class, 'sendToAi'])->name('your.garden.send');
    Route::post('your-garden/chat-history', [YourGardenController::class, 'getIdeaChatHistory'])->name('your.garden.history');
    Route::get('/your-garden/watered', [YourGardenController::class, 'wateredIdeas'])->name('your.garden.watered');
    Route::get('/your-garden/watered', [YourGardenController::class, 'wateredIdeas'])->name('your.garden.watered');
    Route::post('/ideas/{id}/water', [WateredIdeaController::class, 'store'])->name('ideas.watered');
    Route::get('/chatify/user/{id}', function ($id) {
        // prevent chatting with self
        if (Auth::id() === $id) {
            return redirect('/chatify');
        }

        return redirect("/chatify/$id");
    })->name('user.chatify');

    // OUR MISSION PAGES
    Route::get('/our-mission', function () {
        return view('pages.our-mission.index');
    })->name('our.mission');
    // PRIVACY POLICY PAGES
    Route::get('/privacy-policy', function () {
        return view('pages.privacy-policy.index');
    })->name('privacy.policy');
    // FAQ PAGES
    Route::get('/faq', function () {
        return view('pages.faq.index');
    })->name('faq');
    // CONTACT US PAGES
    Route::get('/contact-us', function () {
        return view('pages.contact-us.index');
    })->name('contact');
    // Community Guidelines PAGES
    Route::get('/community-guidlines', function () {
        return view('pages.community-guidelines.index');
    })->name('community.guidelines');
    // TERMS
    Route::get('/terms-of-service', function () {
        return view('pages.terms.index');
    })->name('terms');

});
