<div class="container-fluid">
    <h4 class="title-bar"><i class="fa fa-caret-square-o-right"></i>INPUT CAPAIAN PEMBELAJARAN LULUSAN</h4>
    <hr />
    <form action="<?php echo base_url('pi/create'); ?>" method="post">
        <div class="form-group">
            <h5>Capaian Pembelajaran Lulusan</h5>
            <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                <option value="" selected hidden>CPL</option>
                <?php foreach ($pi as $data) : ?>
                    <option value="<?= $data['idx_cpl'] ?>"><?= $data['ina_cpl'] ?> - <?= $data['nmr_cpl'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Indonesia</h5>
            <input type="text" id="ina_pin" name="ina_pin" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" required>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Inggris</h5>
            <input type="text" id="ina_pin" name="ina_pin" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" required>
        </div>
        <div class="form-group">
            <h5>Nomor Performa Index</h5>
            <input type="number" id="nmr_pin" name="nmr_pin" class="form-control" placeholder="Nomor CPL" autocomplete="off" required>
        </div>
        <br>
        <div class="text text-center">
            <a href="<?= base_url('pi') ?>" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>