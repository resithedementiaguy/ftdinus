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
                            <td>
                                <span class="avg" data-cpmk1="<?= $data->cpmk1 ?>" data-cpmk2="<?= $data->cpmk2 ?>"></span>
                            </td>
                            <td>
                                <?= $data->cpmk1 ?>
                            </td>
                            <td>
                                <?= $data->cpmk2 ?>
                            </td>
                            <td>
                                <span class="avg" data-cpmk1="<?= $data->cpmk1 ?>" data-cpmk2="<?= $data->cpmk2 ?>"></span>
                            </td>
                            <td>
                                <span class="avg" data-cpmk1="<?= $data->cpmk1 ?>" data-cpmk3="<?= $data->cpmk3 ?>"></span>
                            </td>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const avgElements = document.querySelectorAll(".avg");
        
        avgElements.forEach(function(element) {
            const cpmk1 = parseFloat(element.getAttribute("data-cpmk1"));
            const cpmk2 = parseFloat(element.getAttribute("data-cpmk2")) || 0;
            const cpmk3 = parseFloat(element.getAttribute("data-cpmk3")) || 0;

            let average;
            if (element.hasAttribute("data-cpmk2") && element.hasAttribute("data-cpmk3")) {
                // For PI-2-4 (average of cpmk1 and cpmk3)
                average = (cpmk1 + cpmk3) / 2;
            } else {
                // For PI-1-2 and PI-2-3 (average of cpmk1 and cpmk2)
                average = (cpmk1 + cpmk2) / 2;
            }

            element.textContent = isNaN(average) ? "-" : average.toFixed(2);
        });
    });
</script>
