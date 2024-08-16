<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Program Studi</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit form program studi di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
        <?php foreach ($program_studi as $data) : ?>
            <form action="<?php echo base_url('program_studi/update/' . $data->idx_skf); ?>" method="post">
                    <div class="form-group mb-4">
                        <h6>Kode Program Studi</h6>
                        <input type="text" id="kde_skf" name="kde_skf" class="form-control" placeholder="Kode Program Studi" autocomplete="off" value="<?= $data->kde_skf ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Nama Program Studi/Jurusan</h6>
                        <input type="text" id="jr2_skf" name="jr2_skf" class="form-control" placeholder="Nama Program Studi" autocomplete="off" value="<?= $data->jr2_skf ?>" required>
                    </div>
                    <div class="form-group">
                        <h6>Jenjang Program Studi</h6>
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
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('program_studi') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>