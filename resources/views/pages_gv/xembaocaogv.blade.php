@extends('pages_gv.master')

@section('title', 'Giáo dục | Xem báo cáo ')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/quanlytiendo.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/xembaocao.css')}}">
@endsection

@section('content')
                <div class="" style="padding:1rem 10rem">
                    <div class="bg-light  py-3 m-auto" style="border-radius:5px;min-height:580px;width:900px;">
                    <div style="border-bottom:1px solid #333">
                        <a href="{{URL::to('/xemtiendo')}}" style="color:#333;text-decoration:none;font-weight:500px">
                            <i class="bi bi-arrow-left ms-4 me-5"></i>
                        </a>
                        <i class="bi bi-download me-5" style="cursor:pointer;"></i>
                        <i class="bi bi-chat" style="cursor:pointer;" onclick="openPopupnx()"></i>
                            </div>
                                    <div class="">  
                                        <div class="baocao" >
                                            <div >
                                                <div class="icon-file">
                                                    <i class="bi bi-file-earmark"></i>
                                                </div>
                                            </div>
                                        </div>            
                            </div>
                    </div>
                </div>
                <div class="popup-nop" id="popup-nx">
                            <div class="content-popup-nop">
                                <div class="icon-cancel" >
                                    <i class="bi bi-x-lg" onclick="closePopupnx()"></i>
                                </div>
                                <div class="content-Nx">
                                    <h6 class="mt-4">Nhận xét:</h6>
                                    <textarea  class="form-control1"></textarea>
                                </div>
                                <div class="container">
                                    <div style="text-align:center;">
                                        <button  class="my-button my-button-nx" onclick="handleNx()">Hoàn tất</button>
                                    </div>
                                </div>
                            </div>
                </div>  
                <div class="popup-message error" id="popup-error">
                            <p>Vui lòng nhập nhận xét</p>
                </div>  
@endsection
@section('scripts')
<script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection