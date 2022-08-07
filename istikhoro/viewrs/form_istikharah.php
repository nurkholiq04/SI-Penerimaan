<div class="card">
    <div class="card-header">
        <h4>Form Kelulusan</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=HasilTes&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_calon" id="kd_calon" class="form-select">
                        <option value="">Pilih Calon</option>
                        <?php
                        $db = __database();

                        $calon_data = __ambil($db, "calon");
                        while ($r = $calon_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['kd_calon']; ?>"><?php echo $r['kd_calon']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Hasil Tes
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="HasilTes" id="HasilTes" value="lulus">
                        <label class="form-check-label" for="HasilTes">
                            Lulus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="HasilTes" id="HasilTes" value="tidak lulus">
                        <label class="form-check-label" for="HasilTes">
                            Tidak Lulus
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=HasilTes"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>