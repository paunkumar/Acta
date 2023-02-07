<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagelist;
use App\Models\Metadata;

class MetatagController extends Controller
{
    public function pageList()
    {
        $pages = Pagelist::all();
        return view('admin.page.list',compact('pages'));
    }


    public function metaContentEdit(Request $request,$id)
    {
        $title = Pagelist::where('id',$id)->first();
        $metadata = Metadata::where('id',$id)->first();
        if(!isset($metadata))
        {
            return view('admin.page.update_meta',compact('title'));
        }
        else
        {
            return view('admin.page.update_meta',compact('title','metadata'));
        }
    }

    public function metaContentUpdate(Request $request,$id)
    {
        $data = Metadata::where('id',$id)->first();
        if(isset($data))
        {
            $data->page_title = $request->page_title;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;
            $data->meta_author = $request->meta_author;
            $data->save();
        }
        else
        {
            $data = new Metadata;
            $data->page_title = $request->page_title;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;
            $data->meta_author = $request->meta_author;
            $data->save();
        }
        return redirect()->back()
                ->with('success','Meta Contents Successfully Updated!');
    }
}
