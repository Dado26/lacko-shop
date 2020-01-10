<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index(Gallery $gallery){
       // $galleries = Gallery::get();
        $pictures = $gallery->pictures()->paginate(20);
        return view('pictures', compact('gallery', 'pictures'));
    }

    public function create(){
        $galleries = Gallery::get();
        return view('pictureUpload', compact('galleries'));
    }

    public function store(Request $request){
        
      $data =  $request->validate([
            'gallery_id' => 'required',
            'url' => 'required|image',
      ], [],
        ['url' => 'upload' ]);
     
        if ($request->hasFile('url')) {
            $data['url'] = $request->url->store('uploads', 'public');
            $data          = Picture::create($data);
            $image         = Image::make(public_path('storage/' . $data->url))->fit(650, 650);
            $image->save();

            session()->flash('success', 'You addedd new picture');
        } 

        return redirect()->back();
    }

    public function edit(Gallery $gallery, Picture $picture){
        return view('pictures', compact('gallery', 'picture'));
    }

    public function update(Request $request, Picture $picture){
        $data =  $request->validate([
            'name' => 'required|min:2',         
        ]);
     
       $picture->update($data);
       session()->flash('success', 'Edited succesffuly');
       return redirect()->back();
    }

    public function destroy(Picture $picture){

       unlink(storage_path('app/public/' . $picture->url));
       
       $picture->delete();

       session()->flash('success', 'Deleted succesffuly');
       return redirect()->back();
    }
}
