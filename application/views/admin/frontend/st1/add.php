<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Data Dosen</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input data dosen pada form di bawah ini.</h6>
    <hr/>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('mtk/create'); ?>" method="post">
                <div class="form-group">
                    <h5>hbs_st1</h5>
                    <input type="text" id="hbs_st1" name="hbs_st1" class="form-control" placeholder="hbs_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>skf_st1</h5>
                    <input type="text" id="skf_st1" name="skf_st1" class="form-control" placeholder="skf_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>gng_st1</h5>
                    <input type="text" id="gng_st1" name="gng_st1" class="form-control" placeholder="gng_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Nama Lengkap (nma_st1)</h5>
                    <input type="text" id="nma_st1" name="nma_st1" class="form-control" placeholder="nma_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Key Nama Lengkap (key_st1)</h5>
                    <input type="text" id="key_st1" name="key_st1" class="form-control" placeholder="key_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Inisial Nama (ini_st1)</h5>
                    <input type="text" id="ini_st1" name="ini_st1" class="form-control" placeholder="ini_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Nomor Telepon / Whatsapp (nwa_st1)</h5>
                    <input type="text" id="nwa_st1" name="nwa_st1" class="form-control" placeholder="nwa_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>NIP (nip_st1)</h5>
                    <input type="text" id="nip_st1" name="nip_st1" class="form-control" placeholder="nip_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Status (sts_st1)</h5>
                    <input type="text" id="sts_st1" name="sts_st1" class="form-control" placeholder="sts_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>jkp_st1</h5>
                    <input type="text" id="jkp_st1" name="jkp_st1" class="form-control" placeholder="jkp_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>sid_st1</h5>
                    <input type="text" id="sid_st1" name="sid_st1" class="form-control" placeholder="sid_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>act_st1</h5>
                    <input type="text" id="act_st1" name="act_st1" class="form-control" placeholder="act_st1" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>afc_st1</h5>
                    <input type="text" id="afc_st1" name="afc_st1" class="form-control" placeholder="afc_st1" autocomplete="off" required>
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