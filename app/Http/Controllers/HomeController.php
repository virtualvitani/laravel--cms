<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Article::where('featured', true)->first();
        $latest = Article::with('author', 'category')->latest()->limit(2)->get();
        $articles = Article::inRandomOrder()->with('author', 'category')->paginate(9);

        return view('home', [
            'articles' => $articles,
            'latest' => $latest,
            'featured' => $featured
        ]);
    }
}