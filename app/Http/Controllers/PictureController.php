<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Http\Request;
use Image;

class PictureController extends Controller
{
    /**
     * @param  \App\Models\Gallery  $gallery
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Gallery $gallery)
    {
        $pictures = $gallery->pictures()->latest()->get();

        return view('pictures', compact('gallery', 'pictures'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'gallery_id' => 'required',
            'url'        => 'required|image',
        ], [], ['url' => 'upload']);

        if ($request->hasFile('url')) {
            $data['url'] = $request->url->store('uploads', 'public');
            $picture     = Picture::create($data);
            Image::make(public_path('storage/'.$picture->url))->fit(800, 800)->save();
           
            $picture->update(['thumbnail' => 'uploads/thumb_'.uniqid().'.jpg']);
            Image::make(public_path('storage/'.$picture->url))->fit(150, 150)->save(public_path('storage/'.$picture->thumbnail));
            
            session()->flash('success', 'Photo was uploaded successfully');
        }

        return redirect()->back();
    }

    /**
     * @param  \App\Models\Gallery  $gallery
     * @param  \App\Models\Picture  $picture
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Picture $picture)
    {
        unlink(storage_path('app/public/'.$picture->url));

        unlink(storage_path('app/public/'.$picture->thumbnail));

        $picture->delete();

        session()->flash('success', 'Photo was deleted successfully');

        return redirect()->back();
    }
}
