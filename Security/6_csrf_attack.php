<?php require_once "../../inc/header.php" ?>

<h1>CSRF Attack</h1>

<p>
    In this tutorial we will be covering about SQL injection attack and defenced.
</p>

<h2>Course Categories</h2>

<ol>
    <li>SQL Injection Via GET method</li>
    <li>SQL Injection Via POST Method</li>
    <li>How to Panitrate</li>
    <li>How to defenced</li>
</ol>



<h2>CSRF Attack From Client Side</h2>
<?php

$xmp = '
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>CSRF</title>
          <script src="jquery-3.3.1.js">

          </script>
        </head>
        <body>
          <h1>JavaScript File</h1>
          <script>
          var data = {
            name : "Jhon Doe",
            email : "jhondoe@gmail.com",
            comment : "I am Mr.Jhon Deo, this is my 2nd comment!",
            _token : "123123"
          }

          $.post("http://hacker.bm/post.php",data,function(res){
            alert(res);
          });

          </script>
        </body>
      </html>
';

echo showCode($xmp);

 ?>


 <h2>Post Form File</h2>


 <?php
 $xmp = '

     <?php
     session_start();
     ?>

     <h1>This is PHP File</h1>
     <form action="post.php" method="post">
         <input type="hidden" name="_token" value="<?php echo $_SESSION["_token"];?>" >
         <input type="text" name="name" id=""><br><br>
         <input type="email" name="email" id=""><br><br>
         <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
         <input type="submit" value="Comment">
     </form>

 ';
 echo showCode($xmp);
  ?>

 <h2>Post PHP file</h2>

 <pre>
   <code class="php">
      session_start();
      require_once "db.php";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
         if(isset($_POST["_token"])){
              if($_POST["_token"] == $_SESSION["_token"]){
                  $db = new DB();
                  $result = $db->insert($_POST["name"],$_POST["email"],$_POST["comment"]);
                  echo $result ? "Comment Insert Successfully" : "Comment Insert Fail!";
              }else{
                  echo "Token Problem";
              }
         }else{
             echo "Invalid CSRF Request";
         }

      }

      $_SESSION["_token"] = bin2hex(openssl_random_pseudo_bytes(16));
    </code>
 </pre>

<h2>Database Class</h2>

 <pre>
   <code>
      class DB
      {
          private $db;
          public function __construct()
          {
              $this->db = new PDO("mysql:host=localhost;dbname=hacker", "root", "");
          }
          public function insert($name, $email, $comment)
          {
              $stmt = $this->db->prepare("INSERT INTO comment (name,email,comment) VALUES (:name,:email,:comment)");
              $result = $stmt->execute([
                  "name" => $name,
                  "email" => $email,
                  "comment" => $comment
              ]);
              return $result;

          }
          public function getAllComment()
          {
              $stmt = $this->db->prepare("SELECT * FROM comment");
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_OBJ);
              return $result;
          }
      }
   </code>
 </pre>



<?php require_once "../../inc/footer.php" ?>
