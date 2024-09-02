<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Capaian Pembelajaran Mahasiswa</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit cpl pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php foreach ($cpm as $cpm): ?>
                <form action="<?php echo base_url('cpm/update/' . $cpm->idx_cpm); ?>" method="post">
                    <div class="form-group mb-4">
                        <h6>Skf_cpm</h6>
                        <input type="text" id="skf_cpm" name="skf_cpm" class="form-control" placeholder="Skf_cpm" autocomplete="off" value="<?= $cpm->skf_cpm ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Kode Mata Kuliah (smk_cpm)</h6>
                        <input type="text" id="smk_cpm" name="smk_cpm" class="form-control" placeholder="smk_cpm" autocomplete="off" value="<?= $cpm->smk_cpm ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Mtk_cpm</h6>
                        <input type="number" id="mtk_cpm" name="mtk_cpm" class="form-control" placeholder="Mtk_cpm" autocomplete="off" value="<?= $cpm->mtk_cpm ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Rps_cpm</h6>
                        <input type="number" id="rps_cpm" name="rps_cpm" class="form-control" placeholder="Rps_cpm" autocomplete="off" value="<?= $cpm->rps_cpm ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Nomor CPM</h6>
                        <input type="number" id="nmr_cpm" name="nmr_cpm" class="form-control" placeholder="nmr_cpm" autocomplete="off" value="<?= $cpm->nmr_cpm ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Capaian Pembelajaran Mahasiswa (ina_cpm)</h6>
                        <textarea id="ina_cpm" name="ina_cpm" class="form-control" placeholder="Materi Pembelajaran / Pembahasan" autocomplete="off" required><?= $cpm->ina_cpm ?></textarea>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('cpm') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>