<div class="container col-lg-4 bg-secondary rounded">
    <h1 class="text-light text-center m-4 py-4">Tambah Daftar Buku</h1>
    <form action="tambahBuku" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama </span>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Judul Buku </span>
            <input type="text" class="form-control" name="judul" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tanggal Selesai </span>
            <input type="text" class="form-control" name="tglSelesai" required placeholder="example: 2022-01-20">
        </div>
        <center>
            <button class="btn btn-primary mb-5 fw-bold">Tambah</button>
        </center>
    </form>
</div>