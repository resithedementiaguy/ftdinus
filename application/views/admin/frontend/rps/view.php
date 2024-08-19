<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data Rencana Pembelajaran Semester</h1>
    <h6 class="h6 mb-3 text-black">Daftar semua data rencana pembelajaran semester.</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= site_url('rps/create_view') ?>" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table table-primary text-dark">
                            <th>Matakuliah</th>
                            <th>kpt_vld</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rps as $data) : ?>
                            <?php if (is_null($data['dlt_rps'])): ?>
                            <tr>
                                <td>
                                    <?= $data->smk_nma ?>
                                </td>
                                <td>
                                    <?= $data->kpr_vld ?>
                                </td>
                                <td>
                                    <a class="flex items-center mr-3" href="<?= site_url('rps/edit_view/' . $data->idx_rps) ?>"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="<?= site_url('rps/delete/' . $data->idx_rps) ?>" onclick="return confirm('Yakin Hapus')"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </td>
                            </tr>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->