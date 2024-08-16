<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Data Dosen</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit data dosen pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php foreach ($st1 as $dosen): ?>
                <form action="<?php echo base_url('st1/update/' . $dosen->idx_st1); ?>" method="post">
                    <div class="form-group mb-4">
                        <h6>XJM ST1</h6>
                        <input type="number" id="xjm_st1" name="xjm_st1" class="form-control" value="<?= $dosen->xjm_st1 ?>" placeholder="xjm_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>HBS ST1</h6>
                        <input type="text" id="hbs_st1" name="hbs_st1" class="form-control" value="<?= $dosen->hbs_st1 ?>" placeholder="hbs_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>SKF ST1</h6>
                        <input type="number" id="skf_st1" name="skf_st1" class="form-control" value="<?= $dosen->skf_st1 ?>" placeholder="skf_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>GNG ST1</h6>
                        <input type="text" id="gng_st1" name="gng_st1" class="form-control" value="<?= $dosen->gng_st1 ?>" placeholder="gng_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>NMA ST1</h6>
                        <input type="text" id="nma_st1" name="nma_st1" class="form-control" value="<?= $dosen->nma_st1 ?>" placeholder="nma_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>KEY ST1</h6>
                        <input type="text" id="key_st1" name="key_st1" class="form-control" value="<?= $dosen->key_st1 ?>" placeholder="key_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>INI ST1</h6>
                        <input type="text" id="ini_st1" name="ini_st1" class="form-control" value="<?= $dosen->ini_st1 ?>" placeholder="ini_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>NWA ST1</h6>
                        <input type="text" id="nwa_st1" name="nwa_st1" class="form-control" value="<?= $dosen->nwa_st1 ?>" placeholder="nwa_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>NIP ST1</h6>
                        <input type="text" id="nip_st1" name="nip_st1" class="form-control" value="<?= $dosen->nip_st1 ?>" placeholder="nip_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>STS ST1</h6>
                        <select id="sts_st1" name="sts_st1" class="form-control" required>
                            <option value="Aktif" <?= $dosen->sts_st1 == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                            <option value="Pemberhentian Hormat" <?= $dosen->sts_st1 == 'Pemberhentian Hormat' ? 'selected' : '' ?>>Pemberhentian Hormat</option>
                            <option value="Mengundurkan diri" <?= $dosen->sts_st1 == 'Mengundurkan diri' ? 'selected' : '' ?>>Mengundurkan diri</option>
                            <option value="Pensiun" <?= $dosen->sts_st1 == 'Pensiun' ? 'selected' : '' ?>>Pensiun</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <h6>JKP ST1</h6>
                        <input type="text" id="jkp_st1" name="jkp_st1" class="form-control" value="<?= $dosen->jkp_st1 ?>" placeholder="jkp_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>SID ST1</h6>
                        <input type="number" id="sid_st1" name="sid_st1" class="form-control" value="<?= $dosen->sid_st1 ?>" placeholder="sid_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>ACT ST1</h6>
                        <input type="number" id="act_st1" name="act_st1" class="form-control" value="<?= $dosen->act_st1 ?>" placeholder="act_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>AFC ST1</h6>
                        <input type="number" id="afc_st1" name="afc_st1" class="form-control" value="<?= $dosen->afc_st1 ?>" placeholder="afc_st1" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <h6>NTE ST1</h6>
                        <input type="text" id="nte_st1" name="nte_st1" class="form-control" value="<?= $dosen->nte_st1 ?>" placeholder="nte_st1" autocomplete="off">
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('st1') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>