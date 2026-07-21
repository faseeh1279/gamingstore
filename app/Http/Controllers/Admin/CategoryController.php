<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(Request $request)
    {
        $query = Category::query();

        // Search
        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('slug', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');

            });

        }

        // Status Filter
        if ($request->filled('status')) {

            $query->where('is_active', $request->status);

        }

        $categories = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $stats = [

            'total' => Category::count(),

            'active' => Category::where('is_active', true)->count(),

            'inactive' => Category::where('is_active', false)->count(),

        ];

        return view(
            'admin.categories.index',
            compact('categories', 'stats')
        );
    }

    public function create(){ 
        return view('admin.categories.create'); 
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }


    public function view(Category $category){ 
        return view('admin.categories.view', compact('category')); 
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function destroy(){ 
        return redirect()->route('admin.categories.index')
        ->with('success', 'Category Deleted Successfully'); 
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully.');
    }

}
