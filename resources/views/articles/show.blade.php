<x-app-layout>
    <x-slot:pageTitle>
        Articles
    </x-slot>

    {{-- if article belongs to me   --}}
    @can('update', $article)
    <x-slot:header>
        <div class="flex justify-between items-center">
            <h3 class="text-xl">Edit Atricle</h3>
            <div>
                <a href="{{ route('articles.edit', $article) }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-green-500 shadow-sm ring-1 ring-inset ring-green-300 hover:bg-green-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Edit</a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline ml-2">
                    @csrf
                    @method("DELETE")
                    <button class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-red-500 shadow-sm ring-1 ring-inset ring-red-300 hover:bg-red-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                </form>
            </div>
        </div>
    </x-slot>
    @endcan

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-4">
        @include('articles.partials.article')
    </div>

</x-app-layout>