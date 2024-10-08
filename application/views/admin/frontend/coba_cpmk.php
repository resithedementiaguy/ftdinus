<style>
    tbody tr:nth-child(even) {
        background-color: white;
    }

    tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    tbody tr {
        text-align: center;
        vertical-align: center;
    }
</style>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Data CPMK</h1>
    <h6 class="h6 mb-3 text-black">Daftar semua data CPMK</h6>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">TA 2021</a></li>
            <li class="breadcrumb-item active" aria-current="page">CPMK</li>
        </ol>
    </nav>

    <!-- Tabel CPMK -->
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

                    <tbody>
                        <?php
                        $total_pi_1_1 = 0;
                        $count_pi_1_1 = 0;
                        $total_pi_1_2 = 0;
                        $count_pi_1_2 = 0;
                        foreach ($cpmk as $data) : ?>
                            <tr>
                                <td><?= $data->nama_matkul ?></td>

                                <!-- PI-1.1 -->
                                <?php if ($data->nama_matkul == 'ALGORITMA DAN PEMROGRAMAN') : ?>
                                    <td class="text-center align-middle">
                                        <?= $data->cpmk6 ?>
                                        <?php
                                        $total_pi_1_1 += $data->cpmk6;
                                        $count_pi_1_1++;
                                        ?>
                                    </td>
                                <?php elseif ($data->nama_matkul == 'ELEKTRONIKA 1') : ?>
                                    <td class="text-center align-middle">
                                        <?= $data->cpmk4 ?>
                                        <?php
                                        $total_pi_1_1 += $data->cpmk4;
                                        $count_pi_1_1++;
                                        ?>
                                    </td>
                                <?php else : ?>
                                    <td></td>
                                <?php endif; ?>

                                <!-- PI-1.2 -->
                                <?php if ($data->nama_matkul == 'ALGORITMA DAN PEMROGRAMAN') : ?>
                                    <td class="text-center align-middle">
                                        <?= $data->cpmk1 ?>
                                        <?php
                                        $total_pi_1_2 += $data->cpmk1;
                                        $count_pi_1_2++;
                                        ?>
                                    </td>
                                <?php elseif ($data->nama_matkul == 'ELEKTRONIKA 1') : ?>
                                    <td class="text-center align-middle">
                                        <?= $data->cpmk6 ?>
                                        <?php
                                        $total_pi_1_2 += $data->cpmk6;
                                        $count_pi_1_2++;
                                        ?>
                                    </td>
                                <?php else : ?>
                                    <td></td>
                                <?php endif; ?>

                                <!-- PI-2.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-2.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-2.3 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-2.4 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-3.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-3.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-3.3 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-3.4 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-4.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-4.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-5.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-5.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-6.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-6.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-7.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-7.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-7.3 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-7.4 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-8.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-8.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-8.3 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-9.1 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-9.2 -->
                                <td class="text-center align-middle"></td>
                                <!-- PI-9.3 -->
                                <td class="text-center align-middle"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfoot>
                        <!-- Rata-rata per PI -->
                        <tr>
                            <td><strong>Rata-rata</strong></td>
                            <!-- PI-1.1 -->
                            <td class="text-center align-middle">
                                <?php
                                if ($count_pi_1_1 > 0) {
                                    $avg_pi_1_1 = $total_pi_1_1 / $count_pi_1_1;
                                    echo number_format($avg_pi_1_1, 2);
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>

                            <!-- PI-1.2 -->
                            <td class="text-center align-middle">
                                <?php
                                if ($count_pi_1_2 > 0) {
                                    $avg_pi_1_2 = $total_pi_1_2 / $count_pi_1_2;
                                    echo number_format($avg_pi_1_2, 2);
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>

                            <!-- PI-2.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-2.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-2.3 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-2.4 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-3.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-3.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-3.3 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-3.4 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-4.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-4.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-5.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-5.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-6.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-6.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-7.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-7.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-7.3 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-7.4 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-8.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-8.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-8.3 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-9.1 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-9.2 -->
                            <td class="text-center align-middle"></td>
                            <!-- PI-9.3 -->
                            <td class="text-center align-middle"></td>
                        </tr>

                        <!-- Total Rata-rata CPL -->
                        <tr>
                            <td><strong>Total Rata-rata</strong></td>
                            <!-- CPL 1 -->
                            <td colspan="2" class="text-center align-middle">
                                <?php
                                $total_cpl1 = ($avg_pi_1_1 + $avg_pi_1_2) / 2;
                                echo number_format($total_cpl1, 2);
                                ?>
                            </td>

                            <!-- CPL 2 -->
                            <td colspan="4" class="text-center align-middle"></td>
                            <!-- CPL 3 -->
                            <td colspan="4" class="text-center align-middle"></td>
                            <!-- CPL 4 -->
                            <td colspan="2" class="text-center align-middle"></td>
                            <!-- CPL 5 -->
                            <td colspan="2" class="text-center align-middle"></td>
                            <!-- CPL 6 -->
                            <td colspan="2" class="text-center align-middle"></td>
                            <!-- CPL 7 -->
                            <td colspan="4" class="text-center align-middle"></td>
                            <!-- CPL 8 -->
                            <td colspan="3" class="text-center align-middle"></td>
                            <!-- CPL 9 -->
                            <td colspan="3" class="text-center align-middle"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>