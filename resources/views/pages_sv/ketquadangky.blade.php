@extends('pages_sv.master')

@section('title', 'Giáo dục | Kết quả đăng ký')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/quanlytiendo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formdangkydetai.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ketquadk.css') }}">
@endsection
@section('content')
    <div class="content-ketqua bg-white m-auto">
        <div class="top-result px-5 py-5">
            <div class="left-info">
                <div class="img-preview ">
                </div>
                <i class="bi bi-person"></i>
            </div>
            <div class="right-info">
                <h3 class="">{{ session()->get('FullName') }}</h3>
                <div><span>Mã sinh viên: </span><span>{{ $student->StudentCode }}</span></div>
                <div><span>Mã đồ án: </span><span>
                        @if ($topicStudent == null)
                            Chưa đăng kí
                        @else
                            {{ $topicStudent->ID }}
                        @endif

                    </span></div>
            </div>
        </div>
        <div class="bottom-result px-5 py-2">
            <div>
                <div class="row mx-2">
                    <span class="label-result col-3">Trạng thái:</span>
                    <span class="label-result col-9 text-start" style="color:#0071C6">
                        @if ($topicStudent == null)
                            Chưa đăng kí
                        @else
                            @if ($topicStudent->Status == 1)
                                Đã duyệt
                            @elseif ($topicStudent->Status == 2)
                                Chờ duyệt
                            @else
                                Bị từ chối
                            @endif
                        @endif
                    </span>
                </div>
                <div class="row mx-2">
                    <span class="label-result col-3">Giảng viên hướng dẫn:</span>
                    <span class="label-result col-9 text-start" style="color:#0071C6">
                        @if ($topicStudent == null)
                            Chưa đăng ký
                        @else
                            {{ $topicStudent->FullName }}
                        @endif
                    </span>
                </div>
                <div class="row mx-2">
                    <span class="label-result col-3">Đề tài:</span>
                    <span class="label-result col-9 text-start" style="color:#0071C6">
                        @if ($topicStudent == null)
                            Chưa đăng kí
                        @else
                            {{ $topicStudent->Title }}
                        @endif
                    </span>
                    <div class="circle-suadetai">
                        <a href="#"><i class="bi bi-pencil col-1" onclick="openPopup()"></i></a>
                    </div>
                </div>
                <div class="row mx-2">
                    <span class="label-result col-3">Thời gian bắt đầu:</span>
                    <span class="label-result col-9 text-start" style="color:#0071C6">16/02/2023</span>
                </div>
                <div class="row mx-2">
                    <span class="label-result col-3">Thời gian kết thúc:</span>
                    <span class="label-result col-9 text-start" style="color:#0071C6">20/8/2023</span>
                </div>
                <!-- <span class="label-result">Giảng viên hướng dẫn: <span class="ms-3" style="color:#0071C6" >Đang cập nhật </span></span>
                                        <span class="label-result">Đề tài: <span class="ms-3" style="color:#0071C6" >Đang cập nhật </span></span>
                                        <span class="label-result">Thời gian bắt đầu: <span class="ms-3" style="color:#0071C6" >Đang cập nhật </span></span>
                                        <span class="label-result">Thời gian kết thúc: <span class="ms-3" style="color:#0071C6" >Đang cập nhật </span></span> -->

            </div>
        </div>
        <div class="popup-nop" id="popup-nop">
            <div class="content-popup-nop">
                <div class="icon-cancel">
                    <i class="bi bi-x-lg" onclick="closePopupUTopic()"></i>
                </div>
                <div class="content-dk">
                    <form action="" class="">
                        <div>
                            <h6 class="mt-4">Tên đề tài:</h6>

                        </div>
                        <div>
                            <textarea class="form-control1 updateTopic"></textarea>
                        </div>
                        <div class="container">
                            <div class="" style="text-align:center;">
                                <a class="btn my-button my-button-nx" onclick="handleUTopic()"
                                    style="padding: 0.5rem 3rem;">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-message error" id="popup-error">
        <p id="message">Vui lòng nhập tên đề tài muốn sửa</p>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js\quanlytiendo.js') }}"></script>
@endsection
