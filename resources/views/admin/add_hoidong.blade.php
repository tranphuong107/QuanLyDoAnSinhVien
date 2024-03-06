@if (session()->has('Role_id') && session()->has('UserName') && session()->has('Password'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ | Quản lý hội đồng phản biện</title>
        {{-- <link rel="stylesheet" href="./css/style.css"> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/logo-tlu-home.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Roboto', sans-serif;
            }

            .fa-reorder::before {
                content: "\f0c9";
                box-sizing: border-box;
            }

            .top-menu:hover {
                background: rgba(120, 120, 120, 0.5);
                transition: all 1s;
            }

            .box-info {
                padding: 0 1rem;
            }

            .box-info:hover {
                background-color: #e9e9e9;
            }

            .box-info a {
                text-decoration: none;
                color: black;
            }

            .box-info a:hover {
                color: #00d2d3;
            }

            .content-profile {
                visibility: hidden;
                opacity: 0;
                transition: 0.5s;
                transform: translateX(0%) translateY(0px);
            }

            .top-menu:hover .content-profile {
                visibility: visible;
                opacity: 1;
                transform: translateX(0%) translateY(0px);
            }

            .sidebar {
                background-color: #2b3643;
                position: fixed;
                left: 0;
                height: 100%;
                width: 17%;
                z-index: -1;
            }

            .sidebar ul {
                border-top: 1px solid #3d4957;
                cursor: pointer;
                padding: 0 1rem;
            }

            .sidebar ul li i {
                margin-right: 10px;
            }

            .sidebar ul li {
                padding: 10px 10px;
            }

            .sidebar ul {
                padding: 0;
                margin: 0;
            }

            .sidebar ul:hover {
                background-color: rgba(37, 37, 37, .74);
                transition: all 0.7s;
            }

            .sidebar.active {
                opacity: 1;
            }

            .sidebar.active ul li span {
                display: none;
            }

            .main {
                position: fixed;
                right: 0;
                height: 100%;
                width: 83%;
                opacity: 1;
                z-index: 1;
                background-color: #e9e9e9;
            }

            .main.active {
                width: 96%;
                opacity: 1;
                left: 3.5rem;
            }

            .triangle {
                width: 0;
                height: 0;
                border-bottom: 20px solid #e9e9e9;
                border-left: 25px solid transparent;
                border-right: 25px solid transparent;
                transform: rotate(-90deg);
                position: relative;
                top: 18.3rem;
                left: -2rem;
                opacity: 1;
            }
            .sidebar ul li.actives{
                background-color: #36c6d3;
            }

            .sidebar ul li a {
                color: #b4bcc8;
                text-decoration: none;
            }

            .dash-let>a>i:first-child {
                font-size: 320px;
                position: absolute;
                color: rgba(255, 255, 255, 0.1);
                top: 30%;
                left: -16%;
            }

            [class*=" fa-"]:not(.fa-stack),
            [class*=" glyphicon-"],
            [class*=" icon-"],
            [class^=fa-]:not(.fa-stack),
            [class^=glyphicon-],
            [class^=icon-] {
                display: inline-block;
                line-height: 14px;
                -webkit-font-smoothing: antialiased;
            }

            .dash-let>a>i {
                transition: all .5s !important;
            }

            .fa {
                font: normal normal normal 14px/1 FontAwesome;
                text-rendering: auto;
            }

            .dash-let>a:hover {
                transform: scale(1);
            }

            .dash-let>a>span:hover {
                transform: scale(1.5);
                font-size: 12px;
            }

            .dash-let>a>span {
                transition: all .5s !important;
                -webkit-transition: all .5s !important;
                -moz-transition: all .5s !important;
                position: absolute;
                display: block;
                width: 100%;
                bottom: 0;
                left: 0;
                text-align: center;
                font-size: 18px;
                font-weight: 500;
                height: 45px;
                color: white;
                background-color: rgba(0, 0, 0, 0.05);
                padding: 10px 15px;
                white-space: nowrap;
                text-overflow: ellipsis;
            }

            .fa-university:before {
                content: "\f19c";
            }

            .dash-let>a>i:nth-child(2) {
                font-size: 70px;
                position: absolute;
                top: 40%;
                left: calc(50% - 35px);
                left: -webkit-calc(50% - 35px);
                left: -moz-calc(50% - 35px);
                color: rgba(255, 255, 255, 0.7);
            }

            .dash-let>a>i:nth-child(2):hover {
                transform: scale(1.5);
            }

            .dash-let>a>i:nth-child(1):hover {
                transform: scale(2);
            }

            #popup {
                position: absolute;
                background-color: #2b3643;
                border-radius: 5px;
                color: white;
                padding: 1rem;
                display: none;
                top: 40%;
                left: 45%;
                z-index: 3;
                text-align: center;
            }

            #popupDelete {
                position: absolute;
                background-color: #2b3643;
                border-radius: 5px;
                color: white;
                padding: 1rem;
                display: none;
                top: 40%;
                left: 45%;
                z-index: 3;
                text-align: center;
            }

            .close {
                position: absolute;
                top: 0;
                right: 10px;
                cursor: pointer;
            }

            .container {
                overflow-y: scroll;
                max-width: 1430px;
            }

            .container::-webkit-scrollbar {
                width: 0;
            }

            .success {
                position: absolute;
                background-color: rgba(122, 255, 110, 0.96);
                color: white;
                right: 1rem;
                bottom: 5rem;
                padding: 1.5rem;
                font-size: 17px;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
            }

            .error {
                position: absolute;
                background-color: rgba(255, 70, 24, 0.96);
                color: white;
                right: 1rem;
                bottom: 5rem;
                padding: 1.5rem;
                font-size: 17px;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
            }

            .success:hover,
            .error:hover {
                color: white;
            }

            .btn {
                border-radius: 0;
            }.form-floating>label {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                padding: 1rem 0.75rem;
                pointer-events: none;
                border: 1px solid transparent;
                transform-origin: -5rem -11rem;
                transition: opacity .1s ease-in-out, transform .5s ease-in-out;
            }

            .form-control {
                border: 0;
                background-color: #D9D9D9;
                margin-bottom: 1.5rem;
                border-radius: 0;
            }

            .form-floating {
                margin-top: 1rem;
                padding: 0;
            }

            .form-floating label {
                font-weight: 600;
                font-size: 17px;

            }

            .form-control:focus {
                box-shadow: none;
                border: none;
                background: #D9D9D9;
            }

            .form-floating>.form-control:focus,
            .form-floating>.form-control:not(:placeholder-shown) {
                padding-top: 0;
                padding-bottom: 0;
            }
            .form-select {
                margin-bottom: 1.5rem;
                background-color: #D9D9D9;
                border: 0;
                border-radius: 0;
                padding: 0.375rem 0.75rem;
            }

            .form-select:focus {
                border-color: #fff;
                outline: none;
                box-shadow: none;
            }



            @media only screen and (max-width: 580px) {
                .sidebar span {
                    display: none
                }
            }
        </style>
    </head>

    <body style="background: #e9e9e9;">



        <!-- header -->
        <div class="page-header navbar"
            style="background-color: #2b3643;    width: 100%;
    margin: 0;
    border: 0;
    padding: 0;
    height: 50px;
    min-height: 50px;
    filter: none;
    background-image: none;
    font-size: 22px;
    position: relative;
">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo"
                    style="float: left;display: block;width: 235px;height: 50px;padding-left: 20px;padding-right: 20px;">
                    <a href="#/common/dashboard">
                        <img src="images/logo-tlu-home.png" alt="logo" class="logo-default"
                            style="margin-top: 10px !important;height: 30px !important;margin: 18px 0 0;vertical-align: middle;border: 0;overflow-clip-margin: content-box;overflow: clip;">
                    </a>
                    <div class="menu-toggler sidebar-toggler" style="cursor: pointer;">
                        <i onclick="menuToggle()" class="fa fa-reorder"
                            style="color: #677488;font: normal normal normal 14px/1 FontAwesome;font-size: inherit;text-rendering: auto;line-height: 14px;position:absolute;left:12.5rem;top:1.2rem"></i>
                    </div>
                </div>
            </div>
            <div class="top-menu me-2" style="display: block;width: 200px;height: 50px;padding:0 5px;cursor:pointer">
                <ul class="nav navbar-nav pull-right"
                    style="padding: 0;display: block;float: right!important;margin: 0;list-style: none;">
                    <li class="dropdown dropdown-user mt-1">
                        <a style="font-size: 16px;color:#c6cfda;text-decoration:none" href="#" class=" me-3">
                            <img class="me-2" alt="" src="images/profile.png" style="border-radius: 50%;">
                            <span>{{ session()->get('FullName') }}</span>
                            <i class="fa fa-angle-down" style="position: absolute;top:13px;right:0"></i>
                        </a>
                    </li>
                </ul>
                <ul class="content-profile p-0 m-0"
                    style="list-style: none;width:200px;height:290px;background:white;position:absolute;top:3.5rem;right:1rem;z-index:2;border:0.6px solid #ccc"
                    class="p-0 m-0">
                    <li>
                        <div>
                            <img src="images/bg-navbar.jpg" alt="" width="200px" height="140px">
                            <img alt="" src="images/profile.png"
                                style="border-radius: 50%;position:absolute;top:1.1rem;right:3rem" width="100px"
                                height="100px">
                        </div>
                        <div class="content-profile">
                            <div class="box-info mb-2 mt-2">
                                <a href="{{ URL::to('/thongtinad', session()->get('ID')) }}" style="font-size: 16px;"><i
                                        class="fa-solid fa-user "></i> Thông
                                    tin tài khoản</a>
                            </div>
                            <div class="box-info mb-2">
                                <a href="{{ URL::to('/doimatkhau_admin', ['ID' => session()->get('ID')]) }}"
                                    style="font-size: 16px;"><i class="fa-solid fa-shield"></i> Đổi
                                    mật khẩu</a>
                            </div>
                            <hr class="w-100 p-0 m-0">
                            <div class="box-info" style="margin-top:.7rem">
                                <h5 onclick="popup()" style="font-size: 16px;" class="pt-2 pb-2"><i
                                        class="fa-solid fa-power-off"></i> Đăng xuất</h5>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
        <!-- header -->



        
        <!-- siderbar -->
        <div class="sidebar">
            <img src="images/bg-navbar.jpg" alt="" width="100%" height="100px">
            <ul>
                <li data-href="{{ URL::to('/home_admin') }}">
                    <a style="color:#b4bcc8">
                        <i class="fa-solid fa-desktop" style="color:#b4bcc8"></i><span> Trang chủ</span>
                    </a>
                </li>
            </ul>
            <ul style="list-style: none;">
                <li data-href="{{ URL::to('/student-list') }}">
                    <a style="color:#b4bcc8">
                        <i class="fa-solid fa-folder-open" style="color:#b4bcc8"></i><span>Quản lý sinh viên</span>
                    </a>
                </li>
            </ul>
            <ul style="list-style: none;">
                <li data-href="{{ URL::to('/quanlydt') }}">
                    <a style="color:#b4bcc8">
                        <i class="fa-solid fa-folder-open" style="color:#b4bcc8"></i><span>Quản lý đề tài</span>
                    </a>
                </li>
            </ul>
            <ul style="list-style: none;">
                <li data-href="{{ URL::to('/lecturers-list') }}">
                    <a style="color:#b4bcc8">
                        <i class="fa-solid fa-folder-open" style="color:#b4bcc8"></i><span>Quản lý giảng viên</span>
                    </a>
                </li>
            </ul>
            <ul style="list-style: none;">
                <li data-href="{{ URL::to('/hoidong-list') }}" class="actives">
                    <a class="text-light">
                        <i class="fa-solid fa-folder-open text-light" style="color:#b4bcc8"></i><span>Quản lý hội đồng phản
                            biện</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- siderbar -->
        <!-- main -->
        <div class="main">
            <div class="triangle"></div>
            <div class="p-3 ">
                <div class="container bg-light ms-0"
                    style="max-height:620px;border-radius:5px;box-shadow: 0px 0.1875rem 0.4375rem rgb(0 0 0 / 25%);">
                    <a href="{{ URL::to('/hoidong-list') }}" class="btn_back" style="position: absolute;">
                        <i class="bi bi-arrow-left fs-3 ms-2 text-secondary"></i>
                    </a>
                    <h5 class="mt-2" style="text-align:center;font-size:22px">Thông tin Hội đồng phản biện</h5>
                    @if (Session::has('success'))
                        <div class="success" id="message">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="error" id="message">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="mt-2 mb-2">
                         <form action="{{ URL::to('/save-hoidong') }}" method="post">
                            @csrf
                            <div class="">
                                <label for="">Tên hội đồng </label>
                                <select name="username_hoidong" class="form-select"
                                aria-label="Default select example">
                                <option selected></option>
                                @foreach (DB::table('councils')->pluck('CouncilName', 'ID') as $id => $council)
                                    <option value="{{ $id }}">{{ $council }}</option>
                                @endforeach
                            </select>
                            </div>
                            <h3>Danh sách giảng viên tham gia</h3>
                            <div class="row">
                                   <div class="col-md-3">
                                       <label for="">Tên giảng viên</label>
                                       <input class="form-control" type="text" name="username_gv">
                                    </div>
                                    <div class="col-md-3">
                                       <label for="">Mã giảng viên</label>
                                       <input class="form-control" type="text" name="magv">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Bộ môn</label>
                                        <select name="department" class="form-select"
                                            aria-label="Default select example">
                                            <option selected></option>
                                            @foreach (DB::table('departments')->pluck('DepartmentName', 'ID') as $id => $department)
                                                <option value="{{ $id }}">{{ $department }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Hướng nghiên cứu</label>
                                        <select name="research" class="form-select"
                                            aria-label="Default select example">
                                            <option selected></option>
                                            @foreach (DB::table('researchs')->pluck('ResearchName', 'ID') as $id => $research)
                                                <option value="{{ $id }}">{{ $research }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-secondary mb-2 ps-5 pe-5 mb-3 mt-3"
                                  style="text-align:center;position:relative;left:45%;border-radius:5px">Thêm</button>
                             
                         </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- main -->
        <!-- popup -->
        <div class="popup" id="popup">
            <div class="ps-1 pt-1 pb-1 pe-1">
                <h5>Bạn có chắc muốn đăng xuất?</h5>
                <a class="btn btn-success mt-3 me-2" href="{{ URL::to('logout') }}">Đồng ý</a>
                <a class="btn btn-secondary mt-3 ms-2" onclick="Close()">Hủy</a>
            </div>
        </div>
        <!-- popup -->
        <!-- popupDelete -->
        <div class="popupDelete" id="popupDelete">
            <div class="ps-5 pt-1 pb-1 pe-5">
                <h5>Bạn có chắc chắn muốn xóa?</h5>
                <a class="btn btn-success mt-3 me-2" href="{{ URL::to('delete-student/') }}">Đồng ý</a>
                <a onclick="CloseDelete()" class="btn btn-secondary mt-3 ms-2">Hủy</a>
            </div>
        </div>
        <!-- popupDelete -->

        <script>
            function menuToggle() {
                const toggleMenu = document.querySelector('.sidebar');
                main = document.querySelector('.main');
                toggleMenu.classList.toggle('active');
                main.classList.toggle('active');
            }

            function popup() {
                document.getElementById("popup").style.display = "block";
            }

            function Close() {
                document.getElementById("popup").style.display = "none";
            }


            function popupDelete() {
                document.getElementById("popupDelete").style.display = "block";
            }

            function CloseDelete() {
                document.getElementById("popupDelete").style.display = "none";
            }
            var modal = document.getElementById("message");
            window.onclick = function(event) {
                modal.style.display = "none";

            }
            var liTags = document.querySelectorAll('ul li[data-href]');

            for (var i = 0; i < liTags.length; i++) {
                liTags[i].addEventListener('click', function() {
                    window.location.href = this.getAttribute('data-href');
                });
            }
        </script>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script>
           $(document).ready(function() {
             $('li').click(function() {
               $('li').removeClass('actives');
               $(this).addClass('actives');
             });
           });
         </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    </body>

    </html>
@else
    <script>
        window.location = "{{ URL::to('/') }}";
    </script>
@endif
