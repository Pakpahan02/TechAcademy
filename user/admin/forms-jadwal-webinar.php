<?php
// Array yang berisi jadwal webinar
$webinar = [
    [
        'judul' => 'Pengenalan PHP',
        'tanggal' => '2023-06-15',
        'jam' => '14:00',
        'link' => 'https://contoh-webinar.com/php-introduction'
    ],
    [
        'judul' => 'Membangun Aplikasi Web dengan Laravel',
        'tanggal' => '2023-06-20',
        'jam' => '16:00',
        'link' => 'https://contoh-webinar.com/laravel-web-app'
    ],
    [
        'judul' => 'Pemrograman JavaScript untuk Pemula',
        'tanggal' => '2023-06-25',
        'jam' => '10:00',
        'link' => 'https://contoh-webinar.com/javascript-beginner'
    ]
];

// Fungsi untuk menampilkan jadwal webinar
function tampilkanJadwalWebinar($webinar)
{
    foreach ($webinar as $jadwal) {
        echo 'Judul: ' . $jadwal['judul'] . '<br>';
        echo 'Tanggal: ' . date('d M Y', strtotime($jadwal['tanggal'])) . '<br>';
        echo 'Jam: ' . $jadwal['jam'] . '<br>';
        echo 'Link: <a href="' . $jadwal['link'] . '">Daftar</a><br><br>';
    }
}

// Memanggil fungsi untuk menampilkan jadwal webinar
tampilkanJadwalWebinar($webinar);
?>
