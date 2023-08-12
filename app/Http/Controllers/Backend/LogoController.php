<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::first();
        return view('backend.cms.logo.index', compact('logo'));
    }
    public function update(Request $request, $id)
    {
        try {
            $data = [];
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('upload/images/',$fileName);
                $data['image'] = $fileName;
                Logo::where('id',$id)->update($data);
            }
            Toastr::success('Updated Successfully');
            return back();
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Updated Failed');
            DB::rollback();
        }
    }
}
