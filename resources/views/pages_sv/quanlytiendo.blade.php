@extends('pages_sv.master')

@section('title', 'Giáo dục | Quản lý tiến độ')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset('css/quanlytiendo.css') }}">
@endsection
@section('content')
    <div class="content ">
        <h5 class="mb-5" style="text-align:center; color:#0071C6;">BẢNG KẾ HOẠCH NHIỆM VỤ</h5>
        <div class="table-kehoach myTable">
            <table class="table table-bordered ">
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
                @php
                    $stt = 1;
                @endphp
                <tbody class="table-group">
                    @foreach ($progressTopicStudent as $item)
                        <tr>
                            <th scope="row" class="text-center">{{ $stt }}</th>
                            @php
                                $stt++;
                            @endphp
                            <td>{{ $item->TaskName }}</td>
                            <td>{{ date('Y-m-d', strtotime($item->StartTime)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($item->EndTime)) }}</td>
                            <td>
                                @if ($item->Status == 1)
                                    Hoàn thành
                                @else
                                    Chưa hoàn thành
                                @endif
                            </td>
                            <td class="text-center">
                                <div style="color:#0071C6; cursor:pointer;" onclick="openPopup()">
                                    <span>Chỉnh sửa</span>
                                </div>
                                <div>
                                    <button class="view-nx" style="text-decoration: none;color:#0071C6;"
                                        onclick="openPopupXem()">
                                        Xem nhận xét
                                    </button>
                                </div>
                            </td>
                            <td class="text-center">8.0</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="popup-nop" id="popup-nop">
                <div class="content-popup-nop">
                    <div class="icon-cancel">
                        <i class="bi bi-x-lg" onclick="closePopup()"></i>
                    </div>
                    <div class="icon-file">
                        <i class="bi bi-file-earmark"></i>
                    </div>
                    <div class="choose-file">
                        <label for="file" class="inputfile">Chọn file</label>
                        <span id="labelFile">Bạn chưa chọn file nào</span>
                        <input type="file" name="file" id="file" value=""
                            style="visibility:hidden;width:10px" />
                    </div>
                    <div>
                        <button class="my-button button-update-left" onclick="handleChoose()">Hoàn tất</button>
                        <button class="my-button button-update-right" onclick="openPopupDungDoAn()">Xóa</button>
                    </div>
                </div>
            </div>
            <div class="popup-message error" id="popup-error">
                <p>Vui lòng chọn file</p>
            </div>
            <div class="popup-dungdoan" id="popup-dungdoan">
                <div class="content-popup-dungdoan">
                    <div class="icon-cancel">
                        <i class="bi bi-x-lg" onclick="closePopupDungDoAn()"></i>
                    </div>
                    <div class="content-dungdoan">
                        <h6 class="text-center mb-5"style="font-weight:400">Bạn có muốn xóa tệp đã gửi không?</h6>
                        <div class="row text-center">
                            <div class="button-co button-dungdoan col-6">
                                <button>Có</button>
                            </div>
                            <div class="button-khong button-dungdoan col-6">
                                <button onclick="closePopupDungDoAn()">Không</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-nop" id="popup-xem">
                <div class="content-popup-nop">
                    <div class="icon-cancel">
                        <i class="bi bi-x-lg" onclick="closePopupXem()"></i>
                    </div>
                    <div class="content-dk">
                        <form action="" class="">
                            <div class="baocao">
                                <h6 class="mt-4">Nhận xét của giáo viên:</h6>
                                <textarea class="form-control1 updateTopic" disabled>Cần lấy thêm yêu cầu khách hàng</textarea>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js\quanlytiendo.js') }}"></script>
    <script src="{{ asset('js\dungdoan.js') }}"></script>
@endsection
