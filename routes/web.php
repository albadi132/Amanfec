<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CareerJobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\ClientPartnerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Models\News;

require __DIR__.'/auth.php';

// الصفحة الرئيسية العامة (للزوار)
Route::get('/',  [HomeController::class, 'index'])->name('home');
Route::get('/AboutUs',  [HomeController::class, 'AboutUs'])->name('AboutUs');
Route::get('/Services',  [HomeController::class, 'Services'])->name('Services');

Route::get('/ContactUs',  [HomeController::class, 'ContactUs'])->name('ContactUs');
Route::post('/contact', [ContactSubmissionController::class, 'store'])->name('contact.submit');

Route::get('/Projects',  [HomeController::class, 'Projects'])->name('Projects');

Route::get('/Team',  [HomeController::class, 'Team'])->name('Team');
Route::get('/Team/{id}', [TeamMemberController::class, 'publicTeamDetails'])->name('team.details');

Route::get('/News',  [HomeController::class, 'News'])->name('News');
Route::get('/News/{slug}', [NewsController::class, 'show'])->name('news.details');

Route::get('/Careers',  [HomeController::class, 'Careers'])->name('Careers');
Route::get('/Careers/{id}', [CareerJobController::class, 'show'])->name('careers.show');
Route::get('/careers/{id}/apply', [CareerJobController::class, 'apply'])->name('career.apply');
Route::post('/Careers/apply', [CareerJobController::class, 'submitApplication'])->name('careers.apply.submit');

Route::get('/Services/Code-Consulting',  [ServicesController::class, 'CodeConsulting'])->name('Code-Consulting');
Route::get('/Services/Fire-Protection-Design', [ServicesController::class, 'FireProtectionDesign'])->name('Fire-Protection-Design');
Route::get('/Services/Modeling-Services', [ServicesController::class, 'ModelingServices'])->name('Modeling-Services');
Route::get('/Services/Construction-and-Site-Services', [ServicesController::class, 'ConstructionAndSiteServices'])->name('Construction-and-Site-Services');
Route::get('/Services/Testing-and-Commissioning', [ServicesController::class, 'TestingAndCommissioning'])->name('Testing-and-Commissioning');
Route::get('/Services/Surveys-and-Risk-Assessments', [ServicesController::class, 'SurveysAndRiskAssessments'])->name('Surveys-and-Risk-Assessments');


Route::get('/Projects/Fire-Protection-Life-Safety-Riyadh', [ProjectsController::class, 'FireProtectionLifeSafetyRiyadh'])->name('Fire-Protection-Life-Safety-Riyadh');
Route::get('/Projects/Life-Safety-System-Review-Riyadh', [ProjectsController::class, 'LifeSafetySystemReviewRiyadh'])->name('Life-Safety-System-Review-Riyadh');
Route::get('/Projects/Fire-Safety-Design-Review-Jeddah', [ProjectsController::class, 'FireSafetyDesignReviewJeddah'])->name('Fire-Safety-Design-Review-Jeddah');
Route::get('/Projects/Multi-Stage-Fire-Safety-Riyadh', [ProjectsController::class, 'MultiStageFireSafetyRiyadh'])->name('Multi-Stage-Fire-Safety-Riyadh');
Route::get('/Projects/Fire-Safety-Smoke-Modeling-AlUla', [ProjectsController::class, 'FireSafetySmokeModelingAlUla'])->name('Fire-Safety-Smoke-Modeling-AlUla');
Route::get('/Projects/Fire-Life-Safety-Management-Makkah', [ProjectsController::class, 'FireLifeSafetyManagementMakkah'])->name('Fire-Life-Safety-Management-Makkah');

// توجيه المستخدم مباشرة إلى لوحة التحكم بعد تسجيل الدخول

Route::get('/dashboard',  [HomeController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// صفحة الملف الشخصي
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// مجموعة مسارات لوحة التحكم
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {

    // مثال: /dashboard/team-members
    Route::resource('team-members', TeamMemberController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('career-jobs', CareerJobController::class);
    Route::resource('job-applications', JobApplicationController::class)->only(['index', 'show', 'destroy']);
    Route::resource('news', NewsController::class);
    Route::resource('contact-submissions', ContactSubmissionController::class)->only(['index', 'show', 'destroy']);
    Route::resource('client-partners', ClientPartnerController::class);
    Route::resource('departments', DepartmentController::class)->middleware(['auth']);

});

Route::middleware(['auth'])->group(function () {
    Route::resource('departments', \App\Http\Controllers\DepartmentController::class);
});

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('team-members', \App\Http\Controllers\TeamMemberController::class);
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('news', NewsController::class);
});

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('client-partners', \App\Http\Controllers\ClientPartnerController::class);
});

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('career-jobs', \App\Http\Controllers\CareerJobController::class);
});

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('contact-submission', \App\Http\Controllers\ContactSubmissionController::class);
});

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('job-applications', \App\Http\Controllers\JobApplicationController::class);
});

Route::get('/dashboard/job-applications/{jobApplication}/download-cv', [JobApplicationController::class, 'downloadCv'])
    ->name('dashboard.job-applications.downloadCv')
    ->middleware(['auth']);


    Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('users', \App\Http\Controllers\UserController::class);
});

Route::patch('users/{user}/toggle', [\App\Http\Controllers\UserController::class, 'toggle'])->name('users.toggle');
