<?php
$datasiswa = [
    "Lisnawati" => 85,
    "Liana" => 70,
    "Sinta" => 90,
    "Alia" => 75,
    "Nila" => 80
];

foreach ($datasiswa as $key => $value) {
    if ($value > 75) {
        $keterangan = "LULUS";
    } else {
        $keterangan = "TIDAK LULUS";
    }
    echo "Nama: $key, Nilai :$value, Keterangan: $keterangan<br>";
}
