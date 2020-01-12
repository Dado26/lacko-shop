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
            $data        = Picture::create($data);
            $image       = Image::make(public_path('storage/'.$data->url))->fit(650, 650);
            $image->save();

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
    public function destroy(Gallery $gallery, Picture $picture)
    {
        unlink(storage_path('app/public/'.$picture->url));

        $picture->delete();

        session()->flash('success', 'Photo was deleted successfully');

        return redirect()->back();
    }
}
