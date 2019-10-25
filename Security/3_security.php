<?php require_once "../../inc/header.php" ?>
        <h1>SQL Injection</h1>
<pre>
    <code>
        including .php or .inc
        &lt?php
        include "./app/config/db.php";

        $name = "waiferkolar";
        $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
        $stmt->execute([
            "name" => $name
        ]);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
        echo "&ltpre&gt" . print_r($result, true) . "&lt/pre&gt"


        ?&gt
    </code>
</pre>
<?php require_once "../../inc/footer.php" ?>
