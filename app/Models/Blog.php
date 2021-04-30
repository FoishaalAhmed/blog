<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Blog extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'date', 'time', 'title', 'slug', 'photo', 'detail', 
    ];

    public function getBlogs()
    {
        $blogs = DB::table('blogs')
                     ->join('users', 'blogs.user_id', '=', 'users.id')
                     ->join('categories', 'blogs.category_id', '=', 'categories.id')
                     ->orderBy('blogs.created_at', 'desc')
                     ->select('blogs.*', 'users.name as user', 'categories.name as category')
                     ->get();
        return $blogs;
    }

    public function getAllBloggerBlogs()
    {
        $blogs = DB::table('blogs')
                     ->join('users', 'blogs.user_id', '=', 'users.id')
                     ->join('categories', 'blogs.category_id', '=', 'categories.id')
                     ->orderBy('blogs.created_at', 'desc')
                     ->where('blogs.user_id', auth()->user()->id)
                     ->select('blogs.*', 'users.name as user', 'categories.name as category')
                     ->get();
        return $blogs;
    }

    public function getCategoryBlogs($category_id)
    {
        $blogs = DB::table('blogs')
                     ->join('users', 'blogs.user_id', '=', 'users.id')
                     ->join('categories', 'blogs.category_id', '=', 'categories.id')
                     ->orderBy('blogs.created_at', 'desc')
                     ->where('blogs.category_id', $category_id)
                     ->select('blogs.*', 'users.name as user', 'categories.name as category')
                     ->get();
        return $blogs;
    }

    public function getRelatedBlogs($category_id, $id)
    {
        $blogs = DB::table('blogs')
                     ->join('users', 'blogs.user_id', '=', 'users.id')
                     ->join('categories', 'blogs.category_id', '=', 'categories.id')
                     ->orderBy('blogs.created_at', 'desc')
                     ->where('blogs.category_id', $category_id)
                     ->where('blogs.id', '!=', $id)
                     ->take(2)
                     ->select('blogs.*', 'users.name as user', 'categories.name as category')
                     ->get();
        return $blogs;
    }

    public function getBlogDetail($slug)
    {
        $blogs = $this::join('users', 'blogs.user_id', '=', 'users.id')
                     ->join('categories', 'blogs.category_id', '=', 'categories.id')
                     ->orderBy('blogs.created_at', 'desc')
                     ->where('blogs.slug', $slug)
                     ->select('blogs.*', 'users.name as user', 'categories.name as category')
                     ->firstOrFail();
        return $blogs;
    }

    public function storeBlog(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/blogs/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->user_id     = auth()->user()->id;
        $this->category_id = $request->category_id;
        $this->date        = date('Y-m-d');
        $this->time        = date('H:i:s');
        $this->title       = $request->title;
        $this->slug        = $request->slug;
        $this->detail      = $request->detail;

        $storeBlog = $this->save();

        $storeBlog
        ? Session::flash('message', 'Blog Created Successfully!')
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function updateBlog(Object $request, Int $id)
    {
        $blog = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {

            if($blog->photo) unlink($blog->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/blogs/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $blog->photo     = $image_url;
        }

        $blog->user_id     = auth()->user()->id;
        $blog->category_id = $request->category_id;
        $blog->title       = $request->title;
        $blog->slug        = $request->slug;
        $blog->detail      = $request->detail;

        $updateBlog = $blog->save();

        $updateBlog
        ? Session::flash('message', 'Blog Updated Successfully!')
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyBlog(Int $id)
    {
        $blog = $this::findOrFail($id);
        if ($blog->photo) unlink($blog->photo);

        $destroyBlog = $blog->delete();

        $destroyBlog
        ? Session::flash('message', 'Blog Deleted Successfully!')
        : Session::flash('message', 'Something Went Wrong!');
    }
}
