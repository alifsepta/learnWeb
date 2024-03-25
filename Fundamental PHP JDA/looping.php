<!-- Statement For -->
<!-- <?php

for ($i = 1; $i <= 100; $i++) {
    echo "Angka ke " . $i . "<br>";
}

?> -->

<!-- Statement while -->
<!-- <?php
$i = 3;
while ($i <= 10) {
    echo "Angka Ke".$i."<br>";
    $i++;
}
?> -->

<!-- Statement Do - While -->
<!-- kalau di statement ini variable tetap dieksekusi walau kondisi tidak 
memenuhi -->
<!-- <?php

$i = 13;

do {
    echo "Angka ke".$i."<br>";
    $i++;
} while ($i <= 10);
?> -->

<!-- ForEach -->
<!-- <?php

$fruits = ["Anggur", "Jeruk", "Alpukat", "Semangka", "Durian"];

foreach ($fruits as $key => $item) {
    echo $key."-".$item."<br>";
}
?> -->

<!-- variable asosiatif -->
<?php
$barang = array (
    "nama" => "Handphone",
    "merk" => "iPhone",
    "harga" => 10000000,
);

foreach ($barang as $key => $item) {
    echo $key ."-".$item."<br>";
}
?>