<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.index');
    }
    public function login()
    {
        return view('vendor.login');
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.profile', compact('vendorData'));
    }
    public function profileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->vendor_join = $request->vendor_join;
        $data->vendor_short_info = $request->vendor_short_info;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/vendor/images/' . $data->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/vendor/images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Cập nhật thông tin tài khoản người bán thành công',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function changePassword()
    {
        return view('vendor.change-password');
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

        return redirect('vendor/login');
    }
}
