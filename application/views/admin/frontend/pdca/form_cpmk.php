<div class="container-fluid">
    <h3 class="h3 mb-2 text-primary font-weight-bold">Input PDCA Analysis</h3>
    <h6 class="h6 mb-3 text-black">Silahkan input PDCA pada form di bawah ini.</h6>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="<?php echo base_url('pdca/add'); ?>" method="post">
                <div class="form-group mb-4">
                    <h6>Pilih Tahun</h6>
                    <select id="tahun" name="tahun" class="form-control" required>
                        <option value="" hidden selected>Pilih Tahun</option>
                        <?php
                        $currentYear = date("Y");
                        for ($i = $currentYear; $i >= $currentYear - 5; $i--) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <h6>Pilih CPL</h6>
                    <select id="cpl_kategori" name="cpl_kategori" class="form-control" required>
                        <option value="" hidden selected>Pilih CPL untuk dicetak</option>
                        <option value="cpl1">CPL 1</option>
                        <option value="cpl2">CPL 2</option>
                        <option value="cpl3">CPL 3</option>
                        <option value="cpl4">CPL 4</option>
                        <option value="cpl5">CPL 5</option>
                        <option value="cpl6">CPL 6</option>
                        <option value="cpl7">CPL 7</option>
                        <option value="cpl8">CPL 8</option>
                        <option value="cpl9">CPL 9</option>
                    </select>
                </div>
                <!-- PLAN -->
                <h5 class="h5 text-primary font-weight-bold">P - PLAN</h5>
                <h5 class="h5 mb-3 text-primary font-weight-bold">Data Capaian Pembelajaran Program Studi</h5>
                <div class="form-group mb-4">
                    <h6>Data 1</h6>
                    <textarea id="data1" name="data1" class="form-control" placeholder="Masukkan Data 1" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Data 2</h6>
                    <textarea id="data2" name="data2" class="form-control" placeholder="Masukkan Data 2" rows="3" autocomplete="off" required></textarea>
                </div>
                <h5 class="h5 mb-3 text-primary font-weight-bold">Root Cause Analysis</h5>
                <div class="form-group mb-4">
                    <h6>Problem 1</h6>
                    <textarea id="problem1" name="problem1" class="form-control" placeholder="Masukkan Problem 1" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Problem 2</h6>
                    <textarea id="problem2" name="problem2" class="form-control" placeholder="Masukkan Problem 2" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 1</h6>
                    <textarea id="why1" name="why1" class="form-control" placeholder="Masukkan Why 1" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 2</h6>
                    <textarea id="why2" name="why2" class="form-control" placeholder="Masukkan Why 2" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 3</h6>
                    <textarea id="why3" name="why3" class="form-control" placeholder="Masukkan Why 3" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 4</h6>
                    <textarea id="why4" name="why4" class="form-control" placeholder="Masukkan Why 4" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 5</h6>
                    <textarea id="why5" name="why5" class="form-control" placeholder="Masukkan Why 5" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Why 6</h6>
                    <textarea id="why6" name="why6" class="form-control" placeholder="Masukkan Why 6" rows="3" autocomplete="off" required></textarea>
                </div>

                <div class="form-group mb-4">
                    <h6>Root Cause</h6>
                    <textarea id="rca_root" name="rca_root" class="form-control" placeholder="Masukkan Root Cause" rows="3" autocomplete="off" required></textarea>
                </div>

                <h5 class="h5 mb-3 text-primary font-weight-bold">Rancangan Perbaikan</h5>
                <div class="form-group mb-4">
                    <h6>Root Cause</h6>
                    <textarea id="rp_root" name="rp_root" class="form-control" placeholder="Masukkan Root Cause" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Tindakan Perbaikan</h6>
                    <textarea id="tindakan" name="tindakan" class="form-control" placeholder="Masukkan Tindakan Perbaikan" rows="3" autocomplete="off" required></textarea>
                </div>

                <!-- DO -->
                <h5 class="h5 text-primary font-weight-bold">D - DO</h5>
                <div class="form-group mb-4">
                    <h6>Permasalahan</h6>
                    <textarea id="permasalahan" name="permasalahan" class="form-control" placeholder="Masukkan Pemasalahan" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Analisi</h6>
                    <textarea id="analisis" name="analisis" class="form-control" placeholder="Masukkan Analisi" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>Perbaikan</h6>
                    <textarea id="perbaikan" name="perbaikan" class="form-control" placeholder="Masukkan Perbaikin" rows="3" autocomplete="off" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <h6>PIC</h6>
                    <textarea id="pic" name="pic" class="form-control" placeholder="Masukkan PIC" rows="3" autocomplete="off" required></textarea>
                </div>

                <!-- ACTION -->
                <h5 class="h5 text-primary font-weight-bold">A - ACTION</h5>
                <div class="form-group mb-4">
                    <h6>Action</h6>
                    <textarea id="action" name="action" class="form-control" placeholder="Masukkan Action" rows="3" autocomplete="off" required></textarea>
                </div>

                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('pdca') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>