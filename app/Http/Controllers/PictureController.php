<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
            $image = $request->file('url');
            $data['url'] = 'uploads/'.time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/uploads');
            $image->move($path, $data['url']);

            $picture = Picture::create($data);
            Image::make(public_path($picture->url))->fit(800, 800)->save();

            $picture->update(['thumbnail' => 'uploads/thumb_'.uniqid().'.jpg']);
            $height = Arr::random([100, 150, 200]); // to make the gallery more interesting
            Image::make(public_path($picture->url))->fit(150, $height)->save(public_path($picture->thumbnail));

            session()->flash('success', 'Photo was uploaded successfully');
        }

        return redirect()->back();
    }

    /**
     * @param  \App\Models\Picture  $picture
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Picture $picture)
    {
        unlink(public_path('/'.$picture->url));
        unlink(public_path('/'.$picture->thumbnail));

        $picture->delete();

        session()->flash('success', 'Photo was deleted successfully');

        return redirect()->back();
    }
}
