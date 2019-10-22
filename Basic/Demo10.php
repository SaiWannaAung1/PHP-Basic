<?php
if (isset($_POST['btn1'])){
    $input = $_POST['txtTitle'];
    echo "In your string ".strlen($input). (strlen($input)>1 ?  'characters contained': 'character contained');
}
if (isset($_POST['btn2'])){
    $input = $_POST['txtTitle'];
    echo "In your string ".str_word_count($input). (str_word_count($input)>1 ?  'words contained': 'word contained');
}
if (isset($_POST['btn3'])){
    $input = $_POST['txtTitle'];
    echo "Convert to uppercase ".strtoupper($input);
}if (isset($_POST['btn4'])){
    $input = $_POST['txtTitle'];
    echo "Convert to lower ".strtolower($input);
}
if (isset($_POST['btn5'])){
    $input = $_POST['txtTitle'];
    echo "Convert the first character to upper ".ucfirst($input);
}
if (isset($_POST['btn6'])){
    $input = $_POST['txtTitle'];
    echo "Convert the first character to lower ".lcfirst($input);
}if (isset($_POST['btn7'])){
    $input = $_POST['txtTitle'];
    echo "MD5 ".md5($input);
}if (isset($_POST['btn8'])){
    $input = $_POST['txtTitle'];
    echo "MD5 ". str_rot13($input);
}if (isset($_POST['btn9'])){
    $input = $_POST['txtTitle'];
    echo "sha1 ". sha1($input);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <h1> Enter Book Title:</h1>
    <input type="text" name="txtTitle" size="20">
    <br>
    <br>
    <input type="submit" name="btn1" value="Length">
    <input type="submit" name="btn2" value="Word Count">
    <input type="submit" name="btn3" value="Uppercase">
    <input type="submit" name="btn4" value="Lowercase">
    <input type="submit" name="btn5" value="First Character Upper">
    <input type="submit" name="btn6" value="First Character Lower">
    <input type="submit" name="btn7" value="MD5">
    <input type="submit" name="btn8" value="Str rotat 13">
    <input type="submit" name="btn9" value="Sha1">
</form>



</body>
</html>
