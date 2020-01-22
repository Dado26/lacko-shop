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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2',
        ]);

        Gallery::create($data);

        session()->flash('success', 'Created successfully');

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

        session()->flash('success', 'Gallery name was updated successfully');

        return redirect()->back();
    }

    public function destroy(Gallery $gallery)
    {
        foreach ($gallery->pictures as $picture) {
            unlink(public_path('/'.$picture->url));
            unlink(public_path('/'.$picture->thumbnail));
        }

        $gallery->delete();

        session()->flash('success', 'Deleted successfully');

        return redirect()->back();
    }
}
