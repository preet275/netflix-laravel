<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all categories from database
        $categories = Category::latest()->paginate(10);

        // Send categories to the index view
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show add category form
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate category form data
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'status' => 'required|boolean',
        ]);

        // Create category
        Category::create($validated);

        // Redirect back to categories list
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        // Find category by ID
        $category = Category::findOrFail($id);

        // Send category data to edit view
        return view('admin.categories.edit', compact('category'));
    }
    /**
     * Update the specified category.
     */
    public function update(Request $request, $id)
    {
        // Validate category data
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required|boolean',
        ]);

        // Find category by ID
        $category = Category::findOrFail($id);

        // Update category
        $category->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Redirect back to categories list
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Delete the specified category.
     */
    public function destroy($id)
    {
        // Find category by ID
        $category = Category::findOrFail($id);

        // Delete category
        $category->delete();

        // Redirect to categories list
        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
