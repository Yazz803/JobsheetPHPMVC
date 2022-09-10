<div class="container">
    <header class="d-flex justify-content-between mb-3" style="align-items: center;">
        <h3 class="mb-3 text-capitalize">daftar buku <?= $data['nama'] ;?></h3>
        <a href="tambah" class="btn btn-primary">Tambah Daftar Buku</a>
    </header>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data['buku'] as $buku) :?>
                <tr>
                    <th scope="col"><?= $no++;?></th>
                    <th><?= $buku['judul'] ;?></th>
                    <th><?= $buku['penulis'] ;?></th>
                    <th><?= $buku['tgl_selesai'] ;?></th>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>