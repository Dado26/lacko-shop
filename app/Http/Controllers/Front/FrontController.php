<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
        public function getAbout()
        {
            return view('front.about');
        }

        public function getContact()
        {
            return view('front.contact');
        }

        public function getNews()
        {
            $news = News::get();
            return view('front.news', compact('news'));
        }

        public function getIndex()
        {
            return view('front.index');
        }

        public function getType()
        {
            return view('front.type');
        }

        public function getGallery(Gallery $gallery = null)
        {
            $galleries = Gallery::with('pictures')->get();
           // dd($gallery);
            return view('front.gallery', compact('galleries', 'gallery'));
        }
}
