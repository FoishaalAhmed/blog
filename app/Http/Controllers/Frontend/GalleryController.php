<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photo()
    {
        $photos = Gallery::where('type', 'Photo')->paginate(20);
        return view('frontend.photo', compact('photos'));
    }


    public function video()
    {
        $videos = Gallery::where('type', 'Video')->paginate(20);
        return view('frontend.video', compact('videos'));
    }

    public function ebook()
    {
        $books = Book::paginate(20);
        return view('frontend.book', compact('books'));
    }
}
