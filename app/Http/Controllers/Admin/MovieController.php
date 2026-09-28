<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of movies.
     */
    public function index()
    {
        // Get movies with their category
        $movies = Movie::with('category')->latest()->paginate(10);

        // Send movies to index view
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new movie.
     */
    public function create()
    {
        // Get all categories for the movie category dropdown
        $categories = Category::where('status', true)->get();

        // Send categories to the create movie view
        return view('admin.movies.create', compact('categories'));
    }

    /**
     * Store a newly created movie.
     */
    public function store(Request $request)
    {
        // Validate movie form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category_id' => 'required|integer',
            'release_year' => 'required|integer',
            'duration' => 'required|integer',
            'trailer' => 'nullable|url',
            'status' => 'required|boolean',
        ]);

        // Store poster image if uploaded
        $posterPath = null;

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
        }
        // Create movie
        Movie::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'poster' => $posterPath,
            'category_id' => $request->category_id,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'trailer' => $request->trailer,
            'status' => $request->status,
        ]);

        // Return to movies list with success message
        return redirect()
            ->route('admin.movies.index')
            ->with('success', 'Movie added successfully.');
    }

    /**
     * Show the form for editing a movie.
     */
    public function edit($id)
    {
        // Find movie by ID
        $movie = Movie::findOrFail($id);

        // Get active categories for the category dropdown
        $categories = Category::where('status', true)->get();

        // Send movie and categories to edit view
        return view('admin.movies.edit', compact('movie', 'categories'));
    }

    /**
     * Update an existing movie.
     */
    public function update(Request $request, $id)
    {
        // Find movie by ID
        $movie = Movie::findOrFail($id);

        // Validate movie data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category_id' => 'required|integer',
            'release_year' => 'required|integer',
            'duration' => 'required|integer',
            'trailer' => 'nullable|url',
            'status' => 'required|boolean',
        ]);

        // Keep the existing poster by default
        $posterPath = $movie->poster;

        // Save new poster if one is uploaded
        if ($request->hasFile('poster')) {

            // Delete old poster
            if ($movie->poster) {
                Storage::disk('public')->delete($movie->poster);
            }

            // Store new poster
            $posterPath = $request->file('poster')->store('posters', 'public');
        }

        // Update movie data
        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'poster' => $posterPath,
            'category_id' => $request->category_id,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'trailer' => $request->trailer,
            'status' => $request->status,
        ]);

        // Return to movies list with success message
        return redirect()
            ->route('admin.movies.index')
            ->with('success', 'Movie updated successfully.');
    }

    /**
     * Delete a movie.
     */
    public function destroy($id)
    {
        // Find movie by ID
        $movie = Movie::findOrFail($id);

        // Delete poster from storage
        if ($movie->poster) {
            Storage::disk('public')->delete($movie->poster);
        }

        // Delete movie from database
        $movie->delete();

        // Return to movies list with success message
        return redirect()
            ->route('admin.movies.index')
            ->with('success', 'Movie deleted successfully.');
    }
}
