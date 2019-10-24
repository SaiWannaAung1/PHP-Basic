<?php require_once "../../inc/header.php" ?>
        <h1>SQL Injection</h1>
        <p>
           In this tutorial we will be covering about SQL injection attack and defenced.
        </p>
        <h1>Course Categories</h1>
        <ol>
            <li>SQL Injection Via GET method</li>
            <li>SQL Injection Via POST Method</li>
            <li>How to Panitrate</li>
            <li>How to defenced</li>

<!-- Raw Data Start -->
&lt?php

// error_reporting(0);
@include "./app/config/dbhacker.php";

?&gt

<!--
Error
 1. php.ini display_errors = Off
 2. ini_set("display_errors","Off");
 3. error_reporting(0)
 4. @include
// Development Mode => Debugging Mode
// Publishing Mode => Debug Off => Errors Off => Error Logging => Error File
// Dedicated Server <=> Virtual Private Server
// Sharing Hosting   => Godaddy =>  -->
<!-- Raw Data End -->

        </ol>
        <pre>
            <code class="php">
            &lt?php

$db = new PDO("mysql:host=localhost;dbname=hacker", "root", "");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
    $stmt-&gtbindValue(":name", $name, PDO::PARAM_NULL);
    $stmt-&gtexecute();
    $result = $stmt-&gtfetchAll(PDO::FETCH_OBJ);
    echo "&ltpre&gt" . print_r($result, true) . "&lt/pre&gt";
} else {
    echo $_GET['url'];
}
// `'UNION SELECT * FROM users`'
// '' OR 1=1
// '; DROP TABLE tablename;--
// with name parameter  single code and non single code

?&gt

&ltform action="&lt?php echo $_SERVER['PHP_SELF']; ?&gt" method="post"&gt
&ltinput type="text" name="name" id=""&gt&ltbr&gt&ltbr&gt
&ltinput type="submit" value="Login"&gt
&lt/form&gt
            </code>
        </pre>

<?php require_once "../../inc/footer.php" ?>
