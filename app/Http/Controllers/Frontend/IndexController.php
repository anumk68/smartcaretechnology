<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogReview;
use App\Models\Contact;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        $blogs_index = Blog::with('reviews')->where('status', 'active')->take(3)->get();
        return view('frontend.index', compact('blogs_index'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function service_details()
    {
        return view('frontend.service-details');
    }
    public function howWeWork()
    {
        return view('frontend.how-we-work');
    }
    public function contact()
    {
        return view('frontend.contact-us');
    }
    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function blog($slug = null)
    {
        $query = Blog::with('reviews')->where('status', 'active');

        if ($slug) {
            $query->whereHas('category', function ($q) use ($slug) {
                $q->where('slug', $slug);
            });
        }

        $blogs = $query->orderBy('id', 'DESC')->paginate(12);

        return view('frontend.blog', compact('blogs'));
    }

    public function blog_details($slug)
    {
        $blogCategory = BlogCategory::all();

        foreach ($blogCategory as $category) {
            $category->blog_count = Blog::where('category_id', $category->id)->count();
        }
        $blog        = Blog::with('category')->where('slug', $slug)->first();
        $blog_review = BlogReview::with('blog')->where('blog_id', $blog->id)->where('status', 'active')->orderby('rating', 'desc')->get();
        $resentBlogs = Blog::orderby('created_at', 'DESC')->take(5)->get();
        return view('frontend.blog-details', compact('blog', 'blogCategory', 'resentBlogs', 'blog_review'));
    }

    public function contact_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fill in all required fields before submitting the form.');
        }
        try {
            $details = Contact::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'message'  => $request->message,
                'subject'  => $request->subject ?? null,
                'phone_no' => $request->phone_no ?? null,
            ]);

            Mail::to('hardeepsingh.digirush@gmail.com')->send(new ContactMail($details));

            return back()->with('success', 'Message has been sent!');
        } catch (\Exception $e) {
            Log::error("message"); ('Mail error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Message not sent.');
        }

    }

    public function blog_review_store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'name'    => 'required',
            'email'   => 'required|email',
            'rating'  => 'required|integer|min:1|max:5',
            'comment' => 'required',
            'status' => 'inactive',
        ]);

    $data = $request->all();
    $data['status'] = 'inactive';
    BlogReview::create($data);

        return back()->with('success', 'Review submitted successfully!');
    }


public function search_blog(Request $request)
{
    $keyword = $request->query('query');

    $blogs = Blog::where('title', 'LIKE', '%' . $keyword . '%')->get();

    return response()->json($blogs);
}

}
