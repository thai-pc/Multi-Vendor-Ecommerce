<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile', compact('adminData'));
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
            @unlink(public_path('uploads/admin/images/' . $data->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/admin/images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Cập nhật thông tin tài khoản quản trị thành công',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changePassword()
    {
        return view('admin.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8'
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->with('error', 'Mật khẩu cũ không đúng');
        }
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with('status', 'Đổi mật khẩu thành công');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }
}
