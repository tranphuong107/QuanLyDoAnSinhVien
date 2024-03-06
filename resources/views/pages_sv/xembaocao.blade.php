@extends('pages_sv.master')

@section('title', 'Giáo dục | Xem báo cáo')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset ('css/xembaocao.css')}}">
@endsection

@section('content')
       <div class="" style="padding:1rem 10rem">
            <div class="bg-light  py-3 m-auto" style="border-radius:5px;min-height:610px;width:900px;">
                <div style="border-bottom:1px solid #333">
                    <a href="{{URL::to('/quanlytiendo')}}" style="color:#333;text-decoration:none;font-weight:500px">
                        <i class="bi bi-arrow-left ms-4 me-5"></i>
                    </a>
                    <i class="bi bi-download me-5" style="cursor:pointer;"></i>
                    <i class="bi bi-trash"  style="cursor:pointer;"></i>
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
@endsection
@section('scripts')
    <script src="{{asset('js\quanlytiendo.js')}}"></script>
@endsection
