
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giáo dục | Đăng ký đề tài</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js" integrity="sha512-kWH92pHUC/rcjpSMu19lT+H6TlZwZCAftg9AuSw+AVYSdEKSlXXB8o6g12mg5f+Pj5xO40A7ju2ot/VdodCthw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo-tlu-home.png" type="image/x-icon">
    <style>
        .fa-reorder::before{
            content: "\f0c9";
            box-sizing: border-box;
        }
        .top-menu:hover{
            background: rgba(120, 120, 120, 0.5);
            transition: all 1s;
        }
        .box-info{
            padding: 0 1rem;
        }
        .box-info:hover{
            background-color: #e9e9e9;
        }
        .box-info a{
            text-decoration: none;
            color: black;
        }
        .box-info a:hover{
            color: #00d2d3;
        }
        .content-profile {
            visibility: hidden;
            opacity: 0;
            transition: 0.5s;
            transform: translateX(0%) translateY(0px);
        }
        .top-menu:hover .content-profile{
            visibility: visible;
            opacity: 1;
            transform: translateX(0%) translateY(0px);
        }
        .sidebar{
            background-color: #2b3643;
            position:fixed;
            left:0;
            height:100%;
            width:17%;
            z-index:-1;
            transition: all 0.5s
        }
        .sidebar ul{
            border-top: 1px solid #3d4957;
            cursor: pointer;
            padding: 0 1rem;
        }
        .sidebar ul li i{
            margin-right: 10px;
        }
        .sidebar ul:hover{
            background-color: rgba(37,37,37,.74);
            transition: all 0.7s;
        }
       .sidebar.active{
           opacity: 1;
       }
       .sidebar.active ul li span{
           display: none;
       }
       .main{
        position:absolute;
        right:0;
        min-height:100%;
        width:83%; 
        padding:1rem 1rem;
        opacity: 1;
        z-index: 1;
        background-color: #e9e9e9;
       }
       .main.active{
          width: 100%;
          opacity: 1;
          left: 3.5rem;
       }
       .triangle{
        width: 0;
        height: 0;
        border-bottom: 20px solid #e9e9e9;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        transform: rotate(-90deg);
        position: relative;
        top: 6rem;
        left:-2rem;
        opacity: 1;
       }
       .sidebar ul li a{
        color: #b4bcc8;
        text-decoration: none;
       }
       .dash-let>a>i:first-child {
            font-size: 320px;
            position: absolute;
            color: rgba(255,255,255,0.1);
            top: 30%;
            left: -16%;
        }
        [class*=" fa-"]:not(.fa-stack), [class*=" glyphicon-"], [class*=" icon-"], [class^=fa-]:not(.fa-stack), [class^=glyphicon-], [class^=icon-] {
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
        background-color: rgba(0,0,0,0.05);
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
        color: rgba(255,255,255,0.7);
    }
    .flex-container {
    display: flex;
    flex-wrap: wrap;
    }
    .flex-container .box {
    padding: 10px;
    width:33.3%
    }
    .change-pass a{
        background-color: #ccc
    }
    .change-pass a:hover{
        background-color:  rgba(127,127,127,0.5);
        transition: all .5s;
    }
    .page-header{
        background-color: #2b3643;   
        width: 100%;
        margin: 0;
        border: 0;
        padding: 0;
        height: 50px;
        filter: none;
        font-size: 22px;
        /* top:100px; */
        /* position: fixed; */
    }
    </style>
</head>
<body style="background: #e9e9e9;">
<!-- header -->
<div class="page-header navbar" style="background-color: #2b3643;    width: 100%;
    margin: 0;
    border: 0;
    padding: 0;
    height: 50px;
    min-height: 50px;
    filter: none;
    background-image: none;
    font-size: 22px;
    position: relative;
"><!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo" style="float: left;display: block;width: 235px;height: 50px;padding-left: 20px;padding-right: 20px;">
        <a href="#/common/dashboard">
            <img src="images/logo-tlu-home.png" alt="logo" class="logo-default" style="margin-top: 10px !important;height: 30px !important;margin: 18px 0 0;vertical-align: middle;border: 0;overflow-clip-margin: content-box;overflow: clip;"> </a>
        <div class="menu-toggler sidebar-toggler" style="cursor: pointer;">
            <i onclick="menuToggle()" class="fa fa-reorder" style="color: #677488;font: normal normal normal 14px/1 FontAwesome;font-size: inherit;text-rendering: auto;line-height: 14px;position:absolute;left:12.5rem;top:1.2rem"></i>
        </div>
    </div>
