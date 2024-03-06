@extends('pages_sv.master')

@section('title', 'Giáo dục | Thông báo chi tiết')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset ('css/thongbaochitiet.css')}}">
@endsection

@section('content')
       <div class="content" style="">  
             <div class ="back"style="background-color:#e9e9e9;width:30px;height:30px; border-radius:50%">
                <a href="{{URL::to('/thongbao')}}" style="color:#333;text-decoration:none">
                    <i class="bi bi-arrow-left ms-1" style="font-size:20px;"></i>
                </a>
            </div>
            <div class="py-2 px-5 m-auto " style="border-radius:5px;">
                <div class="noidungthongbao ">
                    <div>
                        <h3 class="text-center">{{ $announcement->Title }}</h3>
                        <p style="margin-left:8%;margin-right:8%;text-align: right;"><i class="bi bi-clock me-2"></i>23/03/2023</p>
                    </div>
                    <div style="margin-left:8%;margin-right:8%;">
                        <h6 class=" mt-3">Nội dung:</h6>
                        <div class="file-preview mt-4">
                            <span>File đính kèm</span>
                        </div>
                        @php
                            $long_text =  $announcement->Content;
                            
                            $wrapped_text = wordwrap($long_text, 100, "\n");
                        @endphp
                        <p>{{  $wrapped_text }}</p>
                    </div>
                  

                </div>
            </div>
         </div>
       </div>
@endsection
@section('scripts')
    <script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection