<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Mata Kuliah</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input mata kuliah pada form di bawah ini.</h6>
    <hr />
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('mtk/create'); ?>" method="post">
                <div class="form-group">
                    <h5>Skf_kde</h5>
                    <input type="text" id="skf_kde" name="skf_kde" class="form-control" placeholder="skf_kde" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Skf_idx</h5>
                    <input type="text" id="smk_mtk" name="smk_mtk" class="form-control" placeholder="smk_mtk" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Skm_kde</h5>
                    <input type="text" id="skm_kde" name="skm_kde" class="form-control" placeholder="skm_kde" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>skm_idx</h5>
                    <input type="text" id="skm_idx" name="skm_idx" class="form-control" placeholder="skm_idx" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Nama Mata Kuliah (smk_nma)</h5>
                    <input type="text" id="skm_nma" name="skm_nma" class="form-control" placeholder="skm_nma" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Key Mata Kuliah (smk_key)</h5>
                    <input type="text" id="smk_key" name="smk_key" class="form-control" placeholder="smk_key" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Kode Mata Kuliah (smk_kde)</h5>
                    <input type="text" id="smk_kde" name="smk_kde" class="form-control" placeholder="smk_kde" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>smk_idx</h5>
                    <input type="text" id="smk_idx" name="smk_idx" class="form-control" placeholder="smk_idx" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>rmk_mtk</h5>
                    <input type="text" id="rmk_mtk" name="rmk_mtk" class="form-control" placeholder="rmk_mtk" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>dsk_mtk</h5>
                    <input type="text" id="dsk_mtk" name="dsk_mtk" class="form-control" placeholder="dsk_mtk" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>kmk_nip</h5>
                    <input type="text" id="kmk_nip" name="kmk_nip" class="form-control" placeholder="kmk_nip" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>kmk_sid</h5>
                    <input type="text" id="kmk_sid" name="kmk_sid" class="form-control" placeholder="kmk_sid" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>ski_sta</h5>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="ski_sta" class="form-check-input" name="ski_sta" value="Ganjil" data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                <label class="form-check-label" for="ski_sta">Ganjil</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="ski_sta" class="form-check-input" name="ski_sta" value="GENAP">
                                <label class="form-check-label" for="ski_sta">GENAP</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>ski_smt</h5>
                    <input type="number" id="ski_smt" name="ski_smt" class="form-control" placeholder="ski_smt" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Teori / Praktek (tpr_ski)</h5>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="tpr_ski" class="form-check-input" name="tpr_ski" value="Teori" data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                <label class="form-check-label" for="tpr_ski">Teori</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="tpr_ski" class="form-check-input" name="tpr_ski" value="Praktek">
                                <label class="form-check-label" for="tpr_ski">Praktek</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Teori / Praktek (ski_tpr)</h5>
                    <div class="row">
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="ski_tpr" class="form-check-input" name="ski_tpr" value="T" data-parsley-required="true" data-parsley-error-message="Jenis Kelamin wajib diisi!">
                                <label class="form-check-label" for="ski_tpr">T</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="radio" id="ski_tpr" class="form-check-input" name="ski_tpr" value="P">
                                <label class="form-check-label" for="ski_tpr">P</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>ski_skt</h5>
                    <input type="number" id="ski_skt" name="ski_skt" class="form-control" placeholder="ski_skt" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>ski_skp</h5>
                    <input type="number" id="ski_skp" name="ski_skp" class="form-control" placeholder="ski_skp" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>ski_stp</h5>
                    <input type="number" id="ski_stp" name="ski_stp" class="form-control" placeholder="ski_stp" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>ski_idx</h5>
                    <input type="text" id="ski_idx" name="ski_idx" class="form-control" placeholder="ski_idx" autocomplete="off" required>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('mtk') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>