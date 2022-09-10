<?php

class Book extends Controller
{
    public function index($pengguna = 'Anda')
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('Book_model')->getBooks();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }

    public function tambah($pengguna = 'Anda')
    {
        $data['judul'] = 'Tambah Buku';
        $data['buku'] = $this->model('Book_model')->getBooks();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahBuku()
    {
        $nama = $_POST['nama'];
        $judul = $_POST['judul'];
        $tglSelesai = $_POST['tglSelesai'];

        $conn = mysqli_connect("localhost", "root", "", "jobsheet_phpmvc");
        $query = "INSERT INTO books VALUES ('', '$nama', '$judul', '$tglSelesai')";
        mysqli_query($conn, $query);
        
        header("Location: index");
    }
}
