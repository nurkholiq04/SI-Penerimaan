<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'HasilTes' => $_POST['HasilTes'],
        'kd_calon' => $_POST['kd_calon']
    ];
    $simpan = __simpan($db, "HasilTes", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=HasilTes';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'kd_HasilTes' => $_GET['id']
    ];
    $delete = __delete($db, "HasilTes", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=HasilTes';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    $data = [
        'kd_HasilTes' => $_POST['kd_HasilTes'],
        'kd_calon' => $_POST['kd_calon']
    ];
    $where = [
        'kd_HasilTes' => $_POST['id']
    ];
    $update = __update($db, "HasilTes", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=HasilTes';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update