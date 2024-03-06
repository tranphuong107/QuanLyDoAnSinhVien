@extends('pages_sv.master')

@section('title', 'Giáo dục | Trang chủ')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset ('css/home.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/dangkydetai')}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Đăng ký đề tài</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/quanlytiendo',session()->get('ID'))}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Quản lý tiến độ</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle" >
        <div class="dash-let">
            <a href="{{URL::to('/ketquadangky',session()->get('ID'))}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Kết quả đăng ký</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/thongbao')}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Thông báo</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/tracuudiem',session()->get('ID'))}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Tra cứu điểm</span>
            </a>
        </div>
    </div>
    
</div>
@endsection
@section('scripts')
@endsection