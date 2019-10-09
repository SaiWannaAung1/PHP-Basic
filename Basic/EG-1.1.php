<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container_fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="EG-1.1.php">Demo7 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Demo2.php">Demo2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Demo3.php">Demo3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Demo4.php" tabindex="-1" >Demo4</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">

                <h3 class="text-info text-center mb-3">Login To System</h3>
                <form  action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="english">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txt_email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="english">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="txt_password">
                    </div>


                    <div class="row justify-content-between no-gutters">
                        <i href="#" class="english" style="font-style:normal; "> <?php validate();?></i>
                        <div>

                            <button type="reset" class="btn btn-outline-secondary english">Cancel</button>
                            <button type="submit" class="btn btn-primary english" name="btn_login">Login</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



<?php
function validate(){
    if (isset($_POST["btn_login"])) {
        $email = $_POST["txt_email"];
        $password = $_POST["txt_password"];

        $true_email="Admin@gmail.com";
        $true_password="123";

        if ($true_email==$email ){
            if ($true_password==$password)
            {
                echo "<span class='badge badge-success'> Email and Password correct</span>";
            }
            else{
                echo "<span class='badge badge-danger'> Email correct and Password incorrect</span>";
            }
        }elseif ($true_email!=$email){
            if ($true_password!=$password)
            {
                echo "<span class='badge badge-danger'>Email and password incorrect</span>";
            }else{
                echo "<span class='badge badge-danger'>Email incorrect and Password correct</span>";
            }
        }
    }


}

?>




