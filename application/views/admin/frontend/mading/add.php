<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Mading</h1>
    <h6 class="h6 mb-3 text-black">Silahkan input data mading pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url('admin_mading/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <h6>Judul</h6>
                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul Mading" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Kategori</h6>
                    <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Kategori Mading" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Gambar Mading</h6>
                    <input type="file" id="mading_img" name="mading_img" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Video Mading</h6>
                    <input type="file" id="mading_vid" name="mading_vid" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <h6>Expire</h6>
                    <input type="date" id="expire" name="expire" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Status</h6>
                    <select name="status" class="form-select" required>
                        <option value="Show">Show</option>
                        <option value="Hide">Hide</option>
                    </select>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('admin_mading') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal berhasil -->
<div class="modal modal-borderless fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data mading berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>