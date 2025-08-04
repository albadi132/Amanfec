<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the departments.
     */
    public function index(Request $request)
    {
    if ($request->ajax()) {
        $data = Department::select(['id', 'name', 'created_at']);
        return DataTables::of($data)
->addColumn('action', function ($row) {
    return '
        <button type="button" class="btn btn-sm btn-primary btn-edit"
            data-id="'.$row->id.'"
            data-name="'.$row->name.'"
            data-bs-toggle="modal"
            data-bs-target="#editDepartmentModal">
            Edit
        </button>
        <button type="button" class="btn btn-sm btn-danger btn-delete ms-1"
            data-id="'.$row->id.'">
            Delete
        </button>
    ';
})
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('dashboard.departments.index');

    }

    /**
     * Show the form for creating a new department.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created department in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name',
        ]);

        Department::create($validated);

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    /**
     * Show the form for editing the specified department.
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified department in storage.
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name,' . $department->id,
        ]);

        $department->update($validated);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified department from storage.
     */
    public function destroy(Department $department)
    {
        // تأكد من عدم وجود أعضاء مرتبطين بالقسم قبل الحذف إن أردت الحماية
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted.');
    }
}
