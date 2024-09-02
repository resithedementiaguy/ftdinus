<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Input Ruang</h1>
    <h6 class="h6 mb-3 text-black">Silahkan isi form di bawah untuk input ruang.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('ruang/add') ?>" method="POST">
                <div class="form-group mb-4">
                    <h6>Kode Ruang</h6>
                    <input type="text" id="kd_ruang" name="kd_ruang" class="form-control" placeholder="Masukkan kode ruang (e.g. i.1.3)" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Nama Ruang</h6>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama ruang (e.g. Ruang Rapat atau Ruang Kelas)" autocomplete="off" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Kapasitas Kuliah</h6>
                    <input type="number" id="kap_kuliah" name="kap_kuliah" class="form-control" placeholder="Kapasitas Kuliah" required>
                </div>
                <div class="form-group mb-4">
                    <h6>Kapasitas Ujian</h6>
                    <input type="number" id="kap_ujian" name="kap_ujian" class="form-control" placeholder="Kapasitas Ujian" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('ruang') ?>" class="btn btn-secondary">Kembali</a>
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
                Data ruang berhasil ditambahkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>