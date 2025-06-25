<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Booking Hotel</h2>
    <form method="post">
        <label>Nama Tamu</label>
        <input type="text" name="nama_tamu" required>

        <label>Tipe Kamar</label>
        <select name="tipe_kamar">
            <option>Single</option>
            <option>Double</option>
            <option>Suite</option>
        </select>

        <label>Check-in</label>
        <input type="date" name="checkin" required>

        <label>Check-out</label>
        <input type="date" name="checkout" required>

        <label>Status Pembayaran</label>
        <select name="status_pembayaran">
            <option>Lunas</option>
            <option>Belum Lunas</option>
        </select>

        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_tamu'];
        $tipe = $_POST['tipe_kamar'];
        $in = $_POST['checkin'];
        $out = $_POST['checkout'];
        $status = $_POST['status_pembayaran'];

        mysqli_query($koneksi, "INSERT INTO booking_hotel (nama_tamu, tipe_kamar, checkin, checkout, status_pembayaran) 
        VALUES ('$nama', '$tipe', '$in', '$out', '$status')");
        echo "<script>window.location='index.php';</script>";
    }
    ?>
</body>
</html>