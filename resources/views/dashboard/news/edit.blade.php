<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Edit News Article</h2>
    </x-slot>

    <div class="card p-4">
        @include('dashboard.news.form', [
            'action' => route('dashboard.news.update', $news->id),
            'method' => 'PUT',
            'news' => $news,
            'submitLabel' => 'Update'
        ])
    </div>
</x-dashboard.app-layout>
