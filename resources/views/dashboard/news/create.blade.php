<x-dashboard.app-layout>
    <x-slot name="header">
        <h2 class="h4">Create News Article</h2>
    </x-slot>

    <div class="card p-4">
        @include('dashboard.news.form', [
            'action' => route('dashboard.news.store'),
            'submitLabel' => 'Create'
        ])
    </div>
</x-dashboard.app-layout>
