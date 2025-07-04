<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $request){

        $blogs = Blog::with('category')->orderBy('created_at', 'desc');
        $blogs = $blogs->get();
        return view('admin.blog.list', compact('blogs'));
    }

    public function create()
    {

        $blog_categories = BlogCategory::all();
        return view('admin.blog.create', compact('blog_categories'));
    }

    public function store(Request $request){

        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs,slug',
        ]);

        $blog = new Blog;

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = time() . '_banner.' . $file->getClientOriginalExtension();

            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->banner = 'uploads/' . $filename;
        }

        if ($request->hasFile('meta_img')) {

            $file = $request->file('meta_img');
            $filename = time() . '_meta.' . $file->getClientOriginalExtension();
            $path = public_path('uploads');
            $file->move($path, $filename);
            $blog->meta_img = 'uploads/' . $filename;
        }

        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));


        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower(trim($slug, '-'));
        $blog->description = $request->description;
        $blog->short_description = $request->short_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->banner_alt = $request->banner_alt;
        $blog->status = $request->status;
        $blog->save();
        $this->addUrlToSitemap($blog);
        return redirect()->route('admin.blog')->with('success', 'Blog post has been created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_categories = BlogCategory::all();

        return view('admin.blog.edit',  compact('blog','blog_categories'));
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        $this->removeUrlFromSitemap($blog);
        return redirect()->route('admin.blog')->with('success', 'Blog deleted successfully.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
                ]);

        $blog = Blog::find($id);
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $newSlug = strtolower(trim($slug, '-'));
        if ($blog->slug !== $newSlug) {

            $this->removeUrlFromSitemap($blog);
        }
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->slug = strtolower($slug);
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->banner_alt = $request->banner_alt;
        $blog->status = $request->status;

        if ($request->hasFile('banner')) {

            if ($blog->banner && file_exists(public_path($blog->banner))) {
                unlink(public_path($blog->banner));
            }


            $file = $request->file('banner');
            $blog->banner = $this->handleImage($file);
        }


        if ($request->hasFile('banner_second')) {

            if ($blog->banner_second && file_exists(public_path($blog->banner_second))) {
                unlink(public_path($blog->banner_second));
            }


            $file = $request->file('banner_second');
            $blog->banner_second = $this->handleImage($file);
        }


        if ($request->hasFile('meta_img')) {

            if ($blog->meta_img && file_exists(public_path($blog->meta_img))) {
                unlink(public_path($blog->meta_img));
            }


            $file = $request->file('meta_img');
            $blog->meta_img = $this->handleImage($file);
        }


        $blog->save();
        $this->addUrlToSitemap($blog);
        return redirect()->route('admin.blog')->with('success', 'Blog post has been updated successfully');
    }

    private function handleImage($file)
    {

        $filename = time() . '_' . $file->getClientOriginalName();


        $path = public_path('uploads');

        $file->move($path, $filename);


        return 'uploads/' . $filename;
    }

    public function uploadimage(Request $request){
            if($request->hasFile('upload')){

                $originalName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();

                $fileName = $fileName.'_'.time().'.'.$extension;

                $request->file('upload')->move(public_path('blog_image'), $fileName);
                $url = asset('blog_image/'.$fileName);

                return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);


            }

    }

    private function addUrlToSitemap($blog)
    {
        $sitemapPath = base_path('sitemap.xml');


        if (file_exists($sitemapPath)) {

            $sitemap = simplexml_load_file($sitemapPath);

        } else {
            $sitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        }


        $blogUrl = url('blogs/' . $blog->slug);
        $urlExists = false;

        foreach ($sitemap->url as $urlElement) {

            if ((string)$urlElement->loc === $blogUrl) {
                $urlExists = true;
                break;
            }
        }


        if (!$urlExists) {
            $urlElement = $sitemap->addChild('url');
            $urlElement->addChild('loc', $blogUrl);
            $urlElement->addChild('lastmod', now()->toAtomString());
            $urlElement->addChild('priority', '0.64');
        }


        $sitemap->asXML($sitemapPath);
    }
    private function removeUrlFromSitemap($blog)
    {
        $sitemapPath = base_path('sitemap.xml');

        if (file_exists($sitemapPath)) {

            $sitemapContent = simplexml_load_file($sitemapPath);

            $urlToRemove = url('blogs/' . $blog->slug);

            $newSitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

            $urlFound = false;

            foreach ($sitemapContent->url as $urlElement) {
                if ((string)$urlElement->loc === $urlToRemove) {
                    $urlFound = true;
                    continue;
                }

                $newUrlElement = $newSitemap->addChild('url');
                $newUrlElement->addChild('loc', (string)$urlElement->loc);
                $newUrlElement->addChild('lastmod', (string)$urlElement->lastmod);
                if (isset($urlElement->priority)) {
                    $newUrlElement->addChild('priority', (string)$urlElement->priority);
                }
            }


            $newSitemap->asXML($sitemapPath);

            return $urlFound;
        }

        return false;
    }
}
