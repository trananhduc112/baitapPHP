<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-primary text-white p-2 text-center font-weight-bold mt-5">Danh sách người dùng</div>
    <form action="" class="container border font-weight-bold p-4" method="POST">
        <div class="border p-2 d-flex justify-content-between">
           <div>
                <?php
                    echo("Tên người dùng :" .$_COOKIE['username']);
                ?>
           </div>
           <div>
                <?php
                    echo("Tên đăng nhập :" .$_COOKIE['name']);
                ?>
           </div>
           <a href="info.php">thông tin người dùng</a>
           <a href="delete.php">xóa người dùng</a>
        </div>
    </form>
    <div class="container bg-primary  p-2 text-center font-weight-bold ">
        <a class="text-white" href="sign.php">Thêm người sử dụng</a>
    </div>
</body>
</html>