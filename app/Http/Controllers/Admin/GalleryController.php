<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    private $galleryObject;

    public function __construct()
    {
        $this->galleryObject = new Gallery();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.admin.gallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        return view('backend.admin.gallery', compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $this->galleryObject->storeGallery($request);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleries = Gallery::all();
        $gallery  = Gallery::findOrFail($id);
        return view('backend.admin.gallery', compact('galleries', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $this->galleryObject->updateGallery($request, $id);
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->galleryObject->destroyGallery($id);
        return redirect()->back();
    }
}
