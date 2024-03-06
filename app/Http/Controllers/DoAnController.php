<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\PhanCong;
use App\Models\PhanCongSV;
use App\Models\Research;
use App\Models\Student;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class DoAnController extends Controller
{
    public function index(Request $request)
    {
        $userModel = new PhanCongSV();
        $data = $userModel->getData();
        if ($data->count() == 0) {
            return view('admin.quanlydt')->with('data', $data);
        }else{
            return view('admin.quanlydt', compact('data'))->with('i',(request()->input('page',1)-1)*7);
        }
        
    }

    public function quanlydt_phancong($ID)
    {
        $userModel = new PhanCong();
        $data = $userModel->getData($ID);
        $datagv = $userModel->getDataGV();
        return view('admin.phancong', compact('data', 'ID', 'datagv'))->with('i',(request()->input('page',1)-1)*7);
    }
    public function xuly_phancong(Request $request,  $ID, $ID2,$ID3)
    {
        $datasv = Student::where('ID',$ID)->first();
        $datagv = Lecturer::where('ID',$ID2)->first();
        $datatop = Research::where('ID',$ID3)->first();
    
        if (!$datasv) {
            return redirect()->back()->with('error', 'Lỗi không tìm thấy thông tin sinh viên');
        }elseif(!$datagv){
            return redirect()->back()->with('error', 'Lỗi không tìm thấy thông tin giảng viên');
        }elseif(!$datatop){
            return redirect()->back()->with('error', 'Lỗi không tìm thấy thông tin hướng nghiên cứu');
        }
        else{
            $topic = new Topic();
            $topic->Student_id = $datasv->ID;
            $topic->Lecturer_id = $datagv->ID;
            $topic->Research_id = $datatop->ID;
            $topic->save();
            return redirect()->back()->with('success', 'Phân công thành công');
        }
    }
}
