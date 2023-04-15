<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function viewCategoryPost($category_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', 1)->first();

        if ($category) {
            $posts = Post::where('category_id', $category->id)->where('status', 1)->get();
            return view('frontend.post.index');
        } else {
            return redirect('/');
        }
    }
}
