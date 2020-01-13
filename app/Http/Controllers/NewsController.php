<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $news = News::query()->latest()->paginate(8);

        return view('news.index', compact('news'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:2',
            'text'  => 'required|min:3',
        ]);

        News::create($data);
        session()->flash('success', 'News was created successfully');

        return redirect()->back();
    }

    /**
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|min:2',
            'text'  => 'required|min:3',
        ]);

        $news->update($data);

        session()->flash('success', 'News was updated successfully');

        return redirect()->route('news.index');
    }

    /**
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $news->delete();

        session()->flash('success', 'News was deleted successfully');

        return redirect()->back();
    }
}
