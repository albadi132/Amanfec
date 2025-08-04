<?php

namespace App\Http\Controllers;

use App\Models\ClientPartner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClientPartnerController extends Controller
{
    /**
     * Display a listing of clients and partners.
     */
 public function index(Request $request)
{
    if ($request->ajax()) {
        $data = ClientPartner::select(['id', 'name', 'type', 'logo_path', 'created_at']);
        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                return '
                    <button onclick="editEntry('.$row->id.')" class="btn btn-sm btn-primary">Edit</button>
                    <form method="POST" action="'.route('dashboard.client-partners.destroy', $row->id).'" style="display:inline">
                        '.csrf_field().method_field('DELETE').'
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                    </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('dashboard.client_partners.index');
}


    /**
     * Show the form for creating a new client or partner.
     */
    public function create()
    {
        return view('dashboard.client_partners.create');
    }

    /**
     * Store a newly created record.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_path' => 'nullable|image|max:2048',
            'type' => 'required|in:client,partner',
        ]);

        if ($request->hasFile('logo_path')) {
            $validated['logo_path'] = $request->file('logo_path')->store('logos', 'public');
        }

        ClientPartner::create($validated);

        return redirect()->route('dashboard.client-partners.index')->with('success', 'Entry added successfully.');
    }

    /**
     * Show the form for editing the specified record.
     */
   public function edit(ClientPartner $clientPartner)
{
    return response()->json($clientPartner);
}

    /**
     * Update the specified record.
     */
    public function update(Request $request, ClientPartner $clientPartner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_path' => 'nullable|image|max:2048',
            'type' => 'required|in:client,partner',
        ]);

        if ($request->hasFile('logo_path')) {
            $validated['logo_path'] = $request->file('logo_path')->store('logos', 'public');
        }

        $clientPartner->update($validated);

        return redirect()->route('dashboard.client-partners.index')->with('success', 'Entry updated.');
    }

    /**
     * Remove the specified record.
     */
    public function destroy(ClientPartner $clientPartner)
    {
        $clientPartner->delete();
        return redirect()->route('dashboard.client-partners.index')->with('success', 'Entry deleted.');
    }
}
