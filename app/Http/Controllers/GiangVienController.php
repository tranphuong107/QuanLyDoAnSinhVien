<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Role;
use App\Models\ShowLecturer;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiangVienController extends Controller
{
    public function home_giangvien()
    {
        return view('pages_gv.home');
    }
    public function index(Request $request)
    {
        $userModel = new ShowLecturer();
        $query = $request->input('query');
        $datagv = $userModel->getData($query);
        if ($query && $datagv->count() == 0) {
            return redirect()->back()->with('error', 'Không tìm thấy giảng viên này');
        } else {
            return view('admin.quanlygv', compact('datagv', 'query'))->with('i',(request()->input('page',1)-1)*7);
        }
    }
    public function deletelecturer($LecturerId)
    {
        $user_id = User::find($LecturerId)->ID;
        if (!$user_id) {
            return redirect()->back()->with('error', 'Không tồn tại người dùng này');
        } else {
            try {
                $delete = Account::where('User_id', $user_id)->firstOrFail();
                $delete->delete();
                DB::statement("SET FOREIGN_KEY_CHECKS=0;");
                $delete_user = User::where('ID', $user_id)->firstOrFail();
                $delete_user->delete();
                DB::statement("SET FOREIGN_KEY_CHECKS=1;");
                return redirect()->back()->with('success', 'Xóa thành công');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Không thể xóa bản ghi');
            }
        }
    }
    
    public function thongtincanhangv($ID)
    {
        $datagv = User::join('lecturers', 'users.ID', '=', 'lecturers.User_id')
            ->join('departments', 'lecturers.Department_id', '=', 'departments.ID')
            ->select('users.*','lecturers.LecturerCode', 'lecturers.Degree','lecturers.Position','departments.DepartmentName')
            ->where('users.ID', $ID)
            ->first();

        return view('pages_gv.thongtincanhan', ['data' => $datagv]);
    }
    public function doimatkhaugv($ID)
    {

        $data = User::with('accounts')->find($ID);
        return view('pages_gv.doimatkhaugv', ['data' => $data]);
    }
    

    public function savelecturers(Request $request)
    {
        $name = $request->name_gv;
        $hometown = $request->hometown;
        $religion = $request->religion;
        $email = $request->email;
        $position = $request->position;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $cccd = $request->cccd;
        $magv = $request->magv;
        $degree = $request->degree;
        $address = $request->address;
        $nation = $request->nation;
        $phone = $request->phone;
        $department = $request->department;
        $image = $request->image;

        if ($name == "" || $hometown == "" || $religion == "" || $email == "" ||
            $position == "" || $gender == "" || $cccd == "" ||
            $magv == "" || $degree == "" || $address == "" || $nation == "" || $phone == "" || $department == "") {
            return redirect()->back()->with('error', 'Vui lòng điền đầy đủ thông tin');
        } else {
            $user = User::where('Email', $email)->first();
            $lecturercode = Lecturer::where('LecturerCode', $magv)->first();

            if ($user) {
                return redirect()->back()->with('error', 'Email đã tồn tại');
            } elseif ($lecturercode) {
                return redirect()->back()->with('error', 'Mã giảng viên đã tồn tại');
            } elseif (!preg_match('/^[\p{L}\d\s]+$/u', $address)) {
                return redirect()->back()->with('error', 'Nơi sinh chỉ được nhập các ký tự chữ cái, số và khoảng trắng');
            }
            elseif($birthday > date('Y-m-d')){
                return redirect()->back()->with('error', 'Vui lòng nhập lại ngày sinh');
            }
             elseif (!preg_match('/^[\p{L}\s]+$/u', $name)) {
                return redirect()->back()->with('error', 'Tên giảng viên chỉ được nhập các ký tự chữ cái và khoảng trắng');
            }elseif (!preg_match('/^[\p{L}\d\s]+$/u', $address)) {
                return redirect()->back()->with('error', 'Nơi sinh chỉ được nhập các ký tự chữ cái, số và khoảng trắng');
            }
             elseif (preg_match('/[^0-9]/', $cccd)) {
                return redirect()->back()->with('error', 'Căn cước không điền chữ hoặc kí tự đặc biệt');
            } elseif (preg_match('/[^0-9]/', $phone)) {
                return redirect()->back()->with('error', 'Số điện thoại không điền chữ hoặc kí tự đặc biệt');
            } elseif (preg_match('/[^0-9]/', $magv)) {
                return redirect()->back()->with('error', 'Mã giảng viên không điền chữ hoặc kí tự đặc biệt');
            } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
                return redirect()->back()->with('error', 'Email không hợp lệ');
            } else {
                try {
                    $user = User::create([
                        'FullName' => $name,
                        'DateOfBirth' => $birthday,
                        'Gender' => $gender,
                        'Email' => $email,
                        'PhoneNumber' => $phone,
                        'Address' => $address,
                        'Hometown' => $hometown,
                        'Identity' => $cccd,
                        'Image' => $image,
                        'Nation' => $nation,
                        'Religion' => $religion,
                    ]);

                    $account = new Account([
                        'UserName' => $magv,
                        'Password' => $cccd,
                    ]);
                    $role = Role::where('ID', 2)->firstOrFail();
                    $account->user()->associate($user);
                    $account->roles()->associate($role);
                    $account->save();

                    $lecturer = new Lecturer([
                        'LecturerCode' => $magv,
                        'Degree' => $degree,
                        'Position' => $position,
                    ]);
                    $depart = Department::where('ID', $department)->firstOrFail();
                    $lecturer->user()->associate($user);
                    $lecturer->department()->associate($depart);
                    $lecturer->save();

                    return redirect()->back()->with('success', 'Thêm giảng viên thành công');
                } catch (Exception $e) {
                    return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật thông tin. Vui lòng thử lại sau.');
                }
            }
        }
    }
    public function updatelecturer($ID)
    {
        $data = User::with('lecturer.department')
            ->find($ID);
        return view('admin.updatet_lecturers', ['data' => $data]);
    }
    public function xuly_capnhat(Request $request, $ID)
    {
        $name = $request->name_gv;
        $hometown = $request->hometown;
        $religion = $request->religion;
        $email = $request->email;
        $position = $request->position;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $cccd = $request->cccd;
        $magv = $request->magv;
        $degree = $request->degree;
        $address = $request->address;
        $nation = $request->nation;
        $phone = $request->phone;
        $department = $request->department;
        $image = $request->image;

        if ($name == "" || $gender == "" || $email == "" || $phone == "" ||
            $nation == "" || $magv == "" || $hometown == "" ||
            $address == "" || $cccd == "" || $religion == "" || $degree == ""
            || $position == "" || $department == "") {
            return redirect()->back()->with('error', 'Vui lòng điền đầy đủ thông tin');
        } elseif (!preg_match('/^[\p{L}\s]+$/u', $name)) {
            return redirect()->back()->with('error', 'Tên sinh viên chỉ được nhập các ký tự chữ cái và khoảng trắng');
        }elseif (!preg_match('/^[\p{L}\d\s]+$/u', $address)) {
            return redirect()->back()->with('error', 'Nơi sinh chỉ được nhập các ký tự chữ cái, số và khoảng trắng');
        }
        elseif($birthday > date('Y-m-d')){
            return redirect()->back()->with('error', 'Vui lòng nhập lại ngày sinh');
        }
         elseif (preg_match('/[^0-9]/', $cccd)) {
            return redirect()->back()->with('error', 'Căn cước không điền chữ hoặc kí tự đặc biệt');
        } elseif (preg_match('/[^0-9]/', $phone)) {
            return redirect()->back()->with('error', 'Số điện thoại không điền chữ hoặc kí tự đặc biệt');
        } elseif (preg_match('/[^0-9]/', $magv)) {
            return redirect()->back()->with('error', 'Mã giảng viên không điền chữ hoặc kí tự đặc biệt');
        } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            return redirect()->back()->with('error', 'Email không hợp lệ');
        } else {

            try {
                $user = User::find($ID);
                $user = User::where('ID', $ID)->first();
                $user->FullName = $name;
                $user->DateOfBirth = $birthday;
                $user->Gender = $gender;
                $user->Email = $email;
                $user->PhoneNumber = $phone;
                $user->Address = $address;
                $user->Hometown = $hometown;
                $user->Identity = $cccd;
                $user->Image = $image;
                $user->Nation = $nation;
                $user->Religion = $religion;
                $user->update();

                $lecturer = Lecturer::where('User_id', $ID)->first();
                $depart = Department::where('ID', $department)->firstOrFail();
                $depart->DepartmentName = $department;
                $lecturer->LecturerCode = $magv;
                $lecturer->Degree = $degree;
                $lecturer->Position = $position;
                $lecturer->department()->associate($depart);
                $lecturer->update();

                $account = Account::where('User_id', $ID)->first();
                $role = Role::where('ID', 2)->firstOrFail();
                $account->UserName = $magv;
                $account->roles()->associate($role);
                $account->update();

                return redirect()->back()->with('success', 'Cập nhật thành công');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Thông tin này đã có trên dữ liệu');
            }
        }
    }
}
