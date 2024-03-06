@extends('pages_gv.master')

@section('title', 'Giáo dục | Quản lý sinh viên')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/quanlytiendo.css')}}">
    <link rel="stylesheet" href="{{asset('css/quanlysinhvien.css')}}">
@endsection

@section('content')
            <div class="" style="padding: 0 0">
                <div class="content">
                    <h5 style="text-align:center; color:#0071C6;" class="mb-4">DANH SÁCH SINH VIÊN</h5>
                    <div class="box-search p-2" style="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" placeholder="Tìm kiếm ở đây... " style="">
                    </div>
                    <div class="table-kehoach myTable">
                        <table class="table table-bordered">
                            <thead>
                                    <tr class="text-center">
                                    <th scope="col" class="text-center">STT</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Thông tin</th>
                                    <th scope="col" style="width: 15%">Hướng nghiên cứu</th>
                                    <th scope="col">Thao tác</th>
                                    </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @php
                                    $count = 1;
                                @endphp
                            @if(!is_null($datasv))
                                @foreach ($datasv as $row)
                                <tr>
                                    <td scope="row" class="text-end">{{ $count++ }}</td>
                                    <td>
                                        <div class="box-img" style="margin: 0 auto; background-color:#e9e9e9; font-size:50px;width:50px;">
                                            <div class="" >
                                                <i class="bi bi-person">{{ $row->Image }}</i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $row->FullName }}</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> {{ $row->PhoneNumber }}<br/>
                                        <i class="bi bi-envelope"></i> {{ $row->Email }}<br/>
                                        <i class="bi bi-tags"></i> {{ $row->ClassName }}<br/>
                                        <i class="bi bi-tags"></i> {{ $row->MajorName }}<br/>
                                    </td>
                                    <td>
                                        {{ $row->ResearchName }}
                                    </td>
                                    <td class="text-center ">
                                        <button class="btn btn-tuchoi  mx-auto" data-id="{{ $row->ID }}" onclick="openPopupTuChoi()">Từ chối</button><br>
                                        <button class="btn btn-chapnhan  mx-auto" data-id="{{ $row->ID }}" onclick="openPopupChapNhan()">Chấp nhận</button><br>
                                    </td>
                                    </tr>
                                @endforeach
                            @endif     
                            </tbody>
                        </table>                
                    </div>
                    <div class="popup-dungdoan" id="popup-tuchoi">
                            <div class="content-popup-dungdoan">
                                <div class="icon-cancel" >
                                    <i class="bi bi-x-lg" onclick="closePopupTuChoi()"></i>
                                </div>
                                <div class="content-dungdoan">
                                    <h6 class="text-center mb-4"style="font-weight:400">Bạn có chắc chắn muốn từ chối hướng dẫn không?</h6>
                                    <div class="row text-center">
                                        <div class="button-khong button-dungdoan col-6">
                                            <button>Đồng ý</button> 
                                        </div>
                                        <div class="button-co button-dungdoan col-6">
                                            <button onclick="closePopupTuChoi()">Hủy</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>  
                    <div class="popup-dungdoan" id="popup-chapnhan">
                            <div class="content-popup-dungdoan">
                                <div class="icon-cancel" >
                                    <i class="bi bi-x-lg" onclick="closePopupChapNhan()"></i>
                                </div>
                                <div class="content-dungdoan">
                                    <h6 class="text-center mb-1"style="font-weight:400">Bạn có chắc chắn muốn đồng ý hướng dẫn không?</h6>
                                    <h6 class="text-center mb-3"style="font-weight:400; display:inline-block;margin-left:70px;">Không thể hủy hướng dẫn sau khi đồng ý!</h6>
                                    <div class="row text-center mt-3">
                                        <div class="button-khong button-dungdoan col-6">
                                            <button>Đồng ý</button> 
                                        </div>
                                        <div class="button-co button-dungdoan col-6">
                                            <button onclick="closePopupChapNhan()">Hủy</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>  
                    <!-- <div class="pagination">
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
                </div>
            </div>
@endsection
@section('scripts')
<script src="{{asset('js\dungdoan.js')}}"></script>
@endsection

