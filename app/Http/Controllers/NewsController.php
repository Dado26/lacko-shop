<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $news = News::paginate(8);
        return view('news', compact('news'));

    }

    public function create(){
        return view('galerry.index');
    }

    public function store(Request $request){
        $data =  $request->validate([
            'title' => 'required|min:2',
            'text' => 'required|min:3',         
        ]);
        News::create($data);
        session()->flash('success', 'Created succesffuly');
       return redirect()->back();
    }

    public function edit(News $new){
        
        $news = News::paginate(8);
        return view('news', compact('news', 'new'));

    }

    public function update(Request $request, News $new){
        $data =  $request->validate([
            'title' => 'required|min:2',
            'text' => 'required|min:3',         
        ]);
     
       $new->update($data);
       session()->flash('success', 'Edited succesffuly');
       return redirect()->back();
    }

    public function destroy(News $new){
        $new->delete();

        session()->flash('success', 'Deleted succesffuly');
        return redirect()->back();
    }

    
    
}
