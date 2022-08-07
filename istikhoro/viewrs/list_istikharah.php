<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Kelulusan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class ='btn btn-info btn-sm text-light' href='admin.php?target=HasilTes&action=form'><i class='fa-solid fa-plus'></i> Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>NIS</th><th>Profile</th><th>Calon</th><th>Nilai</th><th>Hasil Tes</th><th></th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $join = [
            "LEFT JOIN calon as p on p.kd_calon=s.kd_calon"
        ];
        $q = __ambil($db, "calon as s", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['kd_HasilTes'] . "</td>
            <td><img src=img/profil/" . $r['profil'] . "  width=50></td>      
            <td>" . $r['nama_calon'] . "</td>
            <td>" . $r['kd_calon'] . "</td>
            <td>" . $r['HasilTes'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=HasilTes&action=edit&id=" . $r['kd_HasilTes'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=HasilTes&action=delete&id=" . $r['kd_HasilTes'] . "'>
                    <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>