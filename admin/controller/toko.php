<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        echo 'Berhasil';
    break;
    case 'save':
    break;
    case 'edit':
        echo 'Edit';
    break;
    case 'delete';
    break;
    default:
        $sql ="Select * from minuman";
        $minuman=$conn->query($sql);
        $conn->close();
        $content="views/barang/tampil.php";
        include_once 'views/template.php';
}
?>