@extends('pages_gv.master')

@section('title', 'Giáo dục | Tạo nhiệm vụ')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/quanlytiendo.css')}}">
    <link rel="stylesheet" href="{{asset('css/quanlysinhvien.css')}}">
@endsection

@section('content')
        <div class="content" >
                <!-- <div class="box-dangky bg-white p-4" style="border-radius:5px;position:relative;padding-bottom:100px!important"> -->
                    <h5 class ="mb-1 " style="text-align:center; color:#0071C6;">BẢNG THỐNG KÊ</h5>
                    <div class="content-dk"style="padding:1rem 2rem">
                    <div class="box-select-search my-3" >
                                        <select style="background-color:#2389D7;color:#fff;width:200px" class="form-select" aria-label=".form-select-sm example" >
                                            <option selected>Đợt</option>
                                            <option value="1">Đợt 2 năm 2023</option>
                                            <option value="2">Đợt 1 năm 2023</option>
                                            <option value="3">Đợt 2 năm 2022</option>
                                            <option value="3">Đợt 1 năm 2022</option>
                                        </select>                   
                                    </div>   
                                    <div class="myTableTk" style="height:450px">
                                        <table class="table table-bordered text-center">
                                                    <thead class="text-center">
                                                        <tr>
                                                        <th scope="col">STT</th>
                                                        <th scope="col">Tên sinh viên</th>
                                                        <th scope="col" style="width:40%">Đề tài</th>
                                                        <th scope="col">Điểm trung bình</th>
                                                        <th scope="col">Nhiệm vụ</th>
                                                        <th scope="col">Thao tác</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Trần Thị Bích Phương</td>
                                                            <td>Xây dựng ứng dụng nắn duỗi ảnh chụp tài liệu dùng Deep Learning </td>
                                                            <td>8.3</td>
                                                            <td>5/5</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Hoàng Văn Minh</td>
                                                            <td>Phân vùng ảnh với công cụ mmSegmentation </td>
                                                            <td>7.0</td>
                                                            <td>4/6</td>
                                                            <td>
                                                            <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Nguyễn Hoàng Long</td>
                                                            <td>Nhận dạng giọng nói </td>
                                                            <td>4.1</td>
                                                            <td>2/6</td>
                                                            <td>
                                                                <span style="color:#A80808">Đã dừng đồ án</span>
                                                            </td>
                                                        </tr> <tr>
                                                            <th scope="row">4</th>
                                                            <td>Thái Quốc Bảo</td>
                                                            <td>Nghiên cứu mô hình đường trung bình trong dự đoán và giao dịch giá vàng</td>
                                                            <td>8.0</td>
                                                            <td>5/5</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Hoàng Hải Quân</td>
                                                            <td>Phát hiện vật thể với công cụ mmDetection </td>
                                                            <td>6.6</td>
                                                            <td>4/5</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr> 
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Nguyễn Minh Anh</td>
                                                            <td>Sử dụng mạng nơ-ron để tổng hợp giọng nói tự nhiên</td>
                                                            <td>7.5</td>
                                                            <td>5/6</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>Hà Minh Đức</td>
                                                            <td>Sử dụng mô hình học sâu để tạo ra nội dung mới </td>
                                                            <td>7.7</td>
                                                            <td>6/6</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>Đỗ Mỹ Linh</td>
                                                            <td>Phát hiện vật thể với công cụ mmDetection </td>
                                                            <td>8.0</td>
                                                            <td>5/5</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>Nguyễn Văn Tú</td>
                                                            <td>Nghiên cứu mô hình đường trung bình trong dự đoán giá xăng</td>
                                                            <td>7.5</td>
                                                            <td>6/7</td>
                                                            <td>
                                                                <button class="btn btn-tuchoi mx-auto" onclick="openPopupDungDoAn()" >Dừng đồ án</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>        
                                    </div>      
                    </div>  
                    <div class="popup-dungdoan" id="popup-dungdoan">
                            <div class="content-popup-dungdoan">
                                <div class="icon-cancel" >
                                    <i class="bi bi-x-lg" onclick="closePopupDungDoAn()"></i>
                                </div>
                                <div class="content-dungdoan">
                                    <h6 class="text-center mb-5"style="font-weight:400">Bạn có muốn dừng đồ án của sinh viên này không?</h6>
                                    <div class="row text-center">
                                        <div class="button-co-tk button-dungdoan col-6">
                                            <button>Có</button> 
                                        </div>
                                        <div class="button-khong-tk button-dungdoan col-6">
                                            <button onclick="closePopupDungDoAn()">Không</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>  

            </div>
@endsection
@section('scripts')
    <script src="{{asset('js\dungdoan.js')}}"></script>
@endsection


