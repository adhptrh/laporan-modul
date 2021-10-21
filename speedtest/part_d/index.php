<?php

// Fungsi untuk generate 4 karakter random
function generateRandomStr() {
    // Variabel untuk menampung karakter A-Z
    $al = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // Variabel untuk menampung hasil generate 4 karakter random
    $buff = "";
    // Mengiterasi sampai 4x
    for ($i=0;$i<4;$i++) {
        // Menambahkan 1 karakter random ke variabel buff
        $buff .= substr($al,rand(0,strlen($al)-1),1);
    }
    // Mengembalikan variabel buff ke fungsinya
    return $buff;
}

// Membuat gammbar dengan ukuran 300x200 (widthxheight)
$img = imagecreate(300,200);
// Mensetting warna background untuk gambarnya (putih)
imagecolorallocate($img,255,255,255);
// Variabel untuk warna hitam
$black = imagecolorallocate($img, 0,0,0);
// generate 4 karakter random dan simpan ke variabel str
$str = generateRandomStr();
// Mengiterasi sepanjang karakter
for ($i=0;$i<strlen($str);$i++) {
    // Menampilkan 1 teks dengan rotasi, lokasi y yang berbeda
    imagettftext($img, 60, rand(-20,20),15 + ($i*70),rand(100,150), $black, "font.ttf", substr($str,$i,1));
}

// Mengitaris sampai 10x
for ($i=0;$i<10;$i++) {
    // Membuat ketebalan garis secara random
    imagesetthickness($img,rand(1,10));
    // Menampilkan garis dari kiri ke kanan secara random
    imageline($img,0,rand(0,200),300,rand(0,200),$black);
}

// Menampilkan gambar
header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);