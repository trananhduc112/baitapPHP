<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-primary text-white p-2 text-center font-weight-bold mt-5">Thông tin người dùng</div>
    <form action="" class="container border font-weight-bold p-4" method="POST">
        <div class="border p-2 d-flex justify-content-between">
          <?php
            echo ("Họ và tên :" .$_COOKIE['username']);
            echo ("<br>Giới tính :" .$_COOKIE['sex']);
            echo ("<br>Tuổi :" .$_COOKIE['age']);
            echo ("<br>Số điện thoại :" .$_COOKIE['number']);
            echo ("<br>Email :" .$_COOKIE['email']);
            echo ("<br>Tên đăng nhập :" .$_COOKIE['name']);
            echo ("<br>Mật khẩu :" .$_COOKIE['password']);
          ?>
        </div>

    </form>
    <div class="container bg-primary text-white p-2 text-center font-weight-bold ">
        <a class=" text-white " href="list.php">Trở lại danh sách người dùng</a>
    </div>
</body>
</html>