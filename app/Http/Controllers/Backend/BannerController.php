<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BannerController extends Controller
{
    public function index()
    {
        $banner  = Banner::first();
        return view('backend.cms.banner.index',compact('banner'));
    }
    public function update(Request $request, $id)
    {
       $data = [
        'title' => $request->title,
        'description' => $request->description,
       ];

       try{

        if($request->hasFile('image'))
        {
         $file = $request->file('image');
         $fileName = time().'.'.$file->getClientOriginalExtension();
         $file->move('upload/banner',$fileName);
         $data['image'] = $fileName;
        }
        Banner::where('id',$id)->update($data);
        Toastr::success('Updated Successfully');
            return back();
       }catch (Throwable $th) {
        Log::error($th->getMessage());
        Toastr::error('Updated Failed');
        DB::rollback();
    }
    }
}
