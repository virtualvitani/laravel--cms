<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('author', 'tags', 'category')->latest()->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        // Gate::authorize('create', Article::class);

        $categories = Category::all();
        $tags = Tag::all();

        return view('articles.create', compact('categories', 'tags'));
    }

    public function store(ArticleRequest $request)
    {
        // Gate::authorize('create', Article::class);

        $article = Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            // 'user_id' => auth()->id(),
            'user_id' => Auth::id(),
            'category_id' => $request->category,
        ]);

        $article->tags()->attach($request->tags);

        if ($image = $request->file('image')) {
             $path = $image->store("images/articles/$article->id", "public");
             $article->update(['image' => $path]);
        }

        // return redirect()->route('articles.index')->with('flash_message', 'Porkua');
        return redirect()->route('articles.index')->withFlashMessage("Uspjesno kreiran Article");

    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        // Gate::authorize('update', $article);

        $categories = Category::all();
        $tags = Tag::all();

        return view('articles.edit', compact('article', 'categories', 'tags'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        // Gate::authorize('update', $article);

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category,
        ]);

        if ($image = $request->file('image')) {
            Storage::disk('public')->delete($article->image);

            $path = $image->store("images/articles/$article->id", "public");
            $article->update(['image' => $path]);
        }

        if ($request->tags) {
            $article->tags()->sync($request->tags);
        } else {
            $article->tags()->detach();
        }

        return redirect()->back()->withFlashMessage("Article je apdejtan");
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->withFlashMessage("Article je obrisan");
    }

    public function byAuthor(int $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $articles = $user->articles()->with('author', 'tags')->latest()->paginate(10);
        $header = $user->fullName() . "'s articles";

        return view('articles.index', compact('articles', 'header'));
    }

    public function byTag(Tag $tag)
    {
        $articles = $tag->articles()->with('author', 'tags', 'category')->latest()->paginate(10);
        $header = "Articles with $tag->name";

        return view('articles.index', compact('articles', 'header'));
    }

    public function byCategory(Category $category)
    {
        // $articles = Article::where('category_id', $id)->with('author', 'tags')->latest()->paginate(10);
        // $articles = Article::whereCategoryId($id)->with('author', 'tags')->latest()->paginate(10);
        $articles = $category->articles()->with('author', 'tags')->latest()->paginate(10);
        $header = "Articles in category $category->name";

        return view('articles.index', compact('articles', 'header'));
    }
}