@extends('pages_gv.master')

@section('title', 'Giáo dục | Tạo nhiệm vụ')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/quanlytiendo.css')}}">
@endsection

@section('content')
            <div class="content" >
                <!-- <div class="box-dangky bg-white p-4" style="border-radius:5px;position:relative;padding-bottom:100px!important"> -->
                    <h5 class ="mb-1 " style="text-align:center; color:#0071C6;">TẠO NHIỆM VỤ</h5>
                    <div class="container-giaonv mt-3 " style="" >
                        <div class="mx-5 my-4 row" style="border:1px solid #ccc; border-radius:5px;">
                            <div class="mt-3 row" >
                                <span class="fw-bold ms-3 text-start col-4 " style="width:100px;">Sinh viên: </span>
                                <span class="col-8 " >{{ session()->get('FullName') }}</span>
                            </div>
                            <div class="my-3 row ">
                                <span class="fw-bold ms-3 text-start col-4" style="width:100px;">Đề tài: </span>
                                <span class="col-8">Ứng dụng trí tuệ nhân tạo nhận dạng chữ viết tay xây dựng ứng dụng học từ vựng Tiếng Anh</span>
                            </div>
                        </div>
                        <form class="formAdd mx-5" >
                            <div class="row taskAdd">
                                <div class="box col-md-5">
                                    <label for="" class="w-100" >Nội dung:</label>
                                    <input  class="form-control1 w-100"type="text"autocomplete="off" style="font-weight:500;border-radius:3px" >
                                </div>
                                <div class="box col-md-3">
                                    <label for="date"class="w-100">Ngày bắt đầu:</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="date" class="form-control1" id="date" style="font-weight:500;border-radius:3px"/>
                                    </div>
                                </div>
                                <div class="box col-md-3">
                                    <label for="date"class="w-100">Ngày kết thúc:</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="date" class="form-control1" id="date" style="font-weight:500;border-radius:3px;min-width: 20px;"/>
                                    </div>
                                </div>
                                <div class="box col-md-1" style="width:70px">
                                    <i class="bi bi-plus-circle float-end iconAdd"  onclick="handleClickAdd(event)"></i>
                                </div>
                            </div> 
                        </form>
                </div>
                <div class="addTask" style="text-align:center;">
                    <a class="btn" onclick="handleAdd()" style="padding: 0.5rem 3rem;">Lưu</a>
                </div>
                <div class="popup-message error" id="popup-error">
                            <p>Vui lòng nhập đủ thông tin</p>
                </div>   
            </div>
@endsection
@section('scripts')
<script src="{{asset('js\giaonhiemvu.js')}}"></script>
@endsection