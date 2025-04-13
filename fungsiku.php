<?php 

// Fungsi untuk menghitung nilai akhir mahasiswa

function hitung_nilai($uts,$uas,$tugas){
    define("UTS", 0.25 );
    define("UAS", 0.3 );
    define("TUGAS", 0.45 );
    $nilai_akhir = ((UTS*$uts)+(UAS*$uas)+(TUGAS*$tugas));

    return $nilai_akhir;
}

// Fungsi untuk menentukan kelulusan

function kelulusan($nilai_akhir){
    define("NILAI_LULUS",60);
    if($nilai_akhir >= NILAI_LULUS){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}
?>