<div class="container-fluid">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Program Studi</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input program studi pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('program_studi/create'); ?>" method="post">
                <div class="form-group mb-4">
                    <?php foreach ($program_studi as $data) : ?>
                        <input type="hidden" id="idx_sfk" name="idx_sfk" class="form-control" autocomplete="off" value="<?= $data['idx_sfk'] ?>" required>
                    <?php endforeach; ?>
                    <h6>Kode Program Studi</h6>
                    <input type="text" id="kde_skf" name="kde_skf" class="form-control" placeholder="Kode Program Studi" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Nama Program Studi/Jurusan</h6>
                    <input type="text" id="jr2_skf" name="jr2_skf" class="form-control" placeholder="Nama Program Studi" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Jenjang Program Studi</h6>
                    <select class="form-control" name="jjg_skf" id="jjg_skf" required="">
                        <option value="" selected hidden>Jenjang</option>
                        <option value="S-1">S-1</option>
                        <option value="S-2">S-2</option>
                        <option value="S-3">S-3</option>
                        <option value="D-3">D-3</option>
                        <option value="D-4">D-4</option>
                    </select>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('program_studi') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>