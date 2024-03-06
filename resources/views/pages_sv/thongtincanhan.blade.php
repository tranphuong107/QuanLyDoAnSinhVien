@extends('pages_sv.master')

@section('title', 'Giáo dục | Thông tin cá nhân')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/thongtincanhan.css')}}">
@endsection

@section('content')
        <div class="content">
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
                    <div class="flex-container">
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Họ và Tên:</label>
                            <input class="form-control1 w-100" type="text"autocomplete="off" disabled
                                value="{{ $student->FullName }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Ngày sinh:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->DateOfBirth }} ">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Nơi sinh:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Hometown }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Quê quán:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Address }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Giới tính:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Gender == 1 ? 'Nữ' : 'Nam' }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Dân tộc:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Nation }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Tôn giáo:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Religion }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">CCCD:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Identity }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Số điện thoại:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->PhoneNumber }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Email:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->Email }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Mã sinh viên:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->StudentCode }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Lớp:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->ClassName }}">
                        </div>
                        <div class="box">
                            <label for="" class="w-100" style="font-weight:500">Ngành:</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" disabled
                                value="{{ $student->MajorName }}">
                        </div>
                    </div>
               </form>
            </div>
@endsection
@section('scripts')
@endsection