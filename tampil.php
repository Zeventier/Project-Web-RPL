<?php
echo $txt1 = "Selamat datang di latihan PHP <br><br>";
echo "Data 1 = ", $data1 = 12, " tipe data ";
var_dump($data1);
echo "<br>";

echo "Data 2 = ", $data2 = 1.5, " tipe data ";
var_dump($data2);
echo "<br>";

echo "Data 3 = ", $data3 = 123, " tipe data ";
var_dump($data3);
echo "<br>";

echo "Data 4 = ", $data4 = "hallo", " tipe data ";
var_dump($data4);
echo "<br>";

echo "Data 5 = ", $data5 = 1.243, " tipe data ";
var_dump($data5);
echo "<br>";

echo "Data 6 = ", $data6 = "apa khabar?", " tipe data ";
var_dump($data6);
echo "<br>";

echo "Data 7 = ", $data7 = "kamu", " tipe data ";
var_dump($data7);
echo "<br>";

echo "Data 8 = ", $data8 = $data1 + $data2, " tipe data ";
var_dump($data8);
echo "<br>";

echo "Data 9 = ", $data9 = $data4 . " " . $data6, " tipe data ";
var_dump($data9);
echo "<br>";

echo "Data 11 = ", $data11 = True, " tipe data ";
var_dump($data11);
echo "<br>";

echo "Data 12 = ", $data12 = $_SERVER['HTTP_USER_AGENT'], " tipe data ";
var_dump($data12);
