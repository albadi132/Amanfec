<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\News;
use App\Models\CareerJob;
use App\Models\ContactSubmission;
use App\Models\JobApplication;
use App\Models\ClientPartner;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function index()
    {

    $partners = ClientPartner::all();

    $teamMembers = TeamMember::where('show_on_homepage', true)
        ->where('status', 'active')
        ->orderBy('display_order')
        ->limit(4)
        ->get();

    $latestNews = News::orderByDesc('published_at')
        ->limit(3)
        ->get();

    return view('welcome', compact('partners', 'teamMembers', 'latestNews'));
    }


    public function AboutUs()
    {
         return view('web.AboutUs');
    }


    public function Services()
    {
       return view('web.Services');
    }


    public function ContactUs()
    {
        return view('web.ContactUs');
    }


    public function Projects()
    {
        return view('web.Projects');
    }

    /**
     * Update the specified resource in storage.
     */
    public function Team()
    {
            $teamMembers = TeamMember::where('status', 'active')
        ->orderBy('display_order')
        ->get(['id', 'name', 'title', 'photo']);



       return view('web.Team', compact('teamMembers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function News()
    {
           $news = News::orderBy('published_at', 'desc')
                ->paginate(9); // 9 أخبار لكل صفحة

    return view('web.News', compact('news'));
    }

    public function Careers()
    {
              $jobs = CareerJob::where('status', 'active')
        ->whereDate('close_at', '>=', Carbon::today())
        ->orderBy('close_at', 'asc')
        ->get();

    return view('web.Careers', compact('jobs'));
    }

      public function Dashboard()
    {
      $activeJobsCount = CareerJob::where('close_at', '>', now())->count();
    $applicantsCount = JobApplication::count();
    $contactsTodayCount = ContactSubmission::whereDate('created_at', Carbon::today())->count();
    $totalContacts = ContactSubmission::count();

// Prepare data for chart (last 7 days)
    $contactsByDate = ContactSubmission::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

    $dates = $contactsByDate->pluck('date')->toArray();
    $counts = $contactsByDate->pluck('total')->toArray();

    return view('dashboard.index', compact(
        'activeJobsCount',
        'applicantsCount',
        'contactsTodayCount',
        'totalContacts',
        'dates',
        'counts'
    ));
    }

}
