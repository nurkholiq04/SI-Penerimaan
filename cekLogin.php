<?php
session_start();
include "config/__config_database.php";
$db = __database();
$username = $_POST['username'];
$password = sha1($_POST['password']);
// cek apakah login sebagai admin atau calon
$where = [
    'username' => $username,
    'password' => $password
];
$cekUsers = __ambil($db, "users", "*", $where);
if ($cekUsers->num_rows > 0) {
    $r = $cekUsers->fetch_object();
    $_SESSION['id'] = $r->iduser;
    $_SESSION['name'] = $r->username;
    $_SESSION['level'] = $r->level;
    $_SESSION['status_login'] = true;

    echo "<script>
    window.location.href='index.php';
</script>";
} else {
    $where = [
        'nama_calon' => $username,
        'password' => $password
    ];
    $cekcalon = __ambil($db, "calon", "*", $where);
    if ($cekcalon->num_rows > 0) {
        $p = $cekcalon->fetch_object();
        $_SESSION['id'] = $p->kd_calon;
        $_SESSION['name'] = $p->nama_calon;
        $_SESSION['status_login'] = true;

        echo "<script>
window.location.href='users.php';
</script>";

            echo "<script>
alert('Maaf, Anda tidak memiliki akses ke sistem');
window.location.href='index.php';
</script>";
        }
    }

