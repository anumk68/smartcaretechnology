<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogReview;
use Illuminate\Http\Request;

class BlogReviewController extends Controller
{
   public function index()
   {
       $reviews = BlogReview::with('blog')->orderby('rating', 'desc')->get();
      return view('admin.blog-review.list', compact('reviews'));
   }

   public function toggleStatus($id)
{
    $review = BlogReview::findOrFail($id);
    $review->status = $review->status === 'active' ? 'inactive' : 'active';
    $review->save();

    return back()->with('success', 'Review status updated!');
}

}
