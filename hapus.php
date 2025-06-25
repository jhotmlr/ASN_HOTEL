<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM booking_hotel WHERE id_booking=$id");
header("Location: index.php");
?>