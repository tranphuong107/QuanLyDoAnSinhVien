@extends('pages_gv.master')

@section('title', 'Giáo dục | Thông báo ')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/thongbao.css')}}">
@endsection

@section('content')
       <div class="content content-thongbao" style="">
       <h5 style="text-align:center; color:#0071C6">THÔNG BÁO</h5>
               <div class="box-search p-2" style="">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input type="search" placeholder="Tìm kiếm ở đây... ">
               </div>
               <div class="py-3 thongbao">
                    <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                        <div class="thongbao-item">
                            <h6>Danh sách phân công GVHD ĐATN ngành CNTT Học kỳ 2 năm học 2022-2023</h6>
                            <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                        </div>
                   </a>  
                   <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                    <div class="thongbao-item">
                        <h6>Thông báo GVHD của sinh viên ngành HTTT đủ điều kiện thực hiện HPTN kỳ 2 năm học 2022-2023</h6>
                        <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                    </div>
                   </a>
                   <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                        <div class="thongbao-item">
                            <h6>Danh sách phân công GVHD ĐATN ngành CNTT Học kỳ 2 năm học 2022-2023</h6>
                            <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                        </div>
                   </a>  
                   <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                    <div class="thongbao-item">
                        <h6>Thông báo GVHD của sinh viên ngành HTTT đủ điều kiện thực hiện HPTN kỳ 2 năm học 2022-2023</h6>
                        <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                    </div>
                   </a>
                   <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                        <div class="thongbao-item">
                            <h6>Danh sách phân công GVHD ĐATN ngành CNTT Học kỳ 2 năm học 2022-2023</h6>
                            <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                        </div>
                   </a>  
                   <a href="{{URL::to('/thongbaochitietgv')}}" style="color:#000;text-decoration:none">
                    <div class="thongbao-item">
                        <h6>Thông báo GVHD của sinh viên ngành HTTT đủ điều kiện thực hiện HPTN kỳ 2 năm học 2022-2023</h6>
                        <span><i class="bi bi-clock me-2"></i>23/03/2023</span>
                    </div>
                   </a>
               </div>
            </div>
        </div>
@endsection
@section('scripts')
<script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection


