<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogObject;
    public function __construct()
    {
        $this->blogObject = new Blog();
    }

    public function blogs($category_id, $category_name)
    {
        $blogs = $this->blogObject->getCategoryBlogs($category_id);
        return view('frontend.blogs', compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = $this->blogObject->getBlogDetail($slug);
        $blogs = $this->blogObject->getRelatedBlogs($blog->category_id, $blog->id);
        return view('frontend.blog', compact('blog', 'blogs'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.faq', compact('faqs'));
    }
}
