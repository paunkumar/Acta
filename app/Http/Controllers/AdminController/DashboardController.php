<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Pagelist;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('deleted_at','Active')->get();
        $countBlog = $blogs->count();
        $page = Pagelist::all();
        $pages = $page->count();
        return view('admin.dashboard-home',compact('countBlog','pages'));
    }

    public function profileUpdate()
    {
        $user = User::all();
        return view('admin.profile_update',compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:([a-zA-Z ]+$)',
            'phone' => 'required|numeric|min:10',
            'email' => 'required|email'
        ]);

        $userId = Auth::id();
        $data = User::where('id',$userId)->first();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success','User Details Successfully Updated!!');
    }
}
