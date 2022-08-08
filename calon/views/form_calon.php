<div class="card">
    <div class="card-header">
        <h4>Form Calon Anggota</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=calon&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode Calon
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_calon" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    Nama Calon
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama_calon" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Status
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="santri">
                        <label class="form-check-label" for="status">
                            Santri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="alumni">
                        <label class="form-check-label" for="status">
                            Luaran
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    Tempat Lahir
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tel" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    Tanggal Lahir
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tl" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    Alamat
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="alamat" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" id="password" name="password" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=calon"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>