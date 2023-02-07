<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function uploadBlog()
    {
        return view('admin.blog.home');
    }

    public function saveBlog(Request $request)
    {
        $blog = new Blog;
        if($request->file('blog_image')){
            $file= $request->file('blog_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/blogs'), $filename);
            $blog['blog_image']= $filename;
        }
        $blog->blog_title = $request->blog_title;
        $blog->blog_intro = $request->blog_intro;
        $blog->blog_subtopic1 = $request->blog_subtopic1;
        $blog->blog_description = $request->blog_description;
        $blog->blog_subtopic2 = $request->blog_subtopic2;
        $blog->blog_content = $request->blog_content;
        $blog->save();

        return redirect('/view-blog')->with('success','Blog Details Successfully Uploaded');
    }

    public function listBlog()
    {
        $blogs = Blog::where('deleted_at','Active')->get();
        return view('admin.blog.bloglist',compact('blogs'));
    }

    public function changeBlogStatus(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        $blog->status = $request->status;
        $blog->save();
    }

    public function editBlog(Request $request,$id)
    {
        $blog = Blog::where('id',$request->id)->first();
        return view('admin.blog.editblog',compact('blog'));
    }

    public function updateBlog(Request $request)
    {
        $blog = Blog::where('id',$request->id)->first();
        if($request->file('blog_image')){
            $file= $request->file('blog_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('admin/blogs'), $filename);
            $blog['blog_image']= $filename;
        }
        $blog->blog_title = $request->blog_title;
        $blog->blog_intro = $request->blog_intro;
        $blog->blog_subtopic1 = $request->blog_subtopic1;
        $blog->blog_description = $request->blog_description;
        $blog->blog_subtopic2 = $request->blog_subtopic2;
        $blog->blog_content = $request->blog_content;
        $blog->save();

        return redirect('/view-blog')->with('success','Blog Details Successfully Updated!');
    }

    public function deleteBlog(Request $request)
    {
        $blog = Blog::where('id',$request->id)->first();
        $blog->deleted_at = "Inactive";
        $blog->save();
    }

    public function upload(Request $request)
    {
        $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('/admin/blogdes/'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/admin/blogdes/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
    }
}
