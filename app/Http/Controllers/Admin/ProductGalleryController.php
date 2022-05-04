<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Category;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Requests\ProductRequest;
use App\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductGallery::all();
        // dd($data);
        return view('cms.pages.product-gallery.index')->with([
            'item' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('cms.pages.product-gallery.create')->with([
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        // dd($request->file('photos'));
        $photos = $request->file('photos');
        foreach ($photos as $photo) {
            $name = time();
            $extension = $photo->getClientOriginalExtension();
            $newname = $name . '' . $extension;
            // $size = $photo->getClientSize();
            // Storage::putFileAs('public', $photo, $newname);
            $data['photos'] = $photo->store('assets/gallery', 'public');

            $data['products_id'] = $request->products_id;


            // dd($data);
            ProductGallery::create($data);
            Session()->flash('sukses', 'Added Product Success');
        }
        return redirect()->route('product_gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
