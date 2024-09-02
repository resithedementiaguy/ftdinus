<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Jadwal</h1>
    <h6 class="h6 mb-3 text-black">Silahkan isi form di bawah untuk Jadwal.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('jadwal/add') ?>" method="POST">
                <div class="form-group mb-4">
                    <h6>Kode Ruang</h6>
                    <input type="text" id="kd_ruang" name="kd_ruang" class="form-control" placeholder="masukkan kode ruang (e.g. i.1.3)" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Kegiatan</h6>
                    <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="Kegiatan" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Waktu Mulai</h6>
                    <input type="datetime-local" id="start_time" name="start_time" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Waktu Selesai</h6>
                    <input type="datetime-local" id="end_time" name="end_time" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Deskripsi</h6>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Kegiatan" autocomplete="off" required></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('jadwal') ?>" class="btn btn-secondary">Kembali</a>
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
                Data jadwal berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>