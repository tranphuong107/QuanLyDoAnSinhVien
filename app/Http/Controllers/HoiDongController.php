<?php

namespace App\Http\Controllers;

use App\Models\Council;
use App\Models\ShowHoiDong;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoiDongController extends Controller
{
    public function index(Request $request)
    {
        $userModel = new ShowHoiDong();
        $query = $request->input('query');
        $data = $userModel->getData($query);
    
        if ($query && $data->count() == 0) {
            return redirect()->back()->with('error', 'Không tìm thấy hội đồng này');
        } else {
            $councils = Council::withCount('lecturer');
            if (!empty($query)) {
                $councils->where('CouncilName', 'like', '%'.$query.'%');
            }
            $councils = $councils->get();
            return view('admin.quanlyhdpb', compact('data', 'query','councils'))->with('i',(request()->input('page',1)-1)*7);
        }
    }
    public function delete_hoidong($ID){
        $user_id = Council::find($ID)->ID;
        if (!$user_id) {
            return redirect()->back()->with('error', 'Không tồn tại người dùng này');
        } else {
            try {
                DB::statement("SET FOREIGN_KEY_CHECKS=0;");
                $delete_user = Council::where('ID', $user_id)->firstOrFail();
                $delete_user->delete();
                DB::statement("SET FOREIGN_KEY_CHECKS=1;");
                return redirect()->back()->with('success', 'Xóa thành công');
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Không thể xóa bản ghi');
            }
        }
    }
    public function show($id)
    {
    $council = Council::findOrFail($id);
    $lecturers = $council->lecturer()->with('researches')->get();
    return view('admin.show', compact('council', 'lecturers'));
    }
    public function save_hoidong(Request $request){
        $username_hoidong = $request->username_hoidong;
        $username_gv = $request->username_gv;
        $magv = $request->magv;
        $department = $request->department;
        $research = $request->research;
        if($username_hoidong == "" || $username_gv == "" || $magv == "" || $department == "" || $research == ""){
            return redirect()->back()->with('error','Mời nhập đầy đủ thông tin');
        }
    }
}
