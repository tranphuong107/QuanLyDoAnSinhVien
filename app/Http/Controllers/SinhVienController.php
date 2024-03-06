<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Classes;
use App\Models\DeleteStudent;
use App\Models\Department;
use App\Models\DetailResearch;
use App\Models\Lecturer;
use App\Models\Major;
use App\Models\Research;
use App\Models\Role;
use App\Models\ShowLecturer;
use App\Models\ShowStudent;
use App\Models\Student;
use App\Models\Topic;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Paginator;

class SinhVienController extends Controller
{
    public function home_sinhvien()
    {
        return view('pages_sv.home');
    }
    public function index(Request $request)
    {
        $userModel = new ShowStudent();
        $query = $request->input('query');
        $data = $userModel->getData($query);
        if ($query && $data->count() == 0) {
            return redirect()->back()->with('error', 'Không tìm thấy sinh viên này');
        } else {
            return view('admin.quanlysv', compact('data', 'query'))->with('i',(request()->input('page',1)-1)*7);
        }
    }

    public function index_sv($ID, Request $request)
    {   
        $userModel = new ShowStudent();
        $query = $request->input('query');
        $datasv = $userModel->getDataSV($ID,$query);
        if ($query && $datasv->count() == 0) {
            return redirect()->back()->with('error', 'Không tìm thấy sinh viên này');
        } else {
            return view('pages_gv.quanlysinhvien', compact('datasv', 'query'))->with('i',(request()->input('page',1)-1)*7);
        }
    }
    public function sinhvienphutrach($ID, Request $request)
    {   
        $userModel = new ShowStudent();
        $query = $request->input('query');
        $datasv = $userModel->getDataSV_PhuTrach($ID,$query);
        if ($query && $datasv->count() == 0) {
            return redirect()->back()->with('error', 'Không tìm thấy sinh viên này');
        } else {
            return view('pages_gv.sinhvienphutrach', compact('datasv', 'query'))->with('i',(request()->input('page',1)-1)*7);
        }
    }
    public function updateStatus(Request $request)
    {
        $topicId = $request->input('ID');
        $status = $request->input('Status');
    
        // Thực hiện cập nhật giá trị Status trong bảng topics
        // Cập nhật dữ liệu theo $topicId và $status
    
        // Trả về phản hồi thành công cho client (nếu cần)
        return response()->json(['success' => true]);
    }
    
