<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Mata Kuliah</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit mata kuliah pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php foreach ($mtk as $mtk): ?>
                <form action="<?php echo base_url('mtk/update/' . $mtk->idx_mtk); ?>" method="post">
                    <div class="form-group mb-4">
                        <h6>Skf_kde</h6>
                        <input type="text" id="skf_kde" name="skf_kde" class="form-control" value="<?= $mtk->skf_kde ?>" placeholder="skf_kde" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Skf_idx</h6>
                        <input type="text" id="skf_idx" name="skf_idx" class="form-control" value="<?= $mtk->skf_idx ?>" placeholder="skf_idx" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Skm_kde</h6>
                        <input type="text" id="skm_kde" name="skm_kde" class="form-control" value="<?= $mtk->skm_kde ?>" placeholder="skm_kde" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>skm_idx</h6>
                        <input type="text" id="skm_idx" name="skm_idx" class="form-control" value="<?= $mtk->skm_idx ?>" placeholder="skm_idx" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Nama Mata Kuliah (smk_nma)</h6>
                        <input type="text" id="skm_nma" name="skm_nma" class="form-control" value="<?= $mtk->smk_nma ?>" placeholder="skm_nma" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Key Mata Kuliah (smk_key)</h6>
                        <input type="text" id="smk_key" name="smk_key" class="form-control" value="<?= $mtk->smk_key ?>" placeholder="smk_key" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Kode Mata Kuliah (smk_kde)</h6>
                        <input type="text" id="smk_kde" name="smk_kde" class="form-control" value="<?= $mtk->smk_kde ?>" placeholder="smk_kde" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>smk_idx</h6>
                        <input type="text" id="smk_idx" name="smk_idx" class="form-control" value="<?= $mtk->smk_idx ?>" placeholder="smk_idx" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>rmk_mtk</h6>
                        <input type="text" id="rmk_mtk" name="rmk_mtk" class="form-control" value="<?= $mtk->rmk_mtk ?>" placeholder="rmk_mtk" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>dsk_mtk</h6>
                        <input type="text" id="dsk_mtk" name="dsk_mtk" class="form-control" value="<?= $mtk->dsk_mtk ?>" placeholder="dsk_mtk" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>kmk_nip</h6>
                        <input type="text" id="kmk_nip" name="kmk_nip" class="form-control" value="<?= $mtk->kmk_nip ?>" placeholder="kmk_nip" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>kmk_sid</h6>
                        <input type="text" id="kmk_sid" name="kmk_sid" class="form-control" value="<?= $mtk->kmk_sid ?>" placeholder="kmk_sid" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_sta</h6>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="ski_sta" class="form-check-input" name="ski_sta" value="Ganjil" <?php echo (isset($mtk->ski_sta) && $mtk->ski_sta === 'Ganjil') ? 'checked' : ''; ?> data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                    <label class="form-check-label" for="ski_sta">Ganjil</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="ski_sta" class="form-check-input" name="ski_sta" value="GENAP" <?php echo (isset($mtk->ski_sta) && $mtk->ski_sta === 'GENAP') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="ski_sta">GENAP</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_smt</h6>
                        <input type="number" id="ski_smt" name="ski_smt" class="form-control" value="<?= $mtk->ski_smt ?>" placeholder="ski_smt" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Teori / Praktek (tpr_ski)</h6>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="tpr_ski" class="form-check-input" name="tpr_ski" value="Teori" <?php echo (isset($mtk->tpr_ski) && $mtk->tpr_ski === 'Teori') ? 'checked' : ''; ?> data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                    <label class="form-check-label" for="tpr_ski">Teori</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="tpr_ski" class="form-check-input" name="tpr_ski" value="PRAKTEK" <?php echo (isset($mtk->tpr_ski) && $mtk->tpr_ski === 'PRAKTEK') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="tpr_ski">PRAKTEK</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Teori / Praktek (ski_tpr)</h6>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="ski_tpr" class="form-check-input" name="ski_tpr" value="T" <?php echo (isset($mtk->ski_tpr) && $mtk->ski_tpr === 'T') ? 'checked' : ''; ?> data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                    <label class="form-check-label" for="ski_tpr">T</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="radio" id="ski_tpr" class="form-check-input" name="ski_tpr" value="P" <?php echo (isset($mtk->ski_tpr) && $mtk->ski_tpr === 'P') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="ski_tpr">P</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_skt</h6>
                        <input type="number" id="ski_skt" name="ski_skt" class="form-control" value="<?= $mtk->ski_skt ?>" placeholder="ski_skt" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_skp</h6>
                        <input type="number" id="ski_skp" name="ski_skp" class="form-control" value="<?= $mtk->ski_skp ?>" placeholder="ski_skp" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_stp</h6>
                        <input type="number" id="ski_stp" name="ski_stp" class="form-control" value="<?= $mtk->ski_stp ?>" placeholder="ski_stp" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>ski_idx</h6>
                        <input type="text" id="ski_idx" name="ski_idx" class="form-control" value="<?= $mtk->ski_idx ?>" placeholder="ski_idx" autocomplete="off" required>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('mtk') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?php endforeach; ?>
                </form>
        </div>
    </div>
</div>