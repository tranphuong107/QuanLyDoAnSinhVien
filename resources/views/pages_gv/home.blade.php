@extends('pages_gv.master')

@section('title', 'Giáo dục | Trang chủ')

@section('additional_styles')
    <link rel="stylesheet" href="{{ asset ('css/home.css')}}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/student-list-sv',session()->get('ID'))}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Quản lý sinh viên</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/sinhvienphutrach',session()->get('ID'))}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Sinh viên phụ trách</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/thongke')}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Thống kê</span>
            </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10" class="menu-rectangle">
        <div class="dash-let">
            <a href="{{URL::to('/thongbaogv')}}" class="menu-rectangle-content">
                <i class="fa fa-university"></i>
                <i class="fa fa-university"></i>
                <span>Thông báo</span>
            </a>
        </div>
    </div>
    
@endsection
@section('scripts')
@endsection