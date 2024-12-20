<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BazaarController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\OpcerController;
use App\Http\Controllers\ValorantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UIUXDesignController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\PhotographyController;
use App\Http\Controllers\BusinessPlanController;
use App\Http\Controllers\EduVideoController;
use App\Http\Controllers\DesignPosterController;
use App\Http\Controllers\EssayCompeController;
use App\Http\Controllers\MobileLegendsController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthenticateAdminController;

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

Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("competition", [CompetitionController::class, "index"])->name("competitions");
Route::get("competition/{competition}", [CompetitionController::class, "self_page"])->name("competition");

Route::get("seminar", [SeminarController::class, "index"])->name("seminar");

Route::get("tiket", [TiketController::class, "index"])->name("tiket");

Route::get("bazaar", [BazaarController::class, "index"])->name("bazaar");

Route::get("opcer", [OpcerController::class, "index"])->name("opcer");

Route::middleware('auth')->group(function () {


    Route::get('dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::post('dashboard', [DashboardController::class, "store"]);
});

Route::middleware('auth', 'data.complete')->group(function () {
    Route::get('registration/photography', [PhotographyController::class, "create"])->name('registration.photography');
    Route::post('registration/photography', [PhotographyController::class, "registration"]);
    Route::get('submission/photography', [PhotographyController::class, "submission_create"])->name('submission.photography');
    Route::post('submission/photography', [PhotographyController::class, "submission"]);

    // Route::get('registration/businessplan', [BusinessPlanController::class, "create"])->name('registration.business.plan');
    // Route::post('registration/businessplan', [BusinessPlanController::class, "registration"]);
    // Route::get('submission/businessplan', [BusinessPlanController::class, "submission_create"])->name('submission.business.plan');
    // Route::post('submission/businessplan', [BusinessPlanController::class, "submission"]);

    Route::get('registration/designposter', [DesignPosterController::class, "create"])->name('registration.design.poster');
    Route::post('registration/designposter', [DesignPosterController::class, "registration"]);
    Route::get('submission/designposter', [DesignPosterController::class, "submission_create"])->name('submission.design.poster');
    Route::post('submission/designposter', [DesignPosterController::class, "submission"]);

    Route::get('registration/essaycompe', [EssayCompeController::class, "create"])->name('registration.essay.compe');
    Route::post('registration/essaycompe', [EssayCompeController::class, "registration"]);
    Route::get('submission/essaycompe', [EssayCompeController::class, "submission_create"])->name('submission.essay.compe');
    Route::post('submission/essaycompe', [EssayCompeController::class, "submission"]);

    // Route::get('registration/eduvideo', [EduVideoController::class, "create"])->name('registration.edu.video');
    // Route::post('registration/eduvideo', [EduVideoController::class, "registration"]);
    // Route::get('submission/eduvideo', [EduVideoController::class, "submission_create"])->name('submission.edu.video');
    // Route::post('submission/eduvideo', [EduVideoController::class, "submission"]);

    Route::get('registration/uiuxdesign', [UIUXDesignController::class, "create"])->name('registration.uiux.design');
    Route::post('registration/uiuxdesign', [UIUXDesignController::class, "registration"]);
    Route::get('submission/uiuxdesign', [UIUXDesignController::class, "submission_create"])->name('submission.uiux.design');
    Route::post('submission/uiuxdesign', [UIUXDesignController::class, "submission"]);

    Route::get('registration/valorant', [ValorantController::class, "create"])->name('registration.valorant');
    Route::post('registration/valorant/solo', [ValorantController::class, "registration_solo"])->name('registration.valorant.solo');
    Route::post('registration/valorant/team', [ValorantController::class, "registration_team"])->name('registration.valorant.team');

    Route::get('registration/mobilelegends', [MobileLegendsController::class, "create"])->name('registration.mobile.legends');
    Route::post('registration/mobilelegends', [MobileLegendsController::class, "registration"]);

    Route::get('registration/seminar', [SeminarController::class, "create"])->name('registration.seminar');
    Route::post('registration/seminar', [SeminarController::class, "registration"]);

    Route::get('registration/tiket', [TiketController::class, "create"])->name('registration.tiket');
    Route::post('registration/tiket', [TiketController::class, "registration"]);
});



Route::middleware('guest:admin')->group(function () {
    Route::get("sifest2024/admin", [AuthenticateAdminController::class, "create"])->name("admin.login");
    Route::post("sifest2024/admin", [AuthenticateAdminController::class, "store"]);
});

Route::middleware('auth:admin')->group(function () {
    Route::post("sifest2024/admin/logout", [AuthenticateAdminController::class, "logout"])->name("admin.logout");

    Route::get("sifest2023/admin/user/{id}", [AdminController::class, "get_dataById"])->name("get_dataById");

    Route::get("sifest2024/admin/user", [AdminController::class, "create"])->name("admin.user");
    Route::post("sifest2024/admin/user", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/user", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/photography", [AdminController::class, "create"])->name("admin.photography");
    Route::post("sifest2024/admin/photography", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/photography", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/designposter", [AdminController::class, "create"])->name("admin.design.poster");
    Route::post("sifest2024/admin/designposter", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/designposter", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/essaycompe", [AdminController::class, "create"])->name("admin.essay.compe");
    Route::post("sifest2024/admin/essaycompe", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/essaycompe", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/uiuxdesign", [AdminController::class, "create"])->name("admin.uiux.design");
    Route::post("sifest2024/admin/uiuxdesign", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/uiuxdesign", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/valorant/{type}", [AdminController::class, "create"])->name("admin.valorant");
    Route::post("sifest2024/admin/valorant/{type}", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/valorant/{type}", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/mobilelegends", [AdminController::class, "create"])->name("admin.mobile.legends");
    Route::post("sifest2024/admin/mobilelegends", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/mobilelegends", [AdminController::class, "delete"]);

    Route::get("sifest2024/admin/seminar", [AdminController::class, "create"])->name("admin.seminar");
    Route::post("sifest2024/admin/seminar", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/seminar", [AdminController::class, "delete"]);
    Route::post('registration/seminar/ots', [SeminarController::class, "registrationOTS"])->name("registrationOTS.seminar");

    Route::get("sifest2024/admin/tiket", [AdminController::class, "create"])->name("admin.tiket");
    Route::post("sifest2024/admin/tiket", [AdminController::class, "verification"]);
    Route::delete("sifest2024/admin/tiket", [AdminController::class, "delete"]);
    Route::post('registration/tiket/ots', [TiketController::class, "registrationOTS"])->name("registrationOTS.tiket");

    Route::get("sifest2024/admin/marketing", [AdminController::class, "marketing"])->name("admin.marketing");

});

require __DIR__.'/auth.php';
