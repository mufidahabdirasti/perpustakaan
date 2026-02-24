<div class="w-100">
    <h1 class="mt-4">Kategori Buku</h1>

    <!-- button add data-->

    <div class="mb-3 clearfix">
        <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data</a>
    </div>
 <!-- table kategori-->
    <div class="clearfix">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['kategori']; ?></td>
                    <td>
                        <!-- ?page=kategori_ubah&&id=1 -->
                        <a href="?page=kategori_ubah&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-info">Ubah</a>
                        <a href="?page=kategori_hapus&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
