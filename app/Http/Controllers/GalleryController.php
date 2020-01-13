<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::get();

        return view('galeries', compact('galleries'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2',
        ]);
        Gallery::create($data);

        session()->flash('success', 'Created succesffuly');
        return redirect()->back();
    }

    public function edit()
    {
        return view('gallery.edit');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'name' => 'required|min:2',
        ]);

        $gallery->update($data);

        return redirect()->back();
    }

    public function destroy(Gallery $gallery)
    {
        /* if($gallery->pictures()->exists() ){
            //dd($gallery->pictures());
            session()->flash('error', 'You have photos in this gallery');
            return redirect()->back();
        } */
        foreach ($gallery->pictures as $picture) {
            unlink(storage_path('app/public/' . $picture->url));
        }

        $gallery->delete();

        session()->flash('success', 'Deleted succesffuly');
        return redirect()->back();
    }
}
