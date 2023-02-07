<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Resume;

class CareerController extends Controller
{
    public function add()
    {
        return view('admin.career.add_openings');
    }

    public function save(Request $request)
    {
        $data = $request->only([
            'job_title','job_location','job_type','job_skills','job_vacancy',
            'job_experience','job_gender','job_qualification','job_expiry_date',
            'job_description'
        ]);
        
        Career::create($data);
        return redirect()->back()
                ->with('success','Your Data is Successfully Stored!');
    }

    public function view()
    {
        $datas = Career::all();
        return view('admin.career.view_openings',compact('datas'));
    }

    public function changeStatus(Request $request)
    {
        $data = Career::where('id',$request->id)->first();
        $data->status = $request->status;
        $data->save();
        return response()->json(['status'=>'200']);
    }

    public function edit(Request $request,$id)
    {
        $data = Career::where('id',$request->id)->first();
        return view('admin.career.edit_openings',compact('data'));
    }

    public function update(Request $request)
    {
        $data = $request->only([
            'job_title','job_location','job_type','job_skills','job_vacancy',
            'job_experience','job_gender','job_qualification','job_expiry_date',
            'job_description'
        ]);
        Career::where('id',$request->id)->update($data);
        return redirect()->back()
                ->with('success','Your Data is Successfully Updated!!');
    }

    public function delete(Request $request)
    {
        $data = Career::where('id',$request->id)->first();
        $data->delete();
        return response()->json(['status'=>'200','success'=>'Successfully Deleted!!']);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('/admin/career/'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/admin/career/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function viewApplications()
    {
        $resumes = Resume::all();
        return view('admin.career.view_applications',compact('resumes'));
    }

    public function editApplications(Request $request,$id)
    {
        $resume = Resume::where('id',$request->id)->first();
        return view('admin.career.edit_applications',compact('resume'));
    }
}
