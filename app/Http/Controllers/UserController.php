<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.profile', compact('userData'));
    }
    public function profileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/user/images/' . $data->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/user/images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Cập nhật thông tin tài khoản nguười dùng thành công',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
