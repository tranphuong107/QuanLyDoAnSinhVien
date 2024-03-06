<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GiangVienController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\CreateStudentController;
use App\Http\Controllers\DoAnController;
use App\Http\Controllers\HoiDongController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});
Route::get('/login',[LoginController::class,'login']);
Route::post('/change_password/{ID}',[LoginController::class,'change_password']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('/home_admin',[AdminController::class,'home_admin']);
Route::get('/quanlydt',[AdminController::class,'quanlydt']);
Route::get('/quanlygv',[AdminController::class,'quanlygv']);
Route::get('/quanlysv',[AdminController::class,'quanlysv']);
Route::get('/thongtinad/{ID}',[AdminController::class,'thongtinad']);
Route::get('/doimatkhau_admin/{ID}',[AdminController::class,'doimatkhau']);
Route::get('/add_student',[AdminController::class,'add_student']);
Route::get('/add_hoidong',[AdminController::class,'add_hoidong']);
Route::get('add_lecturers',[AdminController::class,'add_lecturers']);

Route::get('/home_giangvien',[GiangVienController::class,'home_giangvien']);
Route::get('lecturers-list',[GiangVienController::class,'index']);


Route::post('savelecturers',[GiangVienController::class,'savelecturers']);
Route::delete('delete-lecturer/{ID}',[GiangVienController::class,'deletelecturer']);
Route::get('update-lecturer/{ID}',[GiangVienController::class,'updatelecturer']);
Route::post('xuly_capnhat_lecturer/{ID}',[GiangVienController::class,'xuly_capnhat']);

Route::get('student-list',[SinhVienController::class,'index']);
Route::get('student-list-sv',[SinhVienController::class,'index_sv']);
Route::post('save-student',[SinhVienController::class,'savestudent']);
Route::post('save-hoidong',[HoiDongController::class,'save_hoidong']);
Route::get('update-student/{ID}',[SinhVienController::class,'updatestudent']);
Route::post('xuly_capnhat/{ID}',[SinhVienController::class,'xuly_capnhat']);
Route::delete('delete-student/{ID}',[SinhVienController::class,'deletestudent']);
Route::delete('delete-hoidong/{ID}',[HoiDongController::class,'delete_hoidong']);
Route::get('/home_sinhvien',[SinhVienController::class,'home_sinhvien']);

Route::get('quanlydt',[DoAnController::class,'index']);
Route::get('quanlydt_phancong/{ID}',[DoAnController::class,'quanlydt_phancong']);
Route::get('phancong_gv_sv/{ID}/{ID2}/{ID3}',[DoAnController::class,'xuly_phancong']);

Route::get('hoidong-list',[HoiDongController::class,'index']);
Route::get('ds-gv/{ID}',[HoiDongController::class,'show']);



// route giảng viên
Route::get('/home_giangvien',[GiangVienController::class,'home_giangvien']);

Route::get('/student-list-sv/{ID}', [SinhVienController::class, 'index_sv'])->name('student-list-sv');
Route::get('/doimatkhaugv/{ID}',[GiangVienController::class,'doimatkhaugv'])->name('doimatkhaugv');
Route::get('/thongtincanhangv/{ID}',[GiangVienController::class,'thongtincanhangv']);
Route::get('/sinhvienphutrach/{ID}',[SinhVienController::class,'sinhvienphutrach']);
Route::post('/update-status', [SinhVienController::class, 'updateStatus'])->name('update-status');
Route::get('/giaonhiemvu/{ID}',[SinhVienController::class,'giaonhiemvu']);


Route::get('/giaonhiemvu',function () {
    return view('pages_gv.giaonhiemvu');
});
Route::get('/quanlysinhvien', function () {
    return view('pages_gv.quanlysinhvien');
});
Route::get('/quanlytiendodoan', function () {
    return view('pages_gv.quanlytiendodoan');
});
Route::get('/sinhvienphutrach', function () {
    return view('pages_gv.sinhvienphutrach');
});
Route::get('/thongbaogv', function () {
    return view('pages_gv.thongbaogv');
});
Route::get('/thongbaochitietgv', function () {
    return view('pages_gv.thongbaochitiet');
});
Route::get('/thongtincanhangv', function () {
    return view('pages_gv.thongtincanhan');
});
Route::get('/xemtiendo', function () {
    return view('pages_gv.xemtiendo');
});
Route::get('/doimatkhaugv', function () {
    return view('pages_gv.doimatkhaugv');
});
Route::get('/datatable', function () {
    return view('pages_sv.datatable');
});
Route::get('/xembaocaogv', function () {
    return view('pages_gv.xembaocaogv');
});
//sprint 2
Route::get('/thongke', function () {
    return view('pages_gv.thongke');
});

//sinhvien
Route::get('/sinhvien', function () {
    return view('index');
});


Route::get('/trangchu', function () {
    return view('pages_sv.home');
});

Route::get('/formdangkydetai', function () {
    return view('pages_sv.formdangkydetai');
});
// Route::get('/ketquadangky', function () {
//     return view('pages_sv.ketquadangky');
// });
Route::get('/ketquadangky/{ID}',[SinhVienController::class,'KetQuaDangKyDeTai'])->name('ketquadangky');
// Route::get('/quanlytiendo', function () {
//     return view('pages_sv.quanlytiendo');
// });
Route::get('/xembaocao', function () {
    return view('pages_sv.xembaocao');
});
Route::get('/thongbao', function () {
    return view('pages_sv.thongbao');
});
// Route::get('/thongbaochitiet', function () {
//     return view('pages_sv.thongbaochitiet');
// });
Route::get('/thongtincanhan/{ID}', [SinhVienController::class,'ShowStudentInfor'])->name('thongtincanhan');

Route::get('/doimatkhau', function () {
    return view('pages_sv.doimatkhau');
});
// Route::get('/doimatkhau/{ID}',[SinhVienController::class,'doimatkhau']);
Route::get('/quanlytiendo/{ID}',[SinhVienController::class,'TienDoDoAn'])->name("quanlytiendo");
Route::get('/dangkydetai',[SinhVienController::class,'ShowInforLecturerinTopic']);
Route::get('/dangkydetai/{id}', 'LecturerController@showInforLecturerByID');
Route::get('/thongbao', [AnnouncementController::class, 'showAnnouncements']);
Route::get('/thongbaochitiet/{id}', [AnnouncementController::class, 'showAnnouncement'])->name('thongbaochitiet');
//sprint 2
// Route::get('/tracuudiem', function () {
//     return view('pages_sv.tracuudiem');
// });
Route::get('/tracuudiem/{ID}',[SinhVienController::class,'traCuDiem'])->name('tracuudiem');

// for side bar menu active
function set_active($route){
    $routeName = request()->route()->getName();
    if(is_array($route)){
        return in_array($routeName,$route) || in_array(Request::path(),$route) ? "activeList" : "";
    }
    return Request::path() == $route ? "activeList" :"";
}