<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Simulate storing book (JavaScript will handle client-side)
        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    public function show($id)
    {
        return view('posts.show', compact('id'));
    }
}