<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::findOrFail($request->profile_id);
        return view('backend.profile.edit', compact('user'));
    }

    public function uploadFile($file)
    {
        $imageName = 'PROFILE_'.time() . '.' . $file->extension();
        $file->move(public_path('upload/images'), $imageName);
        return $imageName;
    }

    public function update(Request $request)
    {
        try {

            $file = $request->file('profile_photo_path');
            $user = User::findOrFail($request->profile_id);
            $data = [
                'name'  => $request->name,
                'email'  => $request->email,
                'profile_photo_path' => $this->uploadFile($file)
            ];

            // dd($data);
            // if (isset($file)) {
            //     $user->update(
            //         ['profile_photo_path' => $this->uploadFile($file)]
            //     );
            // }
            $user->update($data);
            Toastr::success('Profile Updated Successfully');
            return redirect()->route('report.index');
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            Toastr::error('Profile Updated Failed');
            return back();
        }
    }
}
