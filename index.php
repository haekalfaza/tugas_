<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Administrator</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        video{
            position : fixed;
            z-index: -100;
        }
        .login-container{
            width:350px;
            margin:390px auto auto auto;
            padding:30px;
            background:transparent;
            border-radius:10px;
        }
        .title{
            text-align:center;
        }
        .input-label{
            width:400px;
            display:block;
        }
        .input{
            padding 5px 0px;
        }
        input{
            width:100%;
        }
        button{
            width:100px;
            padding:10px;
            cursor:pointer;
            transition-duration: 0.4s;
            background: #4CAF50;
            border: solid 2px white;
            
        }
        button:hover{
            background-color: green;
            color:white;
        }
        h1{
            font-family: 'Roboto Mono', monospace;
            color : white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <video width="100%" autoplay muted>
            <source src="p.mp4" type="video/mp4">
        </video>
        <div class="row">
            <div class="col-7">
                <img src="title.png" width="100%" alt="">
            </div>
            <div class="col-4">
                <div class="kotak-luar">
                    <div class="kotak-login p-5">
                        <center><h1 class="mt-5">Login-admin</h1></center>
                        <form action="" method="post">
                            <div class="form-group mt-5 mb-5">
                                <!-- <label for="username">Username</label> -->
                                <input class="form-control" type="text" id="username" name="username" placeholder="username" required>
                            </div>
                            <div class="form-group mb-5">
                                <!-- <label for="password">Password</label> -->
                                <input class="form-control" type="password" id="password" name="password" placeholder="password" required>
                            </div>
                            <div class="form-group">
                                <center><button class="btn btn-primary" name="login" type="submit">LOGIN</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    </body>
</html>  
<?php
include ('koneksi.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username = '$username'");
    foreach ($query as $row) {
    $nama = $row['nama'];
    $jabatan = $row['jabatan'];
    $hash = $row['password'];
    }
    if (mysqli_num_rows($query)>0) { 
    ////////////////////////////////////////////
        if (password_verify($password,$hash)) {
            session_start();
            $_SESSION['status'] = 'login';
            $_SESSION['nama'] = $nama;
            $_SESSION['jabatan'] = $jabatan;
        ?>
        <script>
             alert('itu benar');
             window.location.href='http://localhost/14_mywebsite_12RPL2/admin.php';
        </script>
        <?php
    }else{
        echo 'invalid password';

        //get data numpang di url
        //post tidak menampilkan data di url
    }
}
}
?>
