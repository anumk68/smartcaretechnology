<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ServicesBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesBrandController extends Controller
{
    public function index()
    {
        $brands = ServicesBrand::orderby('created_at', 'desc')->get();
        return view('admin.services.brands.list', compact('brands'));
    }

    public function create()
    {
        return view('admin.services.brands.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name'       => 'required|string|max:255|unique:services_brands,brand_name',
            'icon_image'       => 'nullable',
            'slug'             => 'required|string|max:255|unique:services_brands,slug',
            'description'      => 'nullable|string',
            'banner_image'     => 'nullable',
            'status'           => 'nullable|in:active,inactive',
            'seo_content'      => 'nullable|string',
            'additional_image' => 'nullable',
        ]);

        // handle image uploads
        if ($request->hasFile('icon_image')) {
            $validated['icon_image'] = $request->file('icon_image')->store('brands/icons', 'public');
        }

        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')->store('brands/banners', 'public');
        }

        if ($request->hasFile('additional_image')) {
            $validated['additional_image'] = $request->file('additional_image')->store('brands/additional', 'public');
        }
        $validated['slug'] = Str::slug(strtolower($request->slug));
        ServicesBrand::create($validated);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully!');
    }

    public function edit(ServicesBrand $brand)
    {
        return view('admin.services.brands.edit', compact('brand'));
    }

    public function update(Request $request, ServicesBrand $brand)
    {
        $validated = $request->validate([
            'brand_name'       => 'nullable|string|max:255',
            'icon_image'       => 'nullable',
            'slug'             => 'nullable|string|max:255',
            'description'      => 'nullable|string',
            'banner_image'     => 'nullable',
            'status'           => 'nullable|in:active,inactive',
            'seo_content'      => 'nullable|string',
            'additional_image' => 'nullable',
        ]);

        if ($request->hasFile('icon_image')) {
            $validated['icon_image'] = $request->file('icon_image')->store('brands/icons', 'public');
        }

        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')->store('brands/banners', 'public');
        }

        if ($request->hasFile('additional_image')) {
            $validated['additional_image'] = $request->file('additional_image')->store('brands/additional', 'public');
        }

        $brand->update($validated);

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }

    public function destroy(ServicesBrand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully!');
    }
}
