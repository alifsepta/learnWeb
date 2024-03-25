<!-- <?php

$bilangan1 = 20;
$bilangan2 = 30;

echo $bilangan1 + $bilangan2;
echo "<br>";
echo $bilangan1 - $bilangan2;
echo "<br>";
echo $bilangan1 * $bilangan2;
echo "<br>";
echo $bilangan1 / $bilangan2;

?> -->

<!-- concatenation -->

<!-- <?php

$menyapa = "Hello";
$nama = "Budi";
$angka = 10;

echo $menyapa . $nama  . $angka;

?> -->

<!-- Variable Constant -->

<?php

// $nama = "Budi";
// $nama = "Andi";

// echo $nama;

// define("NAMA", "Budi")
// define("NAMA", "Andi")
// echo NAMA;

?>

<!-- OBJECT and array-->

<?php
$biodata1 = ["Budi", 20, "Voli"];

$biodata2 = array (
"nama" => "Andi",
"umur" => 23,
"hobi" => "Sepak Bola",
);

$biodata3 = (object)[
"nama" => "Eka",
"umur" => 19,
"hobi" => "Bandminton",
];

echo $biodata1[0];
echo $biodata2["nama"];
echo $biodata3->nama;

print_r($biodata1);
print_r($biodata2);
print_r($biodata3);

?>