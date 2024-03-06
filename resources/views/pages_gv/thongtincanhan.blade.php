@extends('pages_gv.master')

@section('title', 'Giáo dục | Thông tin cá nhân ')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/thongtincanhan.css')}}">
@endsection

@section('content')
            <div class="content" >
            <!-- <div class="scroll-box bg-light mx-auto"> -->
               <div class="box-text mt-3" style="text-align:center">
                  <h5 style="color:#0071C6;font-weight:500">THÔNG TIN CÁ NHÂN</h5>
               </div>
               <hr class="w-100">
               <form action="" class="form-box  p-3">
                          <div class="box-img" style="margin: 0 10px;">
                            <div class="" >
                                <i class="bi bi-person"></i>
                            </div>
                          </div>
                    <div class="flex-container" >
                          <div class="box" >
                            <label for="" class="w-100" style="font-weight:500">Họ và Tên:</label>
                            <input  class="form-control1 w-100" type="text"autocomplete="off" disabled value="{{ $data['FullName'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Ngày sinh:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['DateOfBirth'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Nơi sinh:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Hometown'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Quê quán:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Address'] }}" readonly >
                          </div>
                          @if ( $data['Gender']  == 1)
                            @php
                              $data['Gender']='Nữ';
                            @endphp
                          @else
                              Nam
                          @endif
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Giới tính:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Gender'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Dân tộc:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Nation'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Tôn giáo:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Religion'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">CCCD:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off"disabled value="{{ $data['Identity'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Số điện thoại:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['PhoneNumber'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Email:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Email'] }}" readonly >
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Mã giảng viên:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['LecturerCode'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Bộ môn:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['DepartmentName'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Chức vụ:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Position'] }}" readonly>
                          </div>
                          <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Trình độ:</label>
                            <input  class="form-control1 w-100"type="text"autocomplete="off" disabled value="{{ $data['Degree'] }}" readonly>
                          </div>
                    </div>
               </form>
            </div>
@endsection
@section('scripts')
@endsection