</div>
<div class="top-menu me-2" style="display: block;min-width: 200px;height: 50px;padding:0 5px;cursor:pointer">
        <ul class="nav navbar-nav pull-right" style="padding: 0;display: block;float: right!important;margin: 0;list-style: none;">
            <li class="dropdown dropdown-user mt-1">
                <a  style="font-size: 16px;color:#c6cfda;text-decoration:none" href="#" class=" me-3">
                    <img alt="" src="images/profile.png" style="border-radius: 50%;">
                    <span>{{ session()->get('FullName') }}</span>
                    <i class="fa fa-angle-down"></i>
                </a>
            </li>
        </ul>
        <ul class="content-profile p-0 m-0" style="list-style: none;width:200px;height:290px;background:white;position:absolute;top:3.5rem;right:1rem;z-index:2;border:0.6px solid #ccc" class="p-0 m-0">
            <li >
                <div>
                    <img src="images/bg-navbar.jpg" alt="" width="200px" height="140px">
                    <img alt="" src="images/profile.png" style="border-radius: 50%;position:absolute;top:1.1rem;right:3rem" width="100px" height="100px">
                </div>
                <div class="content-profile">
                    <div class="box-info mb-2 mt-2" >
                    <a href="{{URL::to('/thongtincanhan', session()->get('ID') )}}" style="font-size: 16px;"><i class="fa-solid fa-user "></i> Thông tin tài khoản</a>
                    </div>
                    <div class="box-info mb-2">
                    <a href="{{URL::to('/doimatkhau')}}" style="font-size: 16px;"><i class="fa-solid fa-shield"></i> Đổi mật khẩu</a>
                    </div>
                    <hr class="w-100 p-0 m-0">
                <div class="box-info" style="margin-top:.7rem">
                <a href="{{URL::to('/')}}" style="font-size: 16px;"><i class="fa-solid fa-power-off"></i> Đóng tài khoản</a>
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
  <ul style="list-style: none;background-color:#36c6d3" class=" pt-2 pb-2 mt-0 mb-0">
      <li>
          <i class="fa-solid fa-desktop text-light"></i>
          <a href="{{URL::to('/trangchu')}}" class="text-light">
             <span>Trang chủ</span>
          </a>
      </li>
  </ul>
  <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0">
      <li >
          <i class="fa-solid fa-folder-open" style="color:#b4bcc8"></i>
          <a href="{{URL::to('/dangkydetai')}}" style="color:#b4bcc8">
             <span>Đăng ký đề tài</span>
          </a>
      </li>
  </ul>
  <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0">
      <li>
          <i class="fa-solid fa-folder-open" style="color:#b4bcc8"></i>
          <a href="{{URL::to('/ketquadangky')}}"  style="color:#b4bcc8">
             <span>Kết quả đăng ký đề tài</span>
          </a>
      </li>
  </ul>
  <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0">
      <li>
          <i class="bi bi-grid" style="color:#b4bcc8"></i>
          <a href="{{URL::to('/quanlytiendo')}}" style="color:#b4bcc8">
             <span>Quản lý tiến độ</span>
          </a>
      </li>
  </ul>
  <ul style="list-style: none;" class=" pt-2 pb-2 mt-0 mb-0">
      <li>
          <i class="fa-solid fa-bell" style="color:#b4bcc8;margin-right:15px"></i>
          <a href="{{URL::to('/thongbao')}}" style="color:#b4bcc8">
             <span>Thông báo</span>
          </a>
      </li>
  </ul>
</div>
<!-- siderbar -->
<div class="main" >
            <div class="" style="padding: 0 2rem">
                <div class="box-dangky bg-light p-4 pb-5" style="border-radius:5px;min-height:600px">
                    <h5 style="text-align:center; color:#0071C6;">ĐĂNG KÝ ĐỒ ÁN ĐỢT 1 NĂM 2023</h5>
                    <div class="box-select-search" >
                        <select style="background-color:#0071C6;color:#fff" class="form-select w-25" aria-label=".form-select-sm example" >
                            <option selected>--Hướng nghiên cứu--</option>
                            <option value="1">--Trí tuệ nhân tạo--</option>
                            <option value="2">--Xử lý ảnh--</option>
                            <option value="3">--Khai phá dữ liệu--</option>
                        </select>
                    </div>
                    <h5 class="text-center p-3">Danh sách giảng viên hướng dẫn</h5>
                    <div class="table-ds">
                        <table class="table table-bordered" style="border:1px solid #333">
                            <thead>
                                    <tr class="text-center">
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Bộ môn</th>
                                    <th scope="col">Thông tin</th>
                                    <th scope="col">Hướng nghiên cứu</th>
                                    <th scope="col">Thao tác</th>
                                    </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                    <tr>
                                    <th scope="row" class="text-end">1</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">2</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">3</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">4</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr><tr>
                                    <th scope="row" class="text-end">5</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">6</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr><tr>
                                    <th scope="row" class="text-end">7</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">8</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr><tr>
                                    <th scope="row" class="text-end">9</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">10</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr><tr>
                                    <th scope="row" class="text-end">1</th>
                                    <td>Trần Mạnh Tuấn</td>
                                    <td>Hệ thống thông tin</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956782579<br/>
                                        <i class="bi bi-envelope"></i> tuantranmanh@e.tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn 
                                    </td>
                                    <td>
                                        Trí tuệ nhân tạo<br/>
                                        Khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="text-end">2</th>
                                    <td>Vũ Huy Đức</td>
                                    <td>Khoa học máy tính</td>
                                    <td>
                                        <i class="bi bi-telephone"></i> 0956381637<br/>
                                        <i class="bi bi-envelope"></i> ducnghuy@tlu.edu.vn<br/>
                                        <i class="bi bi-tags"></i> Phó trưởng bộ môn
                                    </td>
                                    <td>
                                        Tin sinh học<br/>
                                        Học máy và khai phá dữ liệu
                                    </td>
                                    <td class="text-center">
                                        <a href="" style="text-decoration: none;color:#0071C6;font-weight:bold">
                                        Đăng ký</td>
                                    </tr>
                            </tbody>
                        </table>                
                    </div>
                    <div style="position:absolute;right:80px">
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
                    </div>
                </div>
            </div>
       </div>
    <script>
          function menuToggle() {
                const toggleMenu = document.querySelector('.sidebar');
                      main = document.querySelector('.main');
                toggleMenu.classList.toggle('active');
                main.classList.toggle('active');
            }
    </script>

<script src="{{asset('js\main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>