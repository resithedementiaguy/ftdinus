<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Rencana Pembelajaran Semester</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit form rencana pembelajaran semester di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('rps/update'); ?>" method="post">
                <?php foreach ($rps as $rps) : ?>
                    <div class="form-group mb-4">
                        <h6>Smk_nma</h6>
                        <input type="text" id="smk_nma" name="smk_nma" class="form-control" placeholder="Smk_nma" value="<?= $rps->smk_nma ?>" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Mtk_rps</h6>
                        <input type="number" id="mtk_rps" name="mtk_rps" class="form-control" placeholder="mtk_rps" value="<?= $rps->mtk_rps ?>" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-4">
                        <h6>Kpr_vld</h6>
                        <input type="datetime-local" id="kpr_vld" name="kpr_vld" class="form-control" placeholder="kpr_vld" value="<?= date('Y-m-d\TH:i', strtotime($rps->kpr_vld)) ?>" autocomplete="off" required>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="<?= base_url('rps') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>