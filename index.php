<?php
// Array berisi daftar nama file gambar
$gambar = ['IMG_1138.jpg', 'IMG_1139.jpg', 'IMG_1140.jpg', 'IMG_1141.jpg', 'IMG_1142.jpg', 'IMG_1143.jpg'];

// Teks yang ingin ditampilkan di atas gambar
$teks = "Saya Chiki Dwi Putri Sibarani dengan NIM 2215101013, Kleas A Reguler.
Saat ini, dalam perjalanan akademik saya, belajar menggunakan Docker untuk membangun web sederhana tidak hanya merupakan tantangan yang menarik tetapi juga
 kesempatan untuk mengembangkan keterampilan teknis yang berharga. Keluarga saya, dengan cinta dan dukungan mereka yang tak pernah lelah, selalu menjadi tiang
  penopang utama dalam setiap pencapaian dan kebahagiaan saya. Sementara itu, teman-teman saya yang luar biasa telah menjadi sahabat sejati yang selalu ada untuk
   saling mendukung dan menginspirasi satu sama lain. Kehadiran mereka membuat perjalanan ini menjadi lebih berarti dan penuh warna.";

// Menampilkan teks di atas gambar
echo '<p style="margin-bottom: 20px;">' . $teks . '</p>';

// Menampilkan gambar
echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-around; margin-bottom: 20px;">';

// Loop untuk menampilkan gambar
for ($i = 0; $i < count($gambar); $i++) {
    // Mengatur grid 2x2 dengan 2 gambar di kiri dan 2 gambar di kanan
    if ($i < 2 || ($i >= 2 && $i <= 4)) {
        // Gambar pertama dan kedua (kiri) atau gambar ketiga sampai kelima (kanan)
        echo '<div style="flex-basis: calc(33.33% - 10px); margin-right: 10px; margin-bottom: 10px;">';
    } else {
        // Gambar keenam (kanan bawah)
        echo '<div style="flex-basis: calc(33.33% - 10px); margin-top: 10px;">';
    }

    // Menampilkan gambar
    echo '<img src="' . $gambar[$i] . '" alt="Gambar" style="max-width: 100%; height: auto;">';
    echo '</div>';
}

echo '</div>';
