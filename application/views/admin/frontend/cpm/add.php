<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Capaian Pembelajaran Mahasiswa</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input capaian pembelajaran mahasiswa pada form di bawah ini.</h6>
    <hr/>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('cpm/create'); ?>" method="post">
                <div class="form-group">
                    <h5>Skf_cpm</h5>
                    <input type="text" id="skf_cpm" name="skf_cpm" class="form-control" placeholder="Skf_cpm" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Kode Mata Kuliah (smk_cpm)</h5>
                    <input type="text" id="smk_cpm" name="smk_cpm" class="form-control" placeholder="smk_cpm" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Mata Kuliah (mtk_cpm)</h5>
                    <input type="text" id="mtk_cpm" name="mtk_cpm" class="form-control" placeholder="Mtk_cpm" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Rps_cpm</h5>
                    <input type="text" id="rps_cpm" name="rps_cpm" class="form-control" placeholder="Rps_cpm" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Nomor CPM</h5>
                    <input type="text" id="nmr_cpm" name="nmr_cpm" class="form-control" placeholder="nmr_cpm" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Capaian Pembelajaran Mahasiswa (ina_cpm)</h5>
                    <textarea id="ina_cpm" name="ina_cpm" class="form-control" placeholder="CPM" autocomplete="off" required></textarea>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('cpm') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>