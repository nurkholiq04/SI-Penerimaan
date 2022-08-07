<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'niu' => $_POST['niu'],
        'kd_calon' => $_POST['kd_calon'],
        'ijazah' => $_POST['ijazah'],
        'ktp' => $_POST['ktp'],
        'sp' => $_POST['sp'],
        'skck' => $_POST['skck'],
        'cv' => $_POST['cv'],
    ];
    $simpan = __simpan($db, "berkas", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=berkas';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'niu' => $_GET['id']
    ];
    $delete = __delete($db, 'berkas', $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=berkas';
        </script>
    <?php
    } else {
        echo "gagal hapus " . $db->error;
    }
}
//end kondisi delete
//start kondis update
elseif ($opsi == "update") {
    if (!empty($_POST['password'])) {

        $data = [
            'kd_calon' => $_POST['kd_calon'],
            'ijazah' => $_POST['ijazah'],
            'ktp' => $_POST['ktp'],
            'sp' => $_POST['sp'],
            'skck' => $_POST['skck'],
            'cv' => $_POST['cv'],
        ];
    }
    $where = [
        'niu' => $_POST['id']
    ];
    $update = __update($db, "berkas", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=berkas';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
?>