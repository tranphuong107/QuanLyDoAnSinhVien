<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giáo dục | Hệ thống đăng nhập</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"
        integrity="sha512-kWH92pHUC/rcjpSMu19lT+H6TlZwZCAftg9AuSw+AVYSdEKSlXXB8o6g12mg5f+Pj5xO40A7ju2ot/VdodCthw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo-tlu-home.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        .form-control1 {
            border-radius: 0;
            background: transparent !important;
            border: 0;
            border-bottom: 0.0625rem solid #ccc;
            padding: 0.375rem 0.75rem;
        }

.form-control1:focus {
    border: 0;
    border-bottom: 0.0625rem solid #111;
    background: #66afe9;
    outline: 0;
    transition: all 1s;
}

.list-inline li button {
    background: #111;
}

.list-inline li button:hover {
    background: rgba(37, 37, 37, 0.74);
}

.link-pdf a {
    text-decoration: none;
}

.link-pdf :hover {
    text-decoration: underline;
}

.form-group span {
    position: absolute;
    right: 3rem;
    transform: translate(0, 30%);
    cursor: pointer;
}

.signup__overlay {
    background-image: url("images/logo_tlu.png");
}

        .error {
            position: absolute;
            background-color: rgba(255, 62, 62, 0.96);
            color: white;
            right: 1rem;
            bottom: 1rem;
            padding: 1.5rem;
            font-size: 17px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .error:hover {
            color: white;
        }

        .button {
            font-size: 12px;
            font-weight: 400;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            user-select: none;
            padding: 8px 60px;
            background: #D9D9D9;
            color: white;
            border: 0;
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .button:hover {
            background-color: rgba(180, 180, 180, 0.8);
            transition: all .5s;
        }
    </style>
</head>

<body style="background-color: #dde3ec !important;">


    <div class="signup__container"
        style="position: absolute;top: 50%;right: 0;left: 0;margin-right: auto;margin-left: auto;transform: translateY(-50%);overflow: hidden;display: flex;    align-items: center;    justify-content: center;  width: 55.5rem;   height: 33.5rem;   border-radius: 0.1875rem;  box-shadow: 9px 4px 4px rgba(0, 0, 0, 0.25);">

        <div class="container__child signup__thumbnail col-md-6"
            style="position: relative;padding: 2rem;display: flex;flex-wrap: wrap;align-items: center;background: linear-gradient(to right, #67D7F5, #86F7CC);background-repeat: no-repeat;background-position: 50% center;background-size: 100%;    width: 50%;height: 100%;">
            <div class="signup__overlay h-100"
                style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-repeat: no-repeat;background-position: 50% center;background-size: 75%;">
            </div>
        </div>
        <div class="container__child signup__form col-md-6"
            style="padding: 2.5rem;background: #fafafa;width: 50%;height: 100%;">
            <form action="{{URL::to('/login')}}" class="ng-dirty ng-valid-parse ng-valid ng-valid-required" method="">
                @csrf
                <div class="form-group" style="margin-top:25px">
                    <label style="display: inline-block;font-size:20px" for="username">TÊN ĐĂNG NHẬP</label>
                    <input class="form-control1 w-100" type="text" autocomplete="off" placeholder="Tên đăng nhập"
                        name="admin_acc">

                </div>

                <div class="form-group mt-2">
                    <label style="display: inline-block;font-size:20px" for="password">MẬT KHẨU</label>
                    <input class="form-control1 w-100" type="password" placeholder="***" name="admin_pass"
                        id="password">
                    <span><i onclick="Toggle()" class="fa-solid fa-eye" id="eye"></i></span>
                </div>

                <div class="m-t-lg" style="margin-top:2.5rem">
                    <ul class="list-inline">
                        <li>

                            <!-- <button type="submit" style="text-transform:uppercase;color:#fff;display: inline-block;    text-align: center;white-space: nowrap;vertical-align: middle;touch-action: manipulation;cursor: pointer;border: 0.0625rem solid transparent;    outline: 0!important;font-size: 12px;font-weight: 600;    border-radius: 2px; overflow: hidden;position: relative;user-select: none;padding: 8px 14px 7px;">ĐĂNG NHẬP</button> -->
                            <input class="button text-dark" type="submit" value="Đăng nhập" name="login">
                        </li>
                        <li>
                            <a class="signup__link" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p
                        style="color: #f0083c;font-style: normal;margin-top: 4px;    font-size: 16px;    margin-bottom: 5px;font-weight:400">
                        (*) Đăng nhập bằng tài khoản/mật khẩu của trang khai báo thông tin thí sinh</p>
                    <p
                        style="color: #f0083c;font-style: normal;margin-top: 4px;    font-size: 16px;    margin-bottom: 5px;font-weight:400">
                        (*) Điện thoại + zalo hỗ trợ:</p>
                    <p
                        style="color: #f0083c;font-style: normal;margin-top: 4px;    font-size: 16px;    margin-bottom: 5px;font-weight:400">
                        0367.282.676 - 0362.500.881
                    </p>
                </div>
                
            </form>
        </div>

    </div>

    <?php

use Illuminate\Support\Facades\Session;

         $mess = Session::get('message');

         if($mess){
            Session::put('message',null);
            echo '<div>
                  <a class="error" id="error"><i class="bi bi-exclamation-triangle-fill me-2"></i>'. $mess .' <i style="position:absolute;top:2px;right:2px;font-size:20px" class="bi bi-x"></i></a>
                 
                 </div>';
         }

      ?>



<script>
 
/* lấy phần tử modal */
var modal = document.getElementById("error");
/* thiết lập nút đóng modal */
var span = document.getElementsByClassName("bi")[0];

/* Sẽ đóng modal khi nhấn dấu x */
span.onclick = function() {
    modal.style.display = "none";
}
/*Sẽ đóng modal khi nhấp ra ngoài màn hình*/
window.onclick = function(event) {
    modal.style.display = "none";

}
//hieeenr thị mật khẩu
var state = false;

        function Toggle() {
            if (state) {
                document.getElementById("password").setAttribute("type",
                    "password");
                state = false;
            } else {
                document.getElementById("password").setAttribute("type",
                    "text");
                state = true;
            }
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>