<?php
$text = "Inle Lake is a freshwater lake located in the Nyaungshwe Township of Taunggyi District of Shan State, part of Shan Hills in Myanmar ( Burma).";
echo "String length is ".strlen($text)."<br>";
echo "Word is ".str_word_count($text)."<br>";
echo "First Is Upper :".ucwords(strtolower($text))."<br>";
echo "fIRST iS lOWER :". strtoupper($text);
