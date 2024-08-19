<div class="container-fluid">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Performa Index</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input performa index pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('pi/create'); ?>" method="post">
                <div class="form-group mb-4">
                    <h6>Capaian Pembelajaran Lulusan</h6>
                    <select class="form-control" name="cpl_pin" id="cpl_pin" required="">
                        <option value="" selected hidden>CPL</option>
                        <?php foreach ($pi as $data) : ?>
                            <option value="<?= $data['idx_cpl'] ?>"><?= $data['ina_cpl'] ?> - <?= $data['nmr_cpl'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <h6>Deskripsi Bahasa Indonesia</h6>
                    <input type="text" id="ina_pin" name="ina_pin" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Deskripsi Bahasa Inggris</h6>
                    <input type="text" id="eng_pin" name="eng_pin" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Nomor Performa Index</h6>
                    <input type="number" id="nmr_pin" name="nmr_pin" class="form-control" placeholder="Nomor PI" autocomplete="off" required>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('pi') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>