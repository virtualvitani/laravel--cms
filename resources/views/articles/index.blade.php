<x-app-layout>
    <x-slot:pageTitle>
        Articles
    </x-slot>

    <x-slot:header>
        <div class="flex justify-between items-center">
            <h3 class="text-xl">{{ $header ?? 'Articles' }}</h3>
            @can('create', App\Models\Article::class)
                <a href="{{ route('articles.create') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create new Article</a>
            @endcan
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        {{ $articles->links() }}
    </div>

    <div class="columns-1 md:columns-2 gap-6 max-w-7xl mx-auto px-4">
        @foreach ($articles as $article)
            @include('articles.partials.article')
        @endforeach
    </div>
    
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        {{ $articles->links() }}
    </div>
</x-app-layout>