<?php require_once "../../inc/header.php" ?>
        <h1>SQL Injection</h1>

        $password = "123123";<br>
$hashpass = "$2y$10$2YkXt0KlujA.x2DrzI8ofugMluBxz7bg0m.Co920.TTm2VOI.8wpe";<br>

$hpass = password_hash($password,PASSWORD_BCRYPT,['cost'=>15]);<br>
<br>
$con = password_verify($password, $hashpass);

echo $con ? "TRUE" : "FALSE";<br>
//123123
//$2y$10$2YkXt0KlujA.x2DrzI8ofugMluBxz7bg0m.Co920.TTm2VOI.8wpe<br>


<?php require_once "../../inc/footer.php" ?>
