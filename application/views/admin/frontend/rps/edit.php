<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Rencana Pembelajaran Semester</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit form rencana pembelajaran semester di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('rps/update'); ?>" method="post">
                <?php foreach ($rps as $rps) : ?>
                    <div class="form-group">
                        <h5>Mtk_rps</h5>
                        <input type="text" id="mtk_rps" name="mtk_rps" class="form-control" placeholder="mtk_rps" value="<?= $rps->mtk_rps?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Waktu RPS (wkt_rps)</h5>
                        <input type="text" id="wkt_rps" name="wkt_rps" class="form-control" placeholder="wkt_rps" value="<?= $rps->wkt_rps?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kmk_nip</h5>
                        <input type="text" id="kmk_nip" name="kmk_nip" class="form-control" placeholder="kmk_nip" value="<?= $rps->kmk_nip?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kmk_sid</h5>
                        <input type="text" id="kmk_sid" name="kmk_sid" class="form-control" placeholder="kmk_sid" value="<?= $rps->kmk_sid?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kmk_vld</h5>
                        <input type="text" id="kmk_vld" name="kmk_vld" class="form-control" placeholder="kmk_vld" value="<?= $rps->kmk_vld?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kpr_nip</h5>
                        <input type="text" id="kpr_nip" name="kpr_nip" class="form-control" placeholder="kpr_nip" value="<?= $rps->kpr_nip?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kpr_sid</h5>
                        <input type="text" id="kpr_sid" name="kpr_sid" class="form-control" placeholder="kpr_sid" value="<?= $rps->kpr_sid?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <h5>Kpr_vld</h5>
                        <input type="text" id="kpr_vld" name="kpr_vld" class="form-control" placeholder="kpr_vld" value="<?= $rps->kpr_vld?>" autocomplete="off" required>
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