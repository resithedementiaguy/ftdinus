<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Daftar Mading</h1>
    <h6 class="h6 mb-3 text-black">Daftar data untuk Mading</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= base_url('admin_mading/add_view') ?>" class="btn btn-primary shadow-md mr-2">
                    <i class="bi bi-plus-circle"></i> Tambah Mading
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table table-primary text-dark">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Gambar Mading</th>
                            <th>Video Mading</th>
                            <th>Expire</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mading)) : ?>
                            <?php $no = 1;
                            foreach ($mading as $mading) : ?>
                                <tr>
                                    <td class="py-3"><?php echo $no++; ?></td>
                                    <td><?= $mading->judul ?></td>
                                    <td><?= $mading->kategori ?></td>
                                    <td>
                                        <img style="width: 60pt; height: 75pt;" src="<?= base_url('uploads/' . $mading->mading_img) ?>" alt="">
                                    </td>
                                    <td>
                                        <video style="height: 75pt;" class="video-kiri" controls muted>
                                            <source src="<?= base_url('uploads/' . $mading->mading_vid) ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </td>
                                    <td><?= $mading->expire ?></td>
                                    <td>
                                        <form action="<?php echo site_url('admin_mading/update_status/' . $mading->id); ?>" method="post">
                                            <div class="form-group">
                                                <select name="status" class="form-select">
                                                    <option value="<?= $mading->status ?>" selected hidden><?= $mading->status ?></option>
                                                    <option value="Show">Show</option>
                                                    <option value="Hide">Hide</option>
                                                </select>
                                            </div>
                                            <div class="justify-content-end">
                                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="7">Tidak ada data mading.</td>
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