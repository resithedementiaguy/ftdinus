<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Rencana Pembelajaran Semester</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input rencana pembelajaran semester pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('rps/create'); ?>" method="post">
                <div class="form-group mb-4">
                    <h6>Smk_nma</h6>
                    <input type="text" id="smk_nma" name="smk_nma" class="form-control" placeholder="Smk_nma" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Mtk_rps</h6>
                    <input type="number" id="mtk_rps" name="mtk_rps" class="form-control" placeholder="Mtk_rps" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Kpr_vld</h6>
                    <input type="datetime-local" id="kpr_vld" name="kpr_vld" class="form-control" placeholder="Kpr_vld" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Nte_rps</h6>
                    <textarea id="nte_rps" name="nte_rps" class="form-control" placeholder="Nte_rps"></textarea>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('rps') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>