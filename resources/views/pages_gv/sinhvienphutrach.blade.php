@extends('pages_gv.master')

@section('title', 'Giáo dục | Sinh viên phụ trách')

@section('additional_styles')
    <link rel="stylesheet" href="{{asset('css/quanlysinhvien.css')}}">
@endsection

@section('content')
                <div class="content">
                    <h5 style="text-align:center; color:#0071C6;">DANH SÁCH SINH VIÊN PHỤ TRÁCH</h5>
                    <div class="row">
                        <div class="box-select-search my-3 col-5" >
                                            <select style="background-color:#2389D7;color:#fff;width:200px" class="form-select" aria-label=".form-select-sm example" >
                                                <option selected>Đợt</option>
                                                <option value="1">Đợt 2 năm 2023</option>
                                                <option value="2">Đợt 1 năm 2023</option>
                                                <option value="3">Đợt 2 năm 2022</option>
                                                <option value="3">Đợt 1 năm 2022</option>
                                            </select>
                                        </div> 
                        <div class="box-search p-2 col-7" style="width:670px">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="search" placeholder="Tìm kiếm ở đây... ">
                        </div>
                    </div>
                    <div class="table-kehoach myTable">
                        <table class="table table-bordered">
                            <thead>
                                    <tr class="text-center">
                                    <th scope="col">STT</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Thông tin</th>
                                    <th scope="col" style="width: 15%">Hướng nghiên cứu</th>
                                    <th scope="col" style="width:25%">Đề tài</th>
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
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>
                                        <div class="box-img mx-auto" style="margin: 0 10px; background-color:#e9e9e9; font-size:50px;width:50px;">
                                                <i class="bi bi-person">{{ $row->Image }}</i>
                                        </div>
                                    </td>
                                    <td>{{ $row->FullName }}</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> {{ $row->PhoneNumber }}<br/>
                                        <i class="bi bi-envelope"></i> {{ $row->Email }}<br/>
                                        <i class="bi bi-tags"></i> {{ $row->ClassName }}<br/>
                                        <i class="bi bi-tags"></i> {{ $row->MajorName }}
                                    </td>
                                    <td>
                                        {{ $row->ResearchName }}
                                    </td>
                                    <td>
                                        {{ $row->Title }}<br/>
                                    </td>
                                    <td class="text-left ms-3">
                                            <div class="mb-3"style="color:#0071C6; cursor:pointer;padding-botton:10px!important;" >
                                            <a href="{{URL::to('/giaonhiemvu')}}" style="text-decoration: none;color:#0071C6;">
                                                 Tạo nhiệm vụ
                                            </a>
                                            </div>
                                            <div>
                                                <a href="{{URL::to('/xemtiendo')}}" style="text-decoration: none;color:#0071C6;">
                                                    Xem tiến độ
                                                </a>
                                            </div>
                                    </tr>
                                    @endforeach
                                @endif            
                            </tbody>
                        </table>                
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
                
@endsection
@section('scripts')
@endsection