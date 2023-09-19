<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('pages.blogs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'description_short' => 'required',
            'slug' => 'required|unique:blogs',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $blog = Blog::create($validatedData);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $blog->image = 'images/' . $imageName;
            $blog->save();
        }

        return redirect('/blogs')->with('success', 'Blog oluşturuldu!');
    }

    public function show(Blog $blog)
    {
        return view('pages.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'description_short' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $blog->update($validatedData);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $blog->image = 'images/' . $imageName;
            $blog->save();
        }

        return redirect('/blogs')->with('success', 'Blog güncellendi!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blogs')->with('success', 'Blog silindi!');
    }
}
