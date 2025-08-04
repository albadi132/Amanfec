<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class ContactSubmissionController extends Controller
{
    /**
     * Display a listing of contact form submissions.
     */
public function index(Request $request)
{
    if ($request->ajax()) {
        $data = ContactSubmission::select(['id', 'full_name', 'email', 'phone', 'subject', 'created_at']);

        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.contact-submission.show', $row->id) . '" class="btn btn-sm btn-info">View</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('dashboard.contact_submissions.index');
}

public function show($id)
{
    $contactSubmission = ContactSubmission::findOrFail($id);
    return view('dashboard.contact_submissions.show', compact('contactSubmission'));
}
    /**
     * Remove the specified submission from storage.
     */
    public function destroy(ContactSubmission $contactSubmission)
    {
        $contactSubmission->delete();
        return redirect()->route('contact-submissions.index')->with('success', 'Submission deleted.');
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'form_name' => 'required|string|max:255',
        'form_email' => 'required|email|max:255',
        'form_phone' => 'nullable|string|max:20',
        'form_subject' => 'required|string|max:255',
        'form_message' => 'required|string',
    ]);

    ContactSubmission::create([
        'full_name' => $validated['form_name'],
        'email' => $validated['form_email'],
        'phone' => $validated['form_phone'],
        'subject' => $validated['form_subject'],
        'message' => $validated['form_message'],
    ]);

    return redirect()->back()->with('success', 'Your message has been sent successfully.');
}
}
