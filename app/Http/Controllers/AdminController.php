<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::get();

        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        session()->flash('success', 'Admin was created successfully');

        return redirect()->route('admins.index');
    }

    /**
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $admin)
    {
        $data = $request->validate([
            'name'  => 'required|min:2',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password'   => 'nullable|min:6|confirmed',
        ]);
        if($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        }else{
            $data['password'] = $admin->password;
        }

        $admin->update($data);

        session()->flash('success', 'Admin was updated successfully');

        return redirect()->route('admins.index');
    }

    /**
     * @param  \App\Models\News  $news
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $admin)
    {
        $admin->delete();

        session()->flash('success', 'Admin was deleted successfully');

        return redirect()->back();
    }
}
