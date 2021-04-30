<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogObject     = new Blog();
        $blogs      = $blogObject->getBlogs()->take(6);
        $categories = Category::where('id', '!=', 1)->select('id', 'name')->take(4)->get();

        foreach ($categories as $key => $value) {

            $categories[$key]->blogs = $blogObject->getCategoryBlogs($value->id); 
        }

        return view('frontend.index', compact('blogs', 'categories'));
    }
}
