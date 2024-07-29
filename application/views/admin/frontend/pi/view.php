<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data Performa Index</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= site_url('pi/create_view') ?>" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table table-primary text-dark">
                            <th>No</th>
                            <th>Capaian Pembelajaran Lulusan</th>
                            <th>Performa Index Bahasa Indonesia</th>
                            <th>Performa Index Bahasa Inggris</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="table table-primary text-dark">
                            <th>No</th>
                            <th>Capaian Pembelajaran Lulusan</th>
                            <th>Performa Index Bahasa Indonesia</th>
                            <th>Performa Index Bahasa Inggris</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($pi as $data): ?>
                        <tr>
                            <td>
                                <?= ltrim($data['idx_pin'], '0');?>
                            </td>
                            <td>
                                <?= $data['ina_cpl'] ?>
                            </td>
                            <td>
                                <?= $data['ina_pin'] ?>
                            </td>
                            <td>
                                <?= $data['eng_pin'] ?>
                            </td>
                            <td>
                                <a class="flex items-center mr-3" href="<?= site_url('pi/edit_view/' . $data['idx_pin']) ?>"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="<?= site_url('pi/delete/' . $data['idx_pin']) ?>" onclick="return confirm('Yakin Hapus')"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
