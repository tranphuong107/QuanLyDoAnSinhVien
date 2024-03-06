@extends('pages_sv.master')

@section('title', 'Giáo dục | Đăng ký đề tài')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/quanlytiendo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formdangkydetai.css') }}">
@endsection

@section('content')
    <div class="content">
        <h5 class="m-3"style="text-align:center; color:#0071C6">ĐĂNG KÝ ĐỒ ÁN ĐỢT 1 NĂM 2023</h5>
        <div class="box-select-search">
            <select style="background-color:#2389D7;color:#fff;width:250px" class="form-select"
                aria-label=".form-select-sm example">
                {{-- <option selected>Hướng nghiên cứu</option>
                <option value="1">Trí tuệ nhân tạo</option>
                <option value="2">Xử lý ảnh</option>
                <option value="3">Khai phá dữ liệu</option> --}}
                @foreach($researches as $research){
                    <option value="$research->ID">{{ $research->ResearchName }}</option>
                }
                @endforeach
            </select>
        </div>
        <!-- <h5 class="text-center p-3">Danh sách giảng viên hướng dẫn</h5> -->
        <div class="table-kehoach myTable mt-4" style=" height:450px;">
            <table class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">STT</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Bộ môn</th>
                        <th scope="col">Thông tin</th>
                        <th scope="col">Hướng nghiên cứu</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="table-group">

                    @php
                        $stt = 1;
                    @endphp
                    @foreach ($lecturers as $lecturer)
                        <tr>
                            <th scope="row" class="text-center">{{ $stt }}</th>
                            @php
                                $stt++;
                            @endphp
                            <td>
                                <div class="box-img"
                                    style="margin: 0 10px; background-color:#e9e9e9; font-size:50px;width:50px;">
                                    <i class="bi bi-person"></i>
                                </div>
                            </td>
                            <td>{{ $lecturer->user->FullName }}</td>
                            <td>{{ $lecturer->department->DepartmentName }}</td>
                            <td>
                                <i class="bi bi-telephone"></i> {{ $lecturer->user->PhoneNumber }}<br />
                                <i class="bi bi-envelope"></i> {{ $lecturer->user->Email }}<br />
                                <i class="bi bi-tags"></i> {{ $lecturer->Position }}
                            </td>
                            <td>
                                @foreach ($lecturer->researches as $research)
                                    {{ $research->ResearchName }}
                                    <br>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <h6 class="text-dangky mt-2" onclick="openPopup()">Đăng ký</h6>
                                <h6 class="text-dangky mt-2" onclick="openPopupXem()">Xem thông tin</h6>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="popup-nop" id="popup-nop">
            <div class="content-popup-nop">
                <div class="icon-cancel">
                    <i class="bi bi-x-lg" onclick="closePopup()"></i>
                </div>
                <div class="content-dk">
                    <form action="" class="">
                        <div class="box">
                            <label for="" class="w-100">Giảng viên đăng ký</label>
                            <input class="form-control1 w-100"type="text"autocomplete="off" value="Trương Xuân Nam"
                                disabled>
                        </div>
                        <div class="box">
                            <label for="" class="w-100">Hướng nghiên cứu</label>
                            <select class="form-control1" style="width:30%;" aria-label=".form-select-sm example"
                                id="nghiencuu">
                                <option value="" selected>Hướng nghiên cứu</option>
                                <option value="1">Trí tuệ nhân tạo</option>
                                <option value="3">Khai phá dữ liệu</option>
                            </select>
                        </div>
                        <div class="container my-3">
                            <div class="" style="text-align:center;">
                                <a class="btn my-button" onclick="handleDk()" style="padding: 0.5rem 3rem;">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="popup-nop" id="popup-xem">
            <div class="content-popup-xem">
                <div class="icon-cancel">
                    <i class="bi bi-x-lg" onclick="closePopupXem()"></i>
                </div>
                <div class="content-dk"style="padding:2rem">
                    <h6 class="mb-3" style="text-align:center; color:#0071C6">THÔNG TIN</h6>
                    <div class="row">
                        <div class="col-4">
                            <div class="box-img-xem">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="col-8" style="padding:20px 60px">
                            <div class="mx-auto">
                                <h6 class="me-3 mb-3" style="display:inline-block">Giảng viên:</h6><span
                                    style="font-weight:500">Trần Mạnh Tuấn</span>
                                <div>
                                    <i class="bi bi-telephone"></i> 0956782579<br />
                                    <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br />
                                    <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-select-search my-3">
                        <select style="background-color:#2389D7;color:#fff;width:200px" class="form-select"
                            aria-label=".form-select-sm example">
                            <option selected>Đợt</option>
                            <option value="1">Đợt 2 năm 2023</option>
                            <option value="2">Đợt 1 năm 2023</option>
                            <option value="3">Đợt 2 năm 2022</option>
                            <option value="3">Đợt 1 năm 2022</option>
                        </select>
                    </div>
                    <div>
                        <table class="table table-bordered text-center">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Hướng nghiên cứu</th>
                                    <th scope="col" style="width:40%">Điểm trung bình sinh viên</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Trí tuệ nhân tạo</td>
                                    <td>7.8</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Khai phá dữ liệu</td>
                                    <td>8.0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div style="position:absolute;right:50px;bottom:10px">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->
        <div class="popup-message error" id="popup-error">
            <p id="message">Vui lòng nhập đủ thông tin</p>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js\quanlytiendo.js') }}"></script>
@endsection
