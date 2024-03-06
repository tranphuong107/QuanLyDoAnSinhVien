@extends('pages_gv.master')

@section('title', 'Giáo dục | Thông báo chi tiết')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/thongbaochitiet.css')}}">
@endsection

@section('content')
       <div class="content" style="">  
             <div class ="back"style="background-color:#e9e9e9;width:30px;height:30px; border-radius:50%">
                <a href="{{URL::to('/thongbaogv')}}" style="color:#333;text-decoration:none">
                    <i class="bi bi-arrow-left ms-1" style="font-size:20px;"></i>
                </a>
            </div> 
             <div class="py-2 px-5 m-auto " style="border-radius:5px;">
                <div class="noidungthongbao " >
                            <div class="mb-5">
                               <h3 class="text-center" style="font-weight:500!important">Danh sách phân công GVHD ĐATN ngành CNTT Học kỳ 2 năm học 2022-2023</h3>
                                <span style="margin-left:8%;margin-right:8%"><i class="bi bi-clock me-2"></i>23/03/2023</span>

                            </div>
                            <div style="margin-left:8%;margin-right:8%">
                            <h6 class=" mt-4">Nội dung:</h6>
                            <div class="file-preview mt-4">
                                    <span>File đính kèm</span>
                            </div>
                            <pre>Thân gửi các em sinh viên,
                                
Khoa gửi đến các em danh sách phân công giáo viên hướng dẫn đồ án tốt nghiệp cho các em sinh viên ngành HTTT.
Đề nghị các em liên hệ ngay đến các thầy cô hướng dẫn để làm đề cương nộp đúng hạn. 
Mọi thắc mắc gì các em liên hệ với bộ môn HTTT (qua email: tmtuan@tlu.edu.vn).</pre>

                </div>     
                </div>           
            </div>
         </div>
@endsection
@section('scripts')
<script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection