<?php


function name_error() {


    $errors=[];

    if (isset($_POST['sumbit'])) {

        // $name=ltrim($_POST['name']);
        // echo  strlen($name);

        // trim($name); left and right remove space
        // ltrim($name); left only remove space
        // rtrim($name); right only remove space

        $name = trim($_POST['name']);
        if (empty($name)) {
            array_push($errors, "Name is Require".'<br>');

        }
        else{
            if (!preg_match('/^[a-zA-z ]*$/', $name)) {
                array_push($errors, "Only Letter and white space is allow".'<br>');
            }
            elseif (strlen($name)<=6)  {
                array_push($errors, "Username should be six character".'<br>');
            }
        }
    }

// end of valid
    if (count($errors) > 0) {
        for($x = 0; $x < count($errors); $x++) {

            echo '<span style="color: red;font-size: 14px; font-weight: bold;">'.$errors[$x]
                .'</span>';
        }
    }


}
/////////////////////end of name error///////////////////

function email_error() {


    $email_err=[];

    if (isset($_POST['sumbit'])) {


        $email = trim($_POST['email']);
        if (empty($email)) {
            array_push($email_err, "Email is require".'<br>');

        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($email_err, "Email is invalid.".'<br>');
            }
        }
    }

// end of valid
    if (count($email_err) > 0) {
        for($x = 0; $x < count($email_err); $x++) {

            echo '<span style="color: red;font-size: 14px; font-weight: bold;">'.$email_err[$x]
                .'</span>';
        }
    }


}
//////////////////////////End of email error////////////////////////////

function password_error() {


    $password_err=[];
    $password_c_err=[];

    if (isset($_POST['sumbit'])) {


        $password = trim($_POST['password']);
        $password_comfin=trim($_POST['password_comfin']);

        if (empty($password)) {
            array_push($password_err, "Password is require".'<br>');

        }
        else if (empty($password_comfin)) {
            array_push($password_c_err, "Check Comfine Password");
        }
        else{
            if (strlen($password)<6) {
                array_push($password_err,"Password must be six character".'<br>' );

            }
            else{
                if (preg_match('/^[a-zA-z!@#$%^]*$/', $password))  {
                    array_push($password_err, "passowrd error ".'<br>');

                }


            }

        }


    }

// end of valid
    if (count($password_err) > 0) {
        for($x = 0; $x < count($password_err); $x++) {

            echo '<span style="color: red;font-size: 14px; font-weight: bold;">'.$password_err[$x]
                .'</span>';
        }
    }
    if (count($password_c_err) > 0) {
        for($x = 0; $x < count($password_c_err); $x++) {

            echo '<span style="color: red;font-size: 14px; font-weight: bold;">'.$password_c_err[$x]
                .'</span>';
        }
    }


}
//////////////////////////End of password error////////////////////////////





?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Lesson</title>
</head>
<body>
<form action="Demo10.php" method="POST">



    <input type="text" name="name" placeholder="Type Username">
    <br>
    <?php name_error();  ?>


    <?php 	  ?>



    <input type="text" name="email" placeholder="Type Email">
    <br>
    <?php email_error();  ?>


    <?php 	  ?>
    <input type="password" name="password" placeholder="Type Password">
    <br>
    <?php password_error();  ?>


    <?php 	  ?>
    <input type="password" name="password_comfin" placeholder="Type Comfin Password">
    <br>
    <?php password_error();  ?>


    <?php 	  ?>


    <button type="sumbit" name="sumbit">Register</button>
</form>
</body>
</html>
