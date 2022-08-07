<?php
$db = __database();
$where = [
    'kd_HasilTes' => $_GET['id']
];
$query = __ambil($db, "HasilTes", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows = $query->fetch_object();
//print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Member</h4>
    </div>
    <div class="card-body">
        <form action="admin.php?target=HasilTes&action=update" data-parsley-validate class="form-horizontal form-label-left" method="post">
            <input type="hidden" name="id" value="<?php echo $rows->kd_HasilTes; ?>">
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_calon" id="kd_calon" class="form-select">
                        <option value="">Pilih Calon</option>
                        <?php
                        $calon_data = __ambil($db, "calon");
                        while ($r = $calon_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['kd_calon']; ?>" <?php echo $rows->kd_calon == $r['kd_calon'] ? "selected" : ""; ?>><?php echo $r['nama_calon']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                Hasil Tes
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name=" Hasil Tes" id="HasilTes_lulus" value="lulus" <?php echo $rows->istikharah == "lulus" ? "checked" : ""; ?>>
                        <label for="HasilTes_lulus" class="form-check-label">
                            Lulus
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="HasilTes" id="HasilTes_tidak lulus" value="tidak lulus" <?php echo $rows->istikharah == "tidak lulus" ? "checked" : ""; ?>>
                        <label for="HasilTes_tidak lulus" class="form-check-label">
                            Genap
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