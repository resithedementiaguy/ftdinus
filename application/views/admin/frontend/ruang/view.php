<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Daftar Ruang</h1>
    <h6 class="h6 mb-3 text-black">Daftar data untuk Ruang</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= base_url('ruang/add_view') ?>" class="btn btn-primary shadow-md mr-2">
                    <i class="bi bi-plus-circle"></i> Tambah Ruang
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table table-primary text-dark">
                            <th>No</th>
                            <th>Kode Ruang</th>
                            <th>Nama Ruang</th>
                            <th>Kapasitas Kuliah</th>
                            <th>Kapasitas Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($ruang)) : ?>
                            <?php $no = 1; foreach ($ruang as $ruang) : ?>
                                <tr>
                                    <td class="py-3"><?php echo $no++; ?></td>
                                    <td><?= $ruang->kd_ruang ?></td>
                                    <td><?= $ruang->nama ?></td>
                                    <td><?= $ruang->kap_kuliah ?></td>
                                    <td><?= $ruang->kap_ujian ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5">Tidak ada data ruang.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#dataTable').DataTable();
    });
</script>
