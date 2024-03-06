<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $admin_acc = $request->input('admin_acc');
        $admin_pass = $request->input('admin_pass');
        if ($admin_acc == "" || $admin_pass == "") {
            Session::put('message', 'Chưa điền đủ thông tin');
            return redirect('/');
        }
         else {
            $result = Account::checkAccount($admin_acc, $admin_pass);
            if ($result) {
                $role_id = $result->Role_id;
                if ($role_id == 1) {
                    session()->put('FullName', $result->FullName);
                    session()->put('ID', $result->ID);
                    session()->put('UserName', $result->UserName);
                    session()->put('Password', $result->Password);
                    session()->put('Role_id', $result->Role_id);
                    return redirect('/home_admin');
                } else if ($role_id == 2) {
                    session()->put('FullName', $result->FullName);
                    session()->put('ID', $result->ID);
                    session()->put('UserName', $result->UserName);
                    session()->put('Password', $result->Password);
                    return redirect('/home_giangvien');
                } else if ($role_id == 3) {
                    session()->put('FullName', $result->FullName);
                    session()->put('ID', $result->ID);
                    session()->put('UserName', $result->UserName);
                    session()->put('Password', $result->Password);
                    return redirect('/home_sinhvien');
                }
            } else {
                Session::put('message', 'Tên đăng nhập hoặc mật khẩu không đúng.');
                return redirect('/');
            }
        }
    }

    public function change_password(Request $request, $ID)
    {
        $account = User::with('accounts')->where('ID', $ID)->first();
        $old_password = $request->input('pass_old');
        $new_password = $request->input('pass_new');
        $new_password_confirmation = $request->input('pass_new_check');
        if ($old_password == "" || $new_password == "" || $new_password_confirmation == "") {
            return redirect()->back()->with('error', 'Chưa điền đủ thông tin');
        } elseif (!$account) {
            return back()->with('error', 'Không tồn tại người dùng này');
        } elseif ($old_password != $account->accounts->Password) {
            return back()->with('error', 'Vui lòng nhập đúng mật khẩu hiện tại');
        } elseif ($new_password != $new_password_confirmation) {
            return back()->with('error', 'Mật khẩu không khớp');
        } elseif (strlen($new_password) < 8) {
            return back()->with('error', 'Mật khẩu phải lớn hơn 8 ký tự');
        }
         else {
            $account->accounts->Password = $new_password;
            $account->accounts->save();
            return back()->with('success', 'Mật khẩu đã được thay đổi thành công');
        }
    }
    public function logout()
    {
    session()->forget('FullName');
    session()->forget('ID');
    session()->forget('UserName');
    session()->forget('Password');
    session()->forget('Role_id');
    return redirect('/');
    }
}
