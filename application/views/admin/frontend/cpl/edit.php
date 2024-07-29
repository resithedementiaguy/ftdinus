<div class="container-fluid"> 
    <h4 class="title-bar"><i class="fa fa-caret-square-o-right"></i>EDIT CAPAIAN PEMBELAJARAN LULUSAN</h4><hr/>
    <form action="<?php echo base_url('cpl/update'); ?>" method="post">
    <?php foreach($cpl as $dcpl) : ?>
        <div class="form-group">
            <h5>Program Studi</h5>
            <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                <option value="" selected hidden><?= $dcpl->jr2_skf ?> <?= $dcpl->jjg_skf ?> <?= $dcpl->kde_skf ?></option>
                <?php foreach($program_studi as $dprodi) : ?>            
                <option value="<?= $dprodi['idx_skf'] ?>"><?= $dprodi['jr2_skf'] ?> <?= $dprodi['jjg_skf'] ?> <?= $dprodi['kde_skf'] ?></option>    
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Indonesia</h5>
            <textarea id="ina_cpl" name="ina_cpl" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" value="<?= $dcpl->ina_cpl ?>" required></textarea>
        </div>
        <div class="form-group">
            <h5>Deskripsi Bahasa Inggris</h5>
            <textarea id="eng_cpl" name="eng_cpl" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" value="<?= $dcpl->eng_cpl ?>" required></textarea>
        </div>
        <div class="form-group">
            <h5>Nomor CPL</h5>
            <input type="number" id="nmr_cpl" name="nmr_cpl" class="form-control" placeholder="Nomor CPL" autocomplete="off" value="<?= $dcpl->nmr_cpl ?>" required>
        </div>
        <br>
        <div class="text text-center">
            <a href="<?= base_url('cpl') ?>" class="btn btn-danger" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php endforeach; ?>
    </form>
</div>