    public function deletestudent($studentId)
    {
        $user_id = User::find($studentId)->ID;
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
    public function savestudent(Request $request)
    {
        $name = $request->name;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $nation = $request->nation;
        $cccd = $request->cccd;
        $hometown = $request->hometown;
        $lop = $request->lop;
        $masv = $request->masv;
        $religion = $request->religion;
        $image = $request->image;
        $major_name = $request->major_name;

        if (
            $name == "" || $gender == "" || $email == "" || $phone == "" ||
            $lop == "" || $nation == "" || $masv == "" || $hometown == "" ||
            $address == "" || $cccd == "" || $religion == "" || $major_name == ""
        ) {
            return redirect()->back()->with('error', 'Vui lòng điền đầy đủ thông tin');
        } else {
            $user = User::where('Email', $email)->first();
            $studentcode = Student::where('StudentCode', $masv)->first();
           
            if ($user) {
                return redirect()->back()->with('error', 'Email đã tồn tại');
            }elseif($birthday > date('Y-m-d')){
                return redirect()->back()->with('error', 'Vui lòng nhập lại ngày sinh');
            }
             elseif ($studentcode) {
                return redirect()->back()->with('error', 'Mã sinh viên đã tồn tại');
            } elseif (!preg_match('/^[\p{L}\s]+$/u', $name)) {
                return redirect()->back()->with('error', 'Tên sinh viên chỉ được nhập các ký tự chữ cái và khoảng trắng');
            }elseif (!preg_match('/^[\p{L}\d\s]+$/u', $address)) {
                return redirect()->back()->with('error', 'Nơi sinh chỉ được nhập các ký tự chữ cái, số và khoảng trắng');
            }
             elseif (preg_match('/[^0-9]/', $cccd)) {
                return redirect()->back()->with('error', 'Căn cước không điền chữ hoặc kí tự đặc biệt');
            } elseif (preg_match('/[^0-9]/', $phone)) {
                return redirect()->back()->with('error', 'Số điện thoại không điền chữ hoặc kí tự đặc biệt');
            } elseif (preg_match('/[^0-9]/', $masv)) {
                return redirect()->back()->with('error', 'Mã sinh viên không điền chữ hoặc kí tự đặc biệt');
            } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
                return redirect()->back()->with('error', 'Email không hợp lệ');
            }
             else {
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

                    $class = Classes::where('ID', $lop)->firstOrFail();
                    $role = Role::where('ID', 3)->firstOrFail();

                    $account = new Account([
                        'UserName' => $masv,
                        'Password' => $cccd,
                    ]);
                    $account->user()->associate($user);
                    $account->roles()->associate($role);
                    $account->save();
                    // Tạo sinh viên và gán cho user và class tương ứng
                    $student = new Student([
                        'StudentCode' => $masv,
                    ]);

                    $student->user()->associate($user);
                    $student->class()->associate($class);
                    $student->save();

                    return redirect()->back()->with('success', 'Thêm sinh viên thành công');
                } catch (Exception $e) {
                    return redirect()->back()->with('error', 'Có lỗi xảy ra khi thêm thông tin. Vui lòng thử lại sau.');
                }
            }
        }
    }
    public function updatestudent($ID)
    {
        $data = User::with('student.class.studentgroup', 'student.class.major')
            ->find($ID);
        return view('admin.updatet_students', ['data' => $data]);
    }
    public function xuly_capnhat(Request $request, $ID)
    {
        $name = $request->name;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $nation = $request->nation;
        $cccd = $request->cccd;
        $hometown = $request->hometown;
        $lop = $request->lop;
        $masv = $request->masv;
        $religion = $request->religion;
        $image = $request->image;
        $major_name = $request->major_name;

        if ($name == "" || $gender == "" || $email == "" || $phone == "" ||
            $lop == "" || $nation == "" || $masv == "" || $hometown == "" ||
            $address == "" || $cccd == "" || $religion == "" || $major_name == "") {
            return redirect()->back()->with('error', 'Vui lòng điền đầy đủ thông tin');
        } elseif (!preg_match('/^[\p{L}\s]+$/u', $name)) {
            return redirect()->back()->with('error', 'Tên sinh viên chỉ được nhập các ký tự chữ cái và khoảng trắng');
        }  elseif (!preg_match('/^[\p{L}\d\s]+$/u', $address)) {
            return redirect()->back()->with('error', 'Nơi sinh chỉ được nhập các ký tự chữ cái, số và khoảng trắng');
        }
        elseif($birthday > date('Y-m-d')){
            return redirect()->back()->with('error', 'Vui lòng nhập lại ngày sinh');
        }
        elseif (preg_match('/[^0-9]/', $cccd)) {
            return redirect()->back()->with('error', 'Căn cước không điền chữ hoặc kí tự đặc biệt');
        } elseif (preg_match('/[^0-9]/', $phone)) {
            return redirect()->back()->with('error', 'Số điện thoại không điền chữ hoặc kí tự đặc biệt');
        } elseif (preg_match('/[^0-9]/', $masv)) {
            return redirect()->back()->with('error', 'Mã sinh viên không điền chữ hoặc kí tự đặc biệt');
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

                $student = Student::where('User_id', $ID)->first();
                $class = Classes::where('ID', $lop)->firstOrFail();
                $class->ClassName = $lop;
                $student->StudentCode = $masv;
                $student->class()->associate($class);
                $student->update();

                $account = Account::where('User_id', $ID)->first();
                $role = Role::where('ID', 3)->firstOrFail();
                $account->UserName = $masv;
                $account->roles()->associate($role);
                $account->update();

                $major = Major::where('ID', $major_name)->firstOrFail();
                $class = Classes::where('ID', $student->class->ID)->firstOrFail();
                $class->major()->associate($major);
                $class->update();

                return redirect()->back()->with('success', 'Cập nhật thành công');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Thông tin sinh viên đã tồn tại');
            }
        }
    }
    public function ShowStudentInfor(Request $request, $ID)
    {
        $userModel = new Student();

        $student = $userModel->getInforStudent($ID);

        return view('pages_sv.thongtincanhan', compact('student'));
    }
    public function ShowInforLecturerinTopic(Request $request)
    {
        $lecturers = Lecturer::all();
        $researches = Research::all();

        return view('pages_sv.dangkydetai', compact('lecturers', 'researches'));
    }
    public function topicRegistrationForm(Request $request, $lecturerId)
    {
        $userId = intval(session()->get('ID'));
        $showLecturerModel = new ShowLecturer();
        $ResearchbyID = $showLecturerModel->getDatatoformTopic($lecturerId, [$userId]);
        return view('pages_sv.formdangkydetai', compact('ResearchbyID'));
    }
    public function ShowInforLecturerbyID(Request $request, $IDLecturers)
    {
        $lecturer = Lecturer::findOrFail($IDLecturers); // tìm giáo viên theo ID

        $researches = DetailResearch::where('Lecturer_id', $IDLecturers)->get(); // lấy hướng nghiên cứu của giáo viên theo ID

        
        return response()->json([
            'lecturer' => $lecturer,
            'researches'=>$researches,
        ]);
    }
    public function getIDStudent(Request $request, $ID)
    {
        $students = new Student();
        $idStudentbyIDUser = $students->getIDStudentbyIDUser($ID);
        return $idStudentbyIDUser;
    }

    public function storeTopic(Request $request)
    {
        $Topics = new Topic();
        $Topics->Title = $request->tendetai;

        $Topics->Research_id = $request->nghiencuu;


        $Topics->Lecturer_id  = $request->Lecturer_id;
        $Topics->Student_id  = $request->Student_id;
        $Topics->Status = 1;

        $Topics->RegistrationTime  = date("Y-m-d");

        $Topics->Description = $request->noidung;
        $Topics->GuidePoint = 0;
        $Topics->RebuttalPoint = 0;
        $Topics->ProtectionPoint = 0;
        $Topics->Average = 0;

        $Topics->save();
        return redirect()->back()->with('success', 'Thêm thành công');
    }
    public function doimatkhau($ID)
    {
        $data = User::with('accounts')->find($ID);
        return view('pages_sv.doimatkhau', ['data' => $data]);
    }
    public function KetQuaDangKyDeTai(Request $request, $ID){
        $userModel = new Student();
        $student = $userModel->getInforStudent($ID);
        $topicStudent = $userModel->getInforStudentTopic($ID);
        // var_dump($student);
        // die;
        return view('pages_sv.ketquadangky', compact('topicStudent','student'));
    }
    public function TienDoDoAn(Request $request, $ID){
        $userModel = new Student();
        $progressTopicStudent = $userModel->getProgressbyIDStudent($ID);
        // var_dump($progressTopicStudent);
        // die;
        return view('pages_sv.quanlytiendo', compact('progressTopicStudent'));
    }
    public function traCuDiem(Request $request, $ID){
        $userModel = new Student();
        $student = $userModel->getInforStudent($ID);
        $pointTopicStudent = $userModel->getPontbyIDStudent($ID);
        // var_dump($pointTopicStudent);
        // die;
        return view('pages_sv.tracuudiem', compact('pointTopicStudent','student'));
    }
}
