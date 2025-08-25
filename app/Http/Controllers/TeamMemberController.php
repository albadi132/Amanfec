<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TeamMemberController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TeamMember::with('department')->select([
                'id',
                'name',
                'title',
                'photo',
                'department_id',
                'display_order',
                'show_on_homepage',
                'status',
                'created_at'
            ]);

            return DataTables::of($data)
                ->addColumn('photo', function ($row) {
                    if ($row->photo) {
                      //  $url = asset('storage/' . $row->photo);
                        return $row->photo;
                    }
                    return '—';
                })
                ->addColumn('department', function ($row) {
                    return $row->department->name ?? '—';
                })
                ->addColumn('show_on_homepage', fn($row) => $row->show_on_homepage ? 'Yes' : 'No')
                ->addColumn('status', fn($row) => ucfirst($row->status))
->addColumn('action', function ($row) {
    return '
        <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="editMember(' . $row->id . ')">Edit</a>
        <button class="btn btn-sm btn-danger ms-2" onclick="confirmDelete(' . $row->id . ')">Delete</button>';
})
                ->rawColumns(['photo', 'action'])
                ->make(true);
        }

        $departments = Department::select('id', 'name')->get();
        return view('dashboard.team_members.index', compact('departments'));
    }

public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'department_id' => 'nullable|exists:departments,id',
            'display_order' => 'nullable|integer',
            'show_on_homepage' => 'required|boolean',
            'status' => 'required|string|in:active,inactive',
            'photo' => 'nullable|image|max:3048',
            'bio' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        TeamMember::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Team member created successfully.'
        ], 201);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // أخطاء الفاليديشِن
        return response()->json([
            'success' => false,
            'message' => 'Validation failed.',
            'errors' => $e->errors()
        ], 422);

    } catch (\Exception $e) {
        // أي خطأ آخر (مثلاً من الداتابيس)
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong while creating the team member.',
            'error' => $e->getMessage(), // ممكن تخفيه في الإنتاج وتكتب فقط رسالة عامة
        ], 500);
    }
}


    public function update(Request $request, $id)
    {
        $teamMember = TeamMember::findOrFail($id);

$validated = $request->validate([
    'name' => 'required|string|max:255',
    'title' => 'nullable|string|max:255',
    'department_id' => 'nullable|exists:departments,id',
    'display_order' => 'nullable|integer',
    'show_on_homepage' => 'required|boolean',
    'status' => 'required|string|in:active,inactive',
    'photo' => 'nullable|image|max:2048',
    'bio' => 'nullable|string',
]);

        if ($request->hasFile('photo')) {
            if ($teamMember->photo) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            $validated['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        $teamMember->update($validated);
        return response()->json(['success' => true, 'message' => 'Team member updated.']);
    }

    public function edit(TeamMember $teamMember)
    {
        return response()->json($teamMember);
    }

public function destroy(TeamMember $teamMember)
{
    if ($teamMember->photo) {
        Storage::disk('public')->delete($teamMember->photo);
    }

    $teamMember->delete();
    return response()->json(['success' => true, 'message' => 'Deleted successfully.']);
}


public function publicTeamDetails($id)
{
    $member = TeamMember::with('department')
        ->where('status', 'active')
        ->findOrFail($id);

    return view('web.Teams.TeamDetails', compact('member'));
}

}
