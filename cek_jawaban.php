<?php 
    // Array kunci jawaban
    $kunci_jawaban = [
    "p1" => "46"
    "p2" => "46"
    "p3" => "46"
    "p4" => "46"
    "p5" => "46"
    "p6" => "46"
    "p7" => "46"
    "p8" => "46"
    "p9" => "46"
    "p10" => "46"
    ];

    // Mengambil jawaban dari form
    $jawaban_user = [
    "p1" => $_POST['p1'],

    ];

    // Menghitung nilai
    $nilai = 0;
    foreach ($jawaban_user as $key => $jawaban) {
    if ($jawaban == $kunci_jawaban[$key]) {
            $nilai+= 10; //setiap jawaban benar bernilai 10
        }
    }

    // Menampilkan hasil
    echo "<h1>Hasil Jawaban</h1>";
    echo "<p>Nilai Anda: $nilai</p>";
?>