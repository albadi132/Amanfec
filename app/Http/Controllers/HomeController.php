<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\News;
use App\Models\Location;
use App\Models\Department;
use App\Models\CareerJob;
use App\Models\ContactSubmission;
use App\Models\JobApplication;
use App\Models\ClientPartner;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Mews\Purifier\Facades\Purifier;

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

public function Careers(Request $request)
{
    $query = CareerJob::query()
        ->with(['department:id,name','location:id,country,city'])
        ->where('status', 'active')
        ->whereDate('close_at', '>=', Carbon::today());

    // فلاتر
    if ($search = $request->get('q'))      $query->where('title','like',"%{$search}%");
    if ($cat = $request->get('category'))  $query->where('category',$cat);
    if ($work = $request->get('work'))     $query->where('work_arrangement',$work);
    if ($dept = $request->get('dept'))     $query->where('department_id',$dept);
    if ($loc  = $request->get('loc'))      $query->where('location_id',$loc);

    $jobs = $query->orderBy('close_at','asc')->paginate(9)->withQueryString();

    // إرجاع جزء HTML فقط للـAJAX
    if ($request->ajax()) {
        $html = view('web.partials.jobs_grid', compact('jobs'))->render();
        return response()->json(['html' => $html]);
    }

    // بيانات القوائم للفلاتر
    $activeLocationIds = CareerJob::where('status','active')
        ->whereDate('close_at','>=', Carbon::today())
        ->whereNotNull('location_id')->distinct()->pluck('location_id');

    $locations   = Location::whereIn('id', $activeLocationIds)
        ->orderBy('country')->orderBy('city')->get(['id','country','city']);
    $departments = Department::orderBy('name')->get(['id','name']);

    $categories = [
        'experienced_professionals' => 'Experienced Professionals',
        'early_career_internships'  => 'Early Career + Internships',
    ];
    $workOptions = ['on_site'=>'On-site','hybrid'=>'Hybrid','remote'=>'Remote'];

    return view('web.Careers', compact('jobs','locations','departments','categories','workOptions'));
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

    public function offices(Request $request)
    {
         $q = trim((string) $request->get('q'));
    $country = trim((string) $request->get('country'));

    $locations = \App\Models\Location::query()
        ->when($country !== '', fn($qry) => $qry->where('country', 'like', "%{$country}%"))
        ->when($q !== '', function ($qry) use ($q) {
            $qry->where(function ($sub) use ($q) {
                $sub->where('city', 'like', "%{$q}%")
                    ->orWhere('country', 'like', "%{$q}%")
                    ->orWhere('building', 'like', "%{$q}%")
                    ->orWhere('district', 'like', "%{$q}%")
                    ->orWhere('street', 'like', "%{$q}%")
                    ->orWhere('postal_code', 'like', "%{$q}%");
            });
        })
        ->orderBy('country')->orderBy('city')
        ->paginate(9)->withQueryString();

    $countries = \App\Models\Location::query()->select('country')->distinct()->orderBy('country')->pluck('country');

    // لو الطلب AJAX رجّع فقط جزء البطاقات + الـpagination
    if ($request->ajax()) {
        $html = view('web.partials.offices_grid', compact('locations'))->render();
        return response()->json([
            'html'  => $html,
            'total' => $locations->total(),
        ]);
    }

    return view('web.offices', compact('locations','countries','q','country'));
    }

}
