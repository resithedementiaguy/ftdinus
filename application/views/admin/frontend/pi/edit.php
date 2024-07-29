<div class="container-fluid"> 
    <h4 class="title-bar"><i class="fa fa-caret-square-o-right"></i>EDIT CAPAIAN PEMBELAJARAN LULUSAN</h4><hr/>
    <form action="<?php echo base_url('pi/update'); ?>" method="post">
    <?php foreach($pi as $data) : ?>
        <div class="form-group">
            <h5>Capaian Pemebelajaran Lulusan</h5>
            <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                <option value="<?= $data->idx_cpl ?>" selected hidden><?= $data->ina_cpl ?> - <?= $data->nmr_cpl ?></option>        
                <option value="<?= $data->idx_cpl ?>"><?= $data->ina_cpl ?> - <?= $data->nmr_cpl ?></option>
            </select>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Indonesia</h5>
            <textarea id="ina_cpl" name="ina_cpl" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" value="<?= $data->ina_pin ?>" required></textarea>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Inggris</h5>
            <textarea id="eng_cpl" name="eng_cpl" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" value="<?= $data->eng_pin ?>" required></textarea>
        </div>
        <div class="form-group">
            <h5>Nomor Performa Index</h5>
            <input type="number" id="nmr_cpl" name="nmr_cpl" class="form-control" placeholder="Nomor CPL" autocomplete="off" value="<?= $data->nmr_pin ?>" required>
        </div>
        <br>
        <div class="text text-center">
            <a href="<?= base_url('pi') ?>" class="btn btn-danger" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php endforeach; ?>
    </form>
</div>
