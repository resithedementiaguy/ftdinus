<div class="container-fluid"> 
    <h4 class="title-bar"><i class="fa fa-caret-square-o-right"></i>EDIT PROGRAM STUDI</h4><hr/>
    <form action="<?php echo base_url('program_studi/update'); ?>" method="post">
        <?php foreach($program_studi as $data) : ?>
        <div class="form-group">
            <h5>Kode Program Studi</h5>
            <input type="text" id="kde_skf" name="kde_skf" class="form-control" placeholder="Kode Program Studi" autocomplete="off" value="<?= $data->kde_skf ?>" required>
        </div>
        <div class="form-group">
            <h5>Nama Program Studi/Jurusan</h5>
            <input type="text" id="jr2_skf" name="jr2_skf" class="form-control" placeholder="Nama Program Studi" autocomplete="off" value="<?= $data->jr2_skf ?>" required>
        </div>
        <div class="form-group">
            <h5>Jenjang Program Studi</h5>
            <select class="form-control" name="jjg_skf" id="jjg_skf" required="">
                <option value="" selected hidden><?= $data->jjg_skf ?></option>
                <option value="S-1">S-1</option>
                <option value="S-2">S-2</option>
                <option value="S-3">S-3</option>
                <option value="D-3">D-3</option>
                <option value="D-4">D-4</option>
            </select>
        </div>
        <?php endforeach; ?>
        <br>
        <div class="text text-center">
            <a href="<?= base_url('program_studi') ?>" class="btn btn-danger" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
