<div class="p-4 mb-6 inline-flex w-full sm:p-8 bg-white shadow sm:rounded-lg hover:shadow-lg" {{--style="background-image: url('{{ $article->image }}')" --}}>
    <section class="space-y-6 w-full">
        <header>
            <div class="flex items-center justify-between">
                <a href="{{ route('articles.show', $article) }}" class="text-lg font-medium text-gray-900 py-2 inline-flex">{{ $article->title }}</a>
                <a href="{{ route('category.articles', $article->category)}}" class="cursor-pointer rounded-full bg-indigo-400 mx-8 px-3 py-1.5 text-white hover:bg-indigo-300">{{ $article->category->name }}</a>
            </div>
            <p>Written by <i><a href="{{ route('user.articles', $article->author) }}" class="cursor-pointer text-blue-600 underline">{{ $article->author->fullName() }}</a></i> on <i>{{ $article->created_at->toFormattedDateString() }}</i></p>
        </header>
        <a href="{{ route('articles.show', $article) }}">
            <p class="my-4 text-gray-600">{{ $article->body }}</p>
        </a>
        <footer class="flex gap-3">
            @foreach ($article->tags as $tag)
                <a href="{{ route('tag.articles', $tag) }}" class="cursor-pointer rounded-full bg-gray-100 px-3 py-1.5 text-xs text-gray-600 hover:bg-gray-200">{{ $tag->name }}</a>
            @endforeach
        </footer>
    </section>
</div>