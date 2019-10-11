<?php
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo $str;// This is some <b>bold</b> text.
echo "<br>";
echo htmlspecialchars($str);
// This is some &lt;b&gt;bold&lt;/b&gt; text.
echo "<br>";
echo htmlspecialchars_decode($str);
// This is some bold text.
echo "<br>";
?>
