<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Daftar Jadwal</h1>
    <h6 class="h6 mb-3 text-black">Daftar data untuk Jadwal</h6>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
            <div class="text-right">
                <a href="<?= base_url('jadwal/add_view') ?>" class="btn btn-primary shadow-md mr-2">
                    <i class="bi bi-plus-circle"></i> Tambah Jadwal
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
                            <th>Kegiatan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($jadwal)) : ?>
                            <?php $no = 1;
                            foreach ($jadwal as $jadwal) : ?>
                                <tr>
                                    <td class="py-3"><?php echo $no++; ?></td>
                                    <td><?= $jadwal->kd_ruang ?></td>
                                    <td><?= $jadwal->kegiatan ?></td>
                                    <td><?= formatDate($jadwal->start_time) ?></td>
                                    <td><?= formatDate($jadwal->end_time) ?></td>
                                    <td><?= $jadwal->deskripsi ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6">Tidak ada jadwal ruang.</td>
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

<?php
// Fungsi format tanggal
function formatDate($datetime)
{
    $date = new DateTime($datetime);
    $months = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];
    $day = $date->format('d');
    $month = $months[(int)$date->format('m')];
    $year = $date->format('Y');
    $time = $date->format('H:i');

    return "{$day} {$month} {$year} - {$time}";
}
?>