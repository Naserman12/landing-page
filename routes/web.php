<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CompanyProfileController;
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\SocialLinkController;
use App\Http\Controllers\Api\ShortLinkController;
use App\Http\Controllers\Api\ContactController;

// التوجيهات العامة (بدون مصادقة)
// Route::get('/company-profile', [CompanyProfileController::class, 'index']);
// Route::get('/achievements', [AchievementController::class, 'index']);
// Route::get('/videos', [VideoController::class, 'index']); // يدعم الفلترة
// Route::get('/social-links', [SocialLinkController::class, 'index']);

// التوجيهات المحمية (تتطلب مصادقة)
Route::middleware('auth:sanctum')->group(function () {
    // Route::post('/contact', [ContactController::class, 'store']);
    // Route::resource('short-links', ShortLinkController::class)->middleware('role:admin'); // للمدير فقط
});

// تسجيل الدخول والتسجيل
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/', function () {
    return view('welcome');
});
