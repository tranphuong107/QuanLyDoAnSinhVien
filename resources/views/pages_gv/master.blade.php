<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js" integrity="sha512-kWH92pHUC/rcjpSMu19lT+H6TlZwZCAftg9AuSw+AVYSdEKSlXXB8o6g12mg5f+Pj5xO40A7ju2ot/VdodCthw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{('images/logo-tlu-home.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/header-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('additional_styles')

</head>
<body style="background: #e9e9e9;">
   <!-- header -->
   <div class="page-header navbar"><!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
<!-- BEGIN LOGO -->
<div class="page-logo" style="float: left;display: block;width: 235px;height: 50px;padding-left: 20px;padding-right: 20px;">
    <a href="#/common/dashboard">
        <img src="{{ asset('images/logo-tlu-home.png')}}" alt="logo" class="logo-default" style="margin-top: 10px !important;height: 30px !important;margin: 18px 0 0;vertical-align: middle;border: 0;overflow-clip-margin: content-box;overflow: clip;"> </a>
    <div class="menu-toggler sidebar-toggler" style="cursor: pointer;">
        <i onclick="menuToggle()" class="fa fa-reorder" style="color: #677488;font: normal normal normal 14px/1 FontAwesome;font-size: inherit;text-rendering: auto;line-height: 14px;position:absolute;left:12.5rem;top:1.2rem"></i>
    </div>
</div>
</div>
<div class="top-menu me-2" style="display: block;min-width: 200px;height: 50px;padding:0 5px;cursor:pointer">
    <ul class="nav navbar-nav pull-right" style="padding: 0;display: block;float: right!important;margin: 0;list-style: none;">
        <li class="dropdown dropdown-user mt-1">
            <a  style="font-size: 16px;color:#c6cfda;text-decoration:none" href="#" class=" me-3">
                <img alt="" src="{{ asset('images/profile.png')}}" style="border-radius: 50%;">
                <span>{{ session()->get('FullName') }}</span>
                <i class="fa fa-angle-down"></i>
            </a>
        </li>
    </ul>
    <ul class="content-profile p-0 m-0" style="list-style: none;width:200px;height:290px;background:white;position:absolute;top:3.5rem;right:1rem;z-index:2;border:0.6px solid #ccc" class="p-0 m-0">
        <li >
            <div>
                <img src="{{ asset('images/bg-navbar.jpg')}}" alt="" width="200px" height="140px">
                <img alt="" src="{{ asset ('images/profile.png')}}" style="border-radius: 50%;position:absolute;top:1.1rem;right:3rem" width="100px" height="100px">
            </div>
            <div class="content-profile">
                <div class="box-info mb-2 mt-2" >
                <a href="{{URL::to('/thongtincanhangv', session()->get('ID') )}}" style="font-size: 16px;"><i class="fa-solid fa-user "></i> Thông tin tài khoản</a>
                </div>
                <div class="box-info mb-2">
                <a href="{{URL::to('/doimatkhaugv',['ID' => session()->get('ID')])}}" style="font-size: 16px;"><i class="fa-solid fa-shield"></i> Đổi mật khẩu</a>
                </div>
                <hr class="w-100 p-0 m-0">
            <div class="box-info" style="margin-top:.7rem">
            <a href="{{URL::to('/')}}" style="font-size: 16px;"><i class="fa-solid fa-power-off"></i> Đăng xuất</a>
            </div>
            </div>
            
        </li>
        
</ul>
</div>
</div>
<!-- header -->


<!-- siderbar -->
<div class="sidebar">
    <img src="{{ asset('images/bg-navbar.jpg')}}" alt="" width="100%" height="100px">
    
    <ul style="list-style: none" class=" pt-2 pb-2 mt-0 mb-0  {{set_active(['home_giangvien'])}} {{set_active(['thongtincanhangv'])}} {{set_active(['doimatkhaugv'])}}">
        <a href="{{URL::to('/home_giangvien')}}"  class="myList">
            <li>
                <i class="fa-solid fa-desktop myIcon"></i>
                <span>Trang chủ</span>
            </li>
        </a>
    </ul>
    <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0  {{set_active(['student-list-sv'])}}">
        <a href="{{URL::to('/student-list-sv', session()->get('ID'))}}"  class="myList">
            <li >
                <i class="bi bi-folder2-open myIcon"></i>
                <span>Quản lý sinh viên</span>
            </li>
        </a>
    </ul>
    <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0 {{set_active(['sinhvienphutrach'])}} {{set_active(['giaonhiemvu'])}} {{set_active(['xemtiendo'])}} {{set_active(['xembaocaogv'])}}">
        <a href="{{URL::to('/sinhvienphutrach', session()->get('ID'))}}" class="myList">
            <li>
                <i class="bi bi-people myIcon"></i>
                <span>Sinh viên phụ trách</span>
            </li>
        </a>
    </ul>
    <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0 {{set_active(['thongke'])}}">
        <a href="{{URL::to('/thongke')}}"    class="myList">
            <li>
            <i class="bi bi-grid myIcon"></i>
                <span>Thống kê</span>
            </li>
        </a>
    </ul>
    <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0  {{set_active(['thongbaogv'])}} {{set_active(['thongbaochitietgv'])}}">
        <a href="{{URL::to('/thongbaogv')}}"   class="myList">
            <li>
                <i class="bi bi-bell myIcon"></i>
                <span>Thông báo</span>
            </li>
        </a>
    </ul>
</div>
<!-- siderbar -->

<!-- main -->
<div class="main">
    @yield('content')
</div>
    
<!-- main -->
<script src="{{asset('js\Toggle.js')}}"></script>
<script src="{{asset('js\main.js')}}"></script>
@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>