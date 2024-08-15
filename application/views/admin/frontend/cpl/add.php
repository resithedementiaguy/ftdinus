<div class="container-fluid">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Capaian Pembelajaran Lulusan</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input cpl pada form di bawah ini.</h6>
    <hr />
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('cpl/create'); ?>" method="post">
                <div class="form-group">
                    <h5>Program Studi</h5>
                    <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                        <option value="" selected hidden>Program Studi</option>
                        <?php foreach ($program_studi as $data) : ?>
                            <option value="<?= $data['idx_skf'] ?>"><?= $data['jr2_skf'] ?> <?= $data['jjg_skf'] ?> <?= $data['kde_skf'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <h5>Deskripsi Bahasa Indonesia</h5>
                    <input type="text" id="ina_cpl" name="ina_cpl" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Deskripsi Bahasa Inggris</h5>
                    <input type="text" id="eng_cpl" name="eng_cpl" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <h5>Nomor CPL</h5>
                    <input type="number" id="nmr_cpl" name="nmr_cpl" class="form-control" placeholder="Nomor CPL" autocomplete="off" required>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('cpl') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>