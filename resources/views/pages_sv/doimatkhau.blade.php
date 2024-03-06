@extends('pages_sv.master')

@section('title', 'Giáo dục | Đổi mật khẩu')

@section('additional_styles')
  <link rel="stylesheet" href="{{ asset ('css/doimatkhau.css')}}">
@endsection

@section('content')
       <div class="box-changepass" style="padding:1rem 10rem">
            <div class="bg-light m-auto" style="height:500px; box-shadow: 0 2px 3px 2px rgba(0, 0, 0, 5%);border-radius:5px;">
               <div class="w-100 mt-4 pt-4 " style="text-align:center">
               <h5 class ="mb-1" style="text-align:center; color:#0071C6;">ĐỔI MẬT KHẨU</h5>
               </div>
               <form action="" style="padding:0 5rem;margin-top:8%">
                          <div class="box mt-4">
                            <label for="" class="w-100">Mật khẩu hiện tại</label>
                            <input  class="form-control1 w-100"type="password"autocomplete="off" >
                          </div>
                          <div class="box">
                            <label for="" class="w-100" >Mật khẩu mới</label>
                            <input  class="form-control1 w-100" id="mkmoi" type="password"autocomplete="off" >
                          </div>
                          <div class="box">
                            <label for="" class="w-100">Nhập lại mật khẩu mới</label>
                            <input  class="form-control1 w-100" id="nhaplaimk" type="password"autocomplete="off"  >
                          </div>
                          <div class="container mt-5">
                          <div class="change-pass" style="text-align:center;">
                            <button class="btn " onclick="handleChangePass()" style="padding: 0.5rem 3rem;">Cập nhật</button><!-- <button style="padding: 0.5rem 3rem" onclick="handleChangePass()">Cập nhật</button> -->
                            </div>
                        </div>
               </form>
               <!-- <div class="popup-doimk" id="popup-doimk">
                            <div class="content-popup-doimk">
                                <span>Đổi mật khẩu thành công</span>
                            </div>

                </div> -->
            </div>
       </div>
       <div class="popup-message error" id="popup-error">
                    <p id="message">Vui lòng nhập đủ thông tin</p>
        </div>   
@endsection
@section('scripts')
<script src="{{asset('js\doimatkhau.js')}}"></script>
@endsection
