<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Calon</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class ='btn btn-info btn-sm text-light' href='admin.php?target=calon&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>Kode Calon</th><th>Nama Calon</th><th>Profile</th><th>Status</th><th>TTL</th><th>Alamat</th><th></th>
        </tr>
        </thead>
        <tbody>";
        //ambildata
        $q = __ambil($db, "calon");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['kd_calon'] . "</td>
            <td>" . $r['nama_calon'] . "</td>
            <td><img src=img/profil/" . $r['profil'] . "  width=50></td>
            <td>" . $r['status'] . "</td>
            <td>" . $r['tel'] . ", " . $r['tl'] . "</</td>
            <td>" . $r['alamat'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=calon&action=edit&id=" . $r['kd_calon'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=calon&action=delete&id=" . $r['kd_calon'] . "'>
                    <i class='fa-solid fa-trash'></i>
                </a>
             
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>