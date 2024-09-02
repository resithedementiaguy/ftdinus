<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Data Dosen</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input data dosen pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('st1/create'); ?>" method="post">
                <div class="form-group mb-4">
                    <h6>xjm_st1</h6>
                    <input type="number" id="xjm_st1" name="xjm_st1" class="form-control" placeholder="xjm_st1" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>hbs_st1</h6>
                    <input type="text" id="hbs_st1" name="hbs_st1" class="form-control" placeholder="hbs_st1" maxlength="3" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>skf_st1</h6>
                    <input type="number" id="skf_st1" name="skf_st1" class="form-control" placeholder="skf_st1" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>gng_st1</h6>
                    <input type="text" id="gng_st1" name="gng_st1" class="form-control" placeholder="gng_st1" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Nama Lengkap (nma_st1)</h6>
                    <input type="text" id="nma_st1" name="nma_st1" class="form-control" placeholder="Nama Lengkap" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Key Nama Lengkap (key_st1)</h6>
                    <input type="text" id="key_st1" name="key_st1" class="form-control" placeholder="Key Nama Lengkap" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Inisial Nama (ini_st1)</h6>
                    <input type="text" id="ini_st1" name="ini_st1" class="form-control" placeholder="Inisial Nama" maxlength="3" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Nomor Telepon / Whatsapp (nwa_st1)</h6>
                    <input type="text" id="nwa_st1" name="nwa_st1" class="form-control" placeholder="Nomor Telepon / Whatsapp" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>NIP (nip_st1)</h6>
                    <input type="text" id="nip_st1" name="nip_st1" class="form-control" placeholder="NIP" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Status (sts_st1)</h6>
                    <input type="text" id="sts_st1" name="sts_st1" class="form-control" placeholder="Status" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Jenis Kelamin (jkp_st1)</h6>
                    <input type="text" id="jkp_st1" name="jkp_st1" class="form-control" placeholder="Jenis Kelamin" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>ID SID (sid_st1)</h6>
                    <input type="number" id="sid_st1" name="sid_st1" class="form-control" placeholder="ID SID" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Aktif (act_st1)</h6>
                    <input type="number" id="act_st1" name="act_st1" class="form-control" placeholder="Aktif (0 atau 1)" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Aktif Cabang (afc_st1)</h6>
                    <input type="number" id="afc_st1" name="afc_st1" class="form-control" placeholder="Aktif Cabang (0 atau 1)" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <h6>Catatan (nte_st1)</h6>
                    <textarea id="nte_st1" name="nte_st1" class="form-control" placeholder="Catatan"></textarea>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('st1') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>