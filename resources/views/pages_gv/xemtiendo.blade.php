
@extends('pages_gv.master')

@section('title', 'Giáo dục | Xem tiến độ ')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/quanlytiendo.css')}}">
@endsection

@section('content')
                <div class="content">
                    <h5 class ="mb-1"style="text-align:center; color:#0071C6;">TIẾN ĐỘ ĐỒ ÁN</h5>
                    <div class="table-kehoach table-quanlytd ">
                    <div class="mx-5 my-4 row" style="border:1px solid #ccc; border-radius:5px;">
                            <div class="mt-3 row" >
                                <div class="fw-bold ms-3 text-start col-4 " style="width:100px;">Sinh viên: </div>
                                <span class="col-8 " >Trần Thị Bích Phương</span>
                            </div>
                            <div class="my-3 row ">
                            <div class="fw-bold ms-3 text-start col-4" style="width:100px;">Đề tài: </div>
                                <span class="col-8">Ứng dụng trí tuệ nhân tạo nhận dạng chữ viết tay xây dựng ứng dụng học từ vựng Tiếng Anh</span>
                            </div>
                        </div>
                        <div class="myTable" style="height:430px">
                        <table class="table table-bordered">
                            <thead style="">
                                    <tr class="text-center">
                                        <th scope="col" style="width:100px;">Nhiệm vụ</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Bắt đầu</th>
                                        <th scope="col">Kết thúc</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                        <th scope="col">Điểm</th>
                                    </tr>
                            </thead>
                            <tbody class="table-group">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Tìm hiểu yêu cầu khách hàng</td>
                                        <td>16-03-2023</td>
                                        <td>25-03-2023</td>
                                        <td>Hoàn thành</td>
                                        <td class="text-center">
                                                <a href="{{URL::to('/xembaocaogv')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Phân tích thiết kế, đặc tả</td>
                                        <td>26-03-2023</td>
                                        <td>10-04-2023</td>
                                        <td>Chưa hoàn thành</td>
                                        <td class="text-center">
                                                <a href="{{URL::to('/xembaocaogv')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{URL::to('/xembaocaogv')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{URL::to('/xembaocaogv')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{URL::to('/xembaocaogv')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{URL::to('/xembaocao')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">
                                            <div>
                                                <a href="{{URL::to('/xembaocao')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem
                                                </a>
                                            </div>
                                        </td>
                                        <td class="setScore">--</td>
                                    </tr>
                            </tbody>
                        </table>  
                        </div>  
                        <div class="popup-nop" id="popup-nop">
                            <div class="content-popup-nop">
                                <div class="icon-file">
                                    <i class="bi bi-file-earmark"></i>
                                    <span>Thả tệp tại đây</span>
                                </div>
                                <div class="submit-file" style="text-align:center;">
                                    <button onclick="closePopup()">Hoàn tất</button>
                                </div>
                            </div>
                        </div>      
                        <div class="popup-nop" id="popup-score">
                            <div class="content-popup-nop">
                                <div class="icon-file">
                                    <i class="bi bi-file-earmark"></i>
                                    <span>Thả tệp tại đây</span>
                                </div>
                                <div class="submit-file" style="text-align:center;">
                                    <button onclick="closePopup()">Hoàn tất</button>
                                </div>
                            </div>
                        </div>             
                    </div>
                </div>
@endsection
@section('scripts')
<script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection