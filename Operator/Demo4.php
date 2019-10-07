

<!doctype html>
<html lang="en">
<head>

    <title>Demo4</title>

</head>
<body>

    <form action="Demo4.php" method="post">


            <input type="text" placeholder="Enter Name" name="user_name">
        <br>
            <input type="text"  placeholder="Enter Email" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>




</body>
</html>

<?php
if (isset($_POST['sumbit'])) {
    $name = $_POST['user_name'];
    $email = $_POST['email'];

    echo $name;
    echo "<br>";
    echo $email;
}
?>
