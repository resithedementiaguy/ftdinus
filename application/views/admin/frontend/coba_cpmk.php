<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data CPMK</h1>
    <h6 class="h6 mb-3 text-black">Daftar semua data CPMK</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= site_url('mtk/create_view') ?>" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table text-dark">
                            <th rowspan="2">MATKUL</th>
                            <th colspan="2">CPL 1</th>
                            <th colspan="4">CPL 2</th>
                            <th colspan="4">CPL 3</th>
                        </tr>
                        <tr class="text-dark">
                            <th>PI-1-1</th>
                            <th>PI-1-2</th>
                            <th>PI-2-1</th>
                            <th>PI-2-2</th>
                            <th>PI-2-3</th>
                            <th>PI-2-4</th>
                            <th>PI-3-1</th>
                            <th>PI-3-2</th>
                            <th>PI-3-3</th>
                            <th>PI-3-4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cpmk as $data) : ?>
                            <tr>
                                <td>
                                    <?= $data->nama_matkul ?>
                                </td>
                                <td>
                                    <?= $data->cpmk1 ?>
                                </td>
                                <td><?= ($data->cpmk1 + $data->cpmk2) / 2 ?></td>
                                <td>
                                    <?= $data->cpmk1 ?>
                                </td>
                                <td>
                                    <?= $data->cpmk2 ?>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?= $data->cpmk1 ?>
                                </td>
                                <td>
                                    <?= $data->cpmk2 ?>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->