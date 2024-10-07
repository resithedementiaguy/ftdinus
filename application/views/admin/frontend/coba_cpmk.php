<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data CPMK</h1>
    <h6 class="h6 mb-3 text-black">Daftar semua data CPMK</h6>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">TA 2021</a></li>
            <li class="breadcrumb-item active" aria-current="page">CPMK</li>
        </ol>
    </nav>

    <!-- DataTales Example -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table text-dark">
                            <th rowspan="2">MATKUL</th>
                            <th colspan="2">CPL 1</th>
                            <th colspan="4">CPL 2</th>
                            <th colspan="4">CPL 3</th>
                            <th colspan="2">CPL 4</th>
                            <th colspan="2">CPL 5</th>
                            <th colspan="2">CPL 6</th>
                            <th colspan="4">CPL 7</th>
                            <th colspan="3">CPL 8</th>
                            <th colspan="3">CPL 9</th>
                        </tr>
                        <tr class="text-dark">
                            <th style="white-space: nowrap;">PI-1.1</th>
                            <th style="white-space: nowrap;">PI-1.2</th>
                            <th style="white-space: nowrap;">PI-2.1</th>
                            <th style="white-space: nowrap;">PI-2.2</th>
                            <th style="white-space: nowrap;">PI-2.3</th>
                            <th style="white-space: nowrap;">PI-2.4</th>
                            <th style="white-space: nowrap;">PI-3.1</th>
                            <th style="white-space: nowrap;">PI-3.2</th>
                            <th style="white-space: nowrap;">PI-3.3</th>
                            <th style="white-space: nowrap;">PI-3.4</th>
                            <th style="white-space: nowrap;">PI-4.1</th>
                            <th style="white-space: nowrap;">PI-4.2</th>
                            <th style="white-space: nowrap;">PI-5.1</th>
                            <th style="white-space: nowrap;">PI-5.2</th>
                            <th style="white-space: nowrap;">PI-6.1</th>
                            <th style="white-space: nowrap;">PI-6.2</th>
                            <th style="white-space: nowrap;">PI-7.1</th>
                            <th style="white-space: nowrap;">PI-7.2</th>
                            <th style="white-space: nowrap;">PI-7.3</th>
                            <th style="white-space: nowrap;">PI-7.4</th>
                            <th style="white-space: nowrap;">PI-8.1</th>
                            <th style="white-space: nowrap;">PI-8.2</th>
                            <th style="white-space: nowrap;">PI-8.3</th>
                            <th style="white-space: nowrap;">PI-9.1</th>
                            <th style="white-space: nowrap;">PI-9.2</th>
                            <th style="white-space: nowrap;">PI-9.3</th>
                        </tr>
                    </thead>
                    <style>
                        /* Untuk mewarnai baris secara bergantian */
                        tbody tr:nth-child(even) {
                            background-color: white;
                        }

                        tbody tr:nth-child(odd) {
                            background-color: #f2f2f2;
                            /* abu-abu */
                        }
                    </style>
                    <tbody>
                        <?php
                        $total_pi_1_1 = 0;
                        $count_pi_1_1 = 0;
                        $total_pi_1_2 = 0;
                        $count_pi_1_2 = 0;
                        foreach ($cpmk as $data) : ?>
                            <tr>
                                <td><?= $data->nama_matkul ?></td>

                                <!-- Kondisi untuk mengisi PI-1-1 dengan CPMK yang berbeda untuk setiap mata kuliah -->
                                <?php if ($data->nama_matkul == 'ALGORITMA DAN PEMROGRAMAN') : ?>
                                    <td>
                                        <?= $data->cpmk6 ?>
                                        <?php
                                        $total_pi_1_1 += $data->cpmk6;
                                        $count_pi_1_1++;
                                        ?>
                                    </td>
                                <?php elseif ($data->nama_matkul == 'ELEKTRONIKA 1') : ?>
                                    <td>
                                        <?= $data->cpmk4 ?>
                                        <?php
                                        $total_pi_1_1 += $data->cpmk4;
                                        $count_pi_1_1++;
                                        ?>
                                    </td>
                                <?php else : ?>
                                    <td></td>
                                <?php endif; ?>

                                <!-- Kondisi untuk mengisi PI-1-2 dengan CPMK yang berbeda untuk setiap mata kuliah -->
                                <?php if ($data->nama_matkul == 'ALGORITMA DAN PEMROGRAMAN') : ?>
                                    <td>
                                        <?= $data->cpmk1 ?>
                                        <?php
                                        $total_pi_1_2 += $data->cpmk1;
                                        $count_pi_1_2++;
                                        ?>
                                    </td>
                                <?php elseif ($data->nama_matkul == 'ELEKTRONIKA 1') : ?>
                                    <td>
                                        <?= $data->cpmk6 ?>
                                        <?php
                                        $total_pi_1_2 += $data->cpmk6;
                                        $count_pi_1_2++;
                                        ?>
                                    </td>
                                <?php else : ?>
                                    <td></td>
                                <?php endif; ?>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> <!-- PI-3-4 -->
                                <td></td> <!-- PI-4-1 -->
                                <td></td> <!-- PI-4-2 -->
                                <td></td> <!-- PI-5-1 -->
                                <td></td> <!-- PI-5-2 -->
                                <td></td> <!-- PI-6-1 -->
                                <td></td> <!-- PI-6-2 -->
                                <td></td> <!-- PI-7-1 -->
                                <td></td> <!-- PI-7-2 -->
                                <td></td> <!-- PI-7-3 -->
                                <td></td> <!-- PI-7-4 -->
                                <td></td> <!-- PI-8-1 -->
                                <td></td> <!-- PI-8-2 -->
                                <td></td> <!-- PI-8-3 -->
                                <td></td> <!-- PI-9-1 -->
                                <td></td> <!-- PI-9-2 -->
                                <td></td> <!-- PI-9-3 -->
                                <td></td> <!-- PI-9-3 -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Rata-rata</strong></td>
                            <td>
                                <?php
                                // Hitung rata-rata untuk PI-1-1
                                if ($count_pi_1_1 > 0) {
                                    $avg_pi_1_1 = $total_pi_1_1 / $count_pi_1_1;
                                    echo number_format($avg_pi_1_1, 2);
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>

                            <td>
                                <?php
                                // Hitung rata-rata untuk PI-1-2
                                if ($count_pi_1_2 > 0) {
                                    $avg_pi_1_2 = $total_pi_1_2 / $count_pi_1_2;
                                    echo number_format($avg_pi_1_2, 2);
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>

                            <!-- Kolom kosong untuk yang lain -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> <!-- PI-3-4 -->
                            <td></td> <!-- PI-4-1 -->
                            <td></td> <!-- PI-4-2 -->
                            <td></td> <!-- PI-5-1 -->
                            <td></td> <!-- PI-5-2 -->
                            <td></td> <!-- PI-6-1 -->
                            <td></td> <!-- PI-6-2 -->
                            <td></td> <!-- PI-7-1 -->
                            <td></td> <!-- PI-7-2 -->
                            <td></td> <!-- PI-7-3 -->
                            <td></td> <!-- PI-7-4 -->
                            <td></td> <!-- PI-8-1 -->
                            <td></td> <!-- PI-8-2 -->
                            <td></td> <!-- PI-8-3 -->
                            <td></td> <!-- PI-9-1 -->
                            <td></td> <!-- PI-9-2 -->
                            <td></td> <!-- PI-9-3 -->
                            <td></td> <!-- PI-9-3 -->
                            <td></td> <!-- PI-9-3 -->
                        </tr>
                        <tr>
                            <td><strong>Total Rata-rata</strong></td>
                            <td colspan="2" class="text-center">
                                <?php
                                $total_cpl1 = ($avg_pi_1_1 + $avg_pi_1_2) / 2;
                                echo number_format($total_cpl1, 2);
                                ?>
                            </td>

                            <!-- Kolom kosong untuk yang lain -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> <!-- PI-3-4 -->
                            <td></td> <!-- PI-4-1 -->
                            <td></td> <!-- PI-4-2 -->
                            <td></td> <!-- PI-5-1 -->
                            <td></td> <!-- PI-5-2 -->
                            <td></td> <!-- PI-6-1 -->
                            <td></td> <!-- PI-6-2 -->
                            <td></td> <!-- PI-7-1 -->
                            <td></td> <!-- PI-7-2 -->
                            <td></td> <!-- PI-7-3 -->
                            <td></td> <!-- PI-7-4 -->
                            <td></td> <!-- PI-8-1 -->
                            <td></td> <!-- PI-8-2 -->
                            <td></td> <!-- PI-8-3 -->
                            <td></td> <!-- PI-9-1 -->
                            <td></td> <!-- PI-9-2 -->
                            <td></td> <!-- PI-9-3 -->
                            <td></td> <!-- PI-9-3 -->
                            <td></td> <!-- PI-9-3 -->
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>