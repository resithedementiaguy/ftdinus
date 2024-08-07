<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Performa Index</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit form performa index di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('pi/update'); ?>" method="post">
                <?php foreach ($pi as $data) : ?>
                    <div class="form-group mb-4">
                        <h6>Capaian Pemebelajaran Lulusan</h6>
                        <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                            <option value="<?= $data->idx_cpl ?>" selected hidden><?= $data->ina_cpl ?> - <?= $data->nmr_cpl ?></option>
                            <option value="<?= $data->idx_cpl ?>"><?= $data->ina_cpl ?> - <?= $data->nmr_cpl ?></option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Deskripsi Bahasa Indonesia</h6>
                        <textarea id="ina_cpl" name="ina_cpl" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" value="<?= $data->ina_pin ?>" required></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Deskripsi Bahasa Inggris</h6>
                        <textarea id="eng_cpl" name="eng_cpl" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" value="<?= $data->eng_pin ?>" required></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Nomor Performa Index</h6>
                        <input type="number" id="nmr_cpl" name="nmr_cpl" class="form-control" placeholder="Nomor CPL" autocomplete="off" value="<?= $data->nmr_pin ?>" required>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('pi') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>