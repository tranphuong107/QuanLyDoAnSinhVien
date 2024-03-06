@extends('pages_sv.master')

@section('title', 'Giáo dục | Đăng ký đề tài')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/quanlytiendo.css') }}">
@endsection

@section('content')
    <div class="content">
        <h5 class="mb-1" style="text-align:center; color:#0071C6;">BẢNG ĐIỂM</h5>
        <div class="table-kehoach table-quanlytd ">
            <div class="mx-5 my-4 px-2" style="border:1px solid #ccc; border-radius:5px;">
                <div class="mt-3 row">
                    <div class="fw-bold ms-3 text-start col-4 " style="width:120px;">Sinh viên: </div>
                    <span class="col-8 ">{{ session()->get('FullName') }}</span>
                </div>
                <div class="mt-3 row">
                    <div class="fw-bold ms-3 text-start col-4 " style="width:120px;">Mã sinh viên: </div>
                    <span class="col-8 ">{{ $student->StudentCode }}</span>
                </div>
                <div class="my-3 row ">
                    <div class="fw-bold ms-3 text-start col-4" style="width:120px;">Đề tài: </div>
                    <span class="col-8">

                        @if ($pointTopicStudent == null)
                            Đang cập nhật
                        @else
                            {{ $pointTopicStudent[0]->Title }}
                        @endif
                    </span>
                </div>
            </div>
            <div class="mx-5 my-4">
                <div class="mx-4 pb-1 my-3">
                    <h6 class="fw-bold mb-2">Điểm quá trình</h6>
                    <div class="row">
                        <div class="col-6" style="padding-left:100px">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->GuidePoint }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-4 pb-1 my-3">
                    <h6 class="fw-bold mb-2">Điểm phản biện</h6>
                    <div class="row">
                        <div class="col-6" style="padding-left:100px">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class="me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->RebuttalPoint1 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->RebuttalPoint2 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-4 pb-1 my-3">
                    <h6 class="fw-bold mb-2">Điểm bảo vệ</h6>
                    <div class="row mb-3">
                        <div class="col-6" style="padding-left:100px">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class="me-5 mb-2">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->ProtectionPoint1 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->ProtectionPoint2 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6" style="padding-left:100px">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->ProtectionPoint3 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->ProtectionPoint4 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="padding-left:100px">
                            <div class="mx-auto" style="border-bottom: 1px solid #ccc;width:250px">
                                <span class=" me-5">
                                    @if ($pointTopicStudent == null)
                                        Đang cập nhật
                                    @else
                                        {{ $pointTopicStudent[0]->ProtectionPoint5 }}
                                    @endif
                                </span><span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-4 pb-2 pt-4">
                    <h6 class="fw-bold me-4" style="display:inline-block;">Điểm trung bình:
                        @if ($pointTopicStudent == null)
                            Đang cập nhật
                        @else
                            {{ $pointTopicStudent[0]->Average }}
                        @endif
                    </h6> <span class="fw-bold"></span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- <script src="{{ asset('js/page1.js') }}"></script> -->
@endsection
