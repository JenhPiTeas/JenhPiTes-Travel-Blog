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
        $all_posts = Post::where('status', 1)->get();
        return view('frontend.index', compact('all_posts'));
    }

    public function viewCategoryPost(string $category_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', 1)->first();

        if ($category) {
            $posts = Post::where('category_id', $category->id)->where('status', 1)->paginate(10);
            return view('frontend.post.index', compact('posts', 'category'));
        } else {
            return redirect('/');
        }
    }

    public function viewPost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug', $category_slug)->where('status', 1)->first();

        if ($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', 1)->first();
            return view('frontend.post.view', compact('post'));
        } else {
            return redirect('/');
        }
    }
}
