<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Book extends Model
{
    protected $fillable = [
        'name', 'suitable_for', 'publish_year', 'author', 'photo', 'pdf',
    ];

    public function storeBook($request)
    {
        $image = $request->file('photo');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/books/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->photo     = $image_url;

        $pdf = $request->file('pdf');
        $pdf_name      = date('YmdHis');
        $ext           = strtolower($pdf->getClientOriginalExtension());
        $pdf_full_name = $pdf_name . '.' . $ext;
        $upload_path   = 'public/images/books/';
        $pdf_url       = $upload_path . $pdf_full_name;
        $success       = $pdf->move($upload_path, $pdf_full_name);
        $this->pdf     = $pdf_url;

        $this->name         = $request->name;
        $this->suitable_for = $request->suitable_for;
        $this->publish_year = $request->publish_year;
        $this->author       = $request->author;
        $storeBook          = $this->save();

        $storeBook 
        ? Session::flash('message', 'New Book Created Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function updateBook($request, $id)
    {
        $book = $this::findOrFail($id);

        $image = $request->file('photo');

        if ($image) {

            if (file_exists($book->photo)) unlink($book->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/books/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $book->photo     = $image_url;
        }

        $pdf = $request->file('pdf');

        if ($pdf) {

            if (file_exists($book->pdf)) unlink($book->pdf);

            $pdf_name      = date('YmdHis');
            $ext           = strtolower($pdf->getClientOriginalExtension());
            $pdf_full_name = $pdf_name . '.' . $ext;
            $upload_path   = 'public/images/books/';
            $pdf_url       = $upload_path . $pdf_full_name;
            $success       = $pdf->move($upload_path, $pdf_full_name);
            $book->pdf     = $pdf_url;
        }

        $book->name         = $request->name;
        $book->suitable_for = $request->suitable_for;
        $book->publish_year = $request->publish_year;
        $book->author       = $request->author;
        $update_book        = $book->save();

        $update_book 
        ? Session::flash('message', 'Book Updated Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyBook($id)
    {
        $book = $this::findOrFail($id);
        if (file_exists($book->photo)) unlink($book->photo);
        if (file_exists($book->pdf)) unlink($book->pdf);

        $destroyBook =  $book->delete();

        $destroyBook 
        ? Session::flash('message', 'Book Deleted Successfully!') 
        : Session::flash('message', 'Something Went Wrong!');
    }
}
