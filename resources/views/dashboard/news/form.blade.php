<form id="news-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @if(isset($method) && $method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $news->title ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Slug (optional)</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug', $news->slug ?? '') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Cover Image</label>
        <input type="file" name="cover_image" class="form-control">
        @if (!empty($news->cover_image))
            <img src="{{ asset('storage/' . $news->cover_image) }}" class="mt-2" height="80">
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Published At</label>
        <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', isset($news->published_at) ? \Carbon\Carbon::parse($news->published_at)->format('Y-m-d\TH:i') : '') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <div id="editor" style="height: 300px;">{!! old('content', $news->content ?? '') !!}</div>
        <textarea name="content" id="content" style="display: none;"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">{{ $submitLabel ?? 'Save' }}</button>
    <a href="{{ route('dashboard.news.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@push('scripts')
    <!-- Quill Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quill = new Quill('#editor', {
                theme: 'snow'
            });

            const form = document.getElementById('news-form');
            form.addEventListener('submit', function () {
                document.querySelector('#content').value = quill.root.innerHTML;

            });
        });
    </script>
@endpush
