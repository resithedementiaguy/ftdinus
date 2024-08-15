<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Capaian Pembelajaran Lulusan</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit form capaian pembelajaran lulusan di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php foreach ($cpl as $dcpl) : ?>
            <form action="<?php echo base_url('cpl/update/' . $dcpl->idx_cpl); ?>" method="post">
                
                    <div class="form-group mb-4">
                        <h6>Program Studi</h6>
                        <select class="form-control" name="skf_cpl" id="skf_cpl" required="">
                            <option value="" selected hidden><?= $dcpl->jr2_skf ?> <?= $dcpl->jjg_skf ?> <?= $dcpl->kde_skf ?></option>
                            <?php foreach ($program_studi as $dprodi) : ?>
                                <option value="<?= $dprodi['idx_skf'] ?>"><?= $dprodi['jr2_skf'] ?> <?= $dprodi['jjg_skf'] ?> <?= $dprodi['kde_skf'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Deskripsi Bahasa Indonesia</h6>
                        <textarea id="ina_cpl" name="ina_cpl" class="form-control" placeholder="Deskripsi Bahasa Indonesia" autocomplete="off" required><?= $dcpl->ina_cpl ?></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Deskripsi Bahasa Inggris</h6>
                        <textarea id="eng_cpl" name="eng_cpl" class="form-control" placeholder="Deskripsi Bahasa Inggris" autocomplete="off" required><?= $dcpl->eng_cpl ?></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Nomor CPL</h6>
                        <input type="number" id="nmr_cpl" name="nmr_cpl" class="form-control" placeholder="Nomor CPL" autocomplete="off" value="<?= $dcpl->nmr_cpl ?>" required>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('cpl') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>