<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sign</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-primary text-white p-2 text-center font-weight-bold mt-5">Nhập thông tin người dùng</div>
    <form action="" class="container border font-weight-bold p-4" method="POST">
        <label class="m-4" style="width: 150px" for="">Họ và tên :</label><input style="width: 870px" type="text" name="username"><br>
        <label class="m-4" style="width: 150px" for="">Giới tính :</label><input style="width: 870px" type="text" name="sex"><br>
        <label class="m-4" style="width: 150px" for="">Tuổi :</label><input style="width: 870px" type="text" name="age"><br>
        <label class="m-4" style="width: 150px" for="">Số điện thoại :</label><input style="width: 870px" type="text" name="number"><br>
        <label class="m-4" style="width: 150px" for="">Email :</label><input style="width: 870px" type="text" name="email"><br>
        <label class="m-4" style="width: 150px" for="">Tên đăng nhập :</label><input style="width: 870px" type="text" name="name"><br>
        <label class="m-4" style="width: 150px" for="">MẬt khẩu :</label><input style="width: 870px" type="password" name="password"><br>
        <input class="mt-4 mb-4  bg-primary text-white font-weight-bol rounded " style="margin-left: 490px" type="submit" value="Tạo tài khoản" name="sign">
    </form>
    <?php
        if(isset($_POST['sign'])){
            setcookie('username',$_POST['username'],time()+30000000);
            setcookie('sex',$_POST['sex'],time()+30000000);
            setcookie('age',$_POST['age'],time()+30000000);
            setcookie('number',$_POST['number'],time()+30000000);
            setcookie('email',$_POST['email'],time()+30000000);
            setcookie('name',$_POST['name'],time()+30000000);
            setcookie('password',$_POST['password'],time()+30000000);
            header("location: list.php");
        };
    ?>
</body>
</html>