<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tags = $request->additionalTag;

        if (str_contains($tags , ',')) {
            $tags = explode(',', $tags );
        }

        if (is_array($tags)) {
            foreach ($tags as $tag) {
                Validator::make(['name' => $tag], ['title' => 'required|min:3|max:255|unique:tags,name'])->validateWithBag('additionalTagCreation');
                Tag::create(['name' => $tag]);
            }
        } else {
            Validator::make(['name' => $tags], ['title' => 'required|min:3|max:255|unique:tags,name'])->validateWithBag('additionalTagCreation');
            Tag::create(['name' => $tags]);
        }

        return redirect()->back()->withFlashMessage("Oznaka je uspješno dodana");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}