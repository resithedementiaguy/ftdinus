<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">PDCA Teknik Elektro</h1>
    <h6 class="h6 mb-3 text-black">Daftar PDCA yang telah dibuat</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= site_url('pdca/tambah_pdca') ?>" class="btn btn-primary shadow-md mr-2">Tambah PDCA</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table text-dark">
                            <th style="white-space: nowrap;">No</th>
                            <th style="white-space: nowrap;">Waktu Dibuat</th>
                            <th style="white-space: nowrap;">Tahun PDCA</th>
                            <th style="white-space: nowrap;">CPL</th>
                            <th style="white-space: nowrap;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach($pdca as $data):?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data->ins_time?></td>
                                <td><?= $data->tahun?></td>
                                <td><?= $data->cpl_kategori?></td>
                                <td>
                                    <a href="" class="">
                                        <span class="badge badge-danger">Print</span
                                    ></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->