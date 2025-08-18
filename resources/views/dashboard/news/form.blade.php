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
        <div id="full-editor" style="height: 300px;">{!! old('content', $news->content ?? '') !!}</div>

          <input type="hidden" name="content" required>
    </div>

    <button type="submit" class="btn btn-primary">{{ $submitLabel ?? 'Save' }}</button>
    <a href="{{ route('dashboard.news.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@push('scripts')
    <!-- Quill Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script src="{{ asset('build/assets/assets/vendor/libs/quill/katex.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
             const fullToolbar = [
                    [{ font: [] }, { size: [] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ color: [] }, { background: [] }],
                    [{ script: 'super' }, { script: 'sub' }],
                    [{ header: '1' }, { header: '2' }, 'blockquote', 'code-block'],
                    [{ list: 'ordered' }, { list: 'bullet' }, { indent: '-1' }, { indent: '+1' }],
                    [{ direction: 'rtl' }],
                    ['link', 'image', 'formula'],
                    ['clean']
                ];

                const fullEditor = new Quill('#full-editor', {
                    bounds: '#full-editor',
                    placeholder: 'Type Something...',
                    modules: { formula: true, toolbar: fullToolbar },
                    theme: 'snow'
                });

const form = document.getElementById('news-form');
                 function updateDescription() {
        const html = fullEditor.root.innerHTML;
        document.querySelector('input[name="content"]').value = html;
        console.log('content updated:', html);
    }

    form.addEventListener('submit', function () {
        console.log('Form submitted');
        updateDescription();
    });
        });
    </script>
@endpush
