<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {

        $categories = BlogCategory::orderBy('category_name', 'asc');
        $categories = $categories->get();
        return view('admin.blog.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255|unique:blog_categories,category_name',
            'slug'          => 'required|max:255|unique:blog_categories,slug',
        ]);
        $category                = new BlogCategory();
        $category->category_name = $request->category_name;
        $category->slug          = Str::slug(strtolower($request->slug));
        $category->save();
        return redirect()->route('blog-category')->with('success', 'Blog category has been created successfully');
    }

    public function edit($id)
    {
        $categories     = BlogCategory::find($id);
        $all_categories = BlogCategory::all();
        return view('admin.blog.category.edit', compact('categories', 'all_categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $category                = BlogCategory::find($id);
        $category->category_name = $request->category_name;
        $category->slug          = $category->slug;
        $category->save();

        return redirect()->route('blog-category')->with('success', 'Blog category has been updated successfully');

    }

    public function destroy($id)
    {
        BlogCategory::find($id)->delete();
        return redirect()->route('blog-category')->with('success', 'Blog category has been delete successfully');
    }

}
