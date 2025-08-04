<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    /**
     * Display a listing of the news articles.
     */
   public function index(Request $request)
{
    if ($request->ajax()) {
        $data = News::select(['id', 'title', 'slug', 'cover_image', 'published_at', 'created_at']);

        return DataTables::of($data)
            ->addColumn('cover_image', function ($row) {
                return $row->cover_image
                    ? '<img src="' . asset('storage/' . $row->cover_image) . '" width="50" height="50" class="rounded" style="object-fit:cover;" />'
                    : '-';
            })
            ->addColumn('action', function ($row) {
                return '
                    <a href="' . route('dashboard.news.edit', $row->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    <form action="' . route('dashboard.news.destroy', $row->id) . '" method="POST" style="display:inline">
                        ' . csrf_field() . method_field('DELETE') . '
                        <button class="btn btn-sm btn-danger" onclick="return confirm(\'Delete this article?\')">Delete</button>
                    </form>
                ';
            })
            ->rawColumns(['cover_image', 'action'])
            ->make(true);
    }

    return view('dashboard.news.index');
}


    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created article in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug',
            'content' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('news_covers', 'public');
        }

        News::create($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'News article created successfully.');
    }


    public function edit(News $news)
    {
        return view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified article in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug,' . $news->id,
            'content' => 'required|string',
            'cover_image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('news_covers', 'public');
        }

        $news->update($validated);

        return redirect()->route('dashboard.news.index')->with('success', 'News article updated successfully.');
    }

    /**
     * Remove the specified article from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('dashboard.news.index')->with('success', 'News article deleted.');
    }


 public function show($slug)
    {

        $news = News::where('slug', $slug)->firstOrFail();
        return view('web.News.NewsDetails', compact('news'));
    }
}
