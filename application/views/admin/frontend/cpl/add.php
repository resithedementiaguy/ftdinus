<div class="container-fluid"> 
    <h4 class="title-bar"><i class="fa fa-caret-square-o-right"></i>INPUT CAPAIAN PEMBELAJARAN LULUSAN</h4><hr/>
    <form action="<?php echo base_url('cpl/create'); ?>" method="post">
        <div class="form-group">
            <h5>Program Studi</h5>
            <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                <option value="" selected hidden>Program Studi</option>
            <?php foreach($program_studi as $data) : ?>
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
        <div class="text text-center">
            <a href="<?= base_url('cpl') ?>" class="btn btn-danger" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
