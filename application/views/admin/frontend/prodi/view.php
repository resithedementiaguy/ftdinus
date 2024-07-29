<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data Program Studi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= site_url('program_studi/create_view') ?>" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table table-primary text-dark">
                            <th>Kode Prodi</th>
                            <th>Nama Universitas</th>
                            <th>Fakultas</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="table table-primary text-dark">
                            <th>Kode Prodi</th>
                            <th>Nama Universitas</th>
                            <th>Fakultas</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($program_studi as $data): ?>
                        <tr>
                            <td>
                                <?= $data['kde_skf'] ?>
                            </td>
                            <td>
                                <?= $data['jns_ipt'] ?> <?= $data['nma_ipt'] ?> <?= $data['kkt_ipt'] ?>
                            </td>
                            <td>
                                <?= $data['nma_sfk'] ?>
                            </td>
                            <td>
                                <?= $data['jr2_skf'] ?> <?= $data['jjg_skf'] ?>
                            </td>
                            <td>
                                <a class="flex items-center mr-3" href="<?= site_url('program_studi/edit_view/' . $data['idx_skf']) ?>"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="<?= site_url('program_studi/delete/' . $data['idx_skf']) ?>" onclick="return confirm('Yakin Hapus')"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
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
