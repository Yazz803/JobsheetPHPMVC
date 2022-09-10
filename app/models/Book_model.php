<?php

class Book_model {
    private $book = [
        [
            'judul' => 'Cara menjadi Alok 2022',
            'penulis' => 'Alok Gemink',
            'tanggalSelesai' => '2022-09-09'
        ],
        [
            'judul' => 'Cara Membuat orang lain patuh kepada Anda',
            'penulis' => 'Floyd',
            'tanggalSelesai' => '2022-11-02'
        ],
        [
            'judul' => 'Seorang Petualang',
            'penulis' => 'Muhammad Yazid Akbar',
            'tanggalSelesai' => '2022-09-11'
        ]
    ];

    public function getBooks()
    {
        $conn = mysqli_connect("localhost", "root", "", "jobsheet_phpmvc");
        $query = "SELECT * FROM books";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}