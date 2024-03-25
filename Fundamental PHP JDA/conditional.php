<!-- If else -->

<!-- <?php
$nilai = 50;

if ($nilai > 50) {
    echo "Lulus";
}else{
    echo "Tidak Lulus";
}

?> -->

<!-- if else lebih dari satu kondisi -->

<!-- <?php
    $nilai = 78;

    if ($nilai < 25) {
        echo "D";
    } else if ($nilai <50) {
        echo "C";
    } else if ($nilai <75) {
        echo "B";
    } else if ($nilai <100) {
        echo "A";
    }
?> -->

<!-- Menggunakan Nested if -->
<!-- <?php
$nilai = 78;
$alpha = 4;

if ($nilai > 75) {
    if ($alpha >3) {
        echo "Tidak Lulus";
    } else {
        echo "Lulus";
    }
}
?> -->

<!-- swicth case -->
<?php
    $nomer_hari = 5;

    switch ($nomer_hari) {
        case 1:
            echo "Senin";
        break;

        case 2:
            echo "Selasa";
        break;

        case 3:
            echo "Rabu";
        break;

        case 4:
            echo "Kamis";
        break;

        case 5:
            echo "Jumat";
        break;

        case 6:
            echo "Sabtu";
        break;

        case 7:
            echo "Minggu";
        break;
        
        default :
            echo "Nomor tidak ada yang cocok";

    }
?>