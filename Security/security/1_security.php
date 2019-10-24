<?php

$db = new PDO("mysql:host=localhost;dbname=hacker", "root", "");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
    $stmt->bindValue(":name", $name, PDO::PARAM_NULL);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>" . print_r($result, true) . "</pre>";
} else {
    echo $_GET['url'];
}
// `'UNION SELECT * FROM users`' //  (POST) yield if value is wrap with single code
// '' OR 1=1 // (POST) yield if value is wrap not with single code
// index.php?id=200 OR 1=1 // (GET) yield for get method without single code
// index.php?name=MgM `'UNION SELECT * FROM users`' // (GET) yield get method with single code
// '; DROP TABLE tablename;--
// with name parameter  single code and non single code

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" id=""><br><br>
    <input type="submit" value="Login">
</form>
