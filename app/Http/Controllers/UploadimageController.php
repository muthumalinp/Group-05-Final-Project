<?php

namespace App\Http\Controllers;

use App\Models\uploadimage;
use Illuminate\Http\Request;

class UploadimageController extends Controller
{
    public function imageUp()
    {
        $uploadimage = uploadimage::all();
        return view('project.owner.uploadimage.imageUp', compact('uploadimage'));
    }
    public function create()
    {
        return view('project.owner.uploadimage.create');
    }
    public function store(Request $request)
    {
        $uploadimage = new uploadimage;
        $uploadimage->page_name = $request->input('page_name');
        $uploadimage->image_name = $request->input('image_name');
        if($request->hasfile('profile_image'))
        {

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/uploadimages/', $filename);
            $uploadimage->profile_image = $filename;

        }
        $uploadimage->save();
        return redirect()->back()->with('status','Image Added Successfully');
    }

   

    public function edit($id){
        $uploadimage = uploadimage::find($id);
        return view('project.owner.uploadimage.create.edit');
    }

}
