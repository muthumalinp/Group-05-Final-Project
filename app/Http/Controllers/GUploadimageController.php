<?php

namespace App\Http\Controllers;
use App\Models\guploadimage;

use Illuminate\Http\Request;

class GUploadimageController extends Controller
{
    public function gimageUp()
    {
        $guploadimage = guploadimage::all();
        return view('project.owner.uploadimage.gimageUp', compact('guploadimage'));
    }
    public function gcreate()
    {
        return view('project.owner.uploadimage.gcreate');
    }
    public function gstore(Request $request)
    {
        $guploadimage = new guploadimage;
        $guploadimage->page_name = $request->input('page_name');
        $guploadimage->image_name = $request->input('image_name');
        if($request->hasfile('profile_image'))
        {

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/guploadimages/', $filename);
            $guploadimage->profile_image = $filename;

        }
        $guploadimage->save();
        return redirect()->back()->with('status','Image Added Successfully');
    }
}
