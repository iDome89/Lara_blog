<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'new_category' => 'required',
        ]);

        Category::create([
            'name' => $request->new_category
        ]);
        return back();
    }
    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {

        $category->update([
            'name' => $request->name,
        ]);

        return redirect('categories');

    }

    public function destroy(Category $category){;
        $category->delete();

        return back();
    }
}
