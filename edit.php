<?php include 'koneksi.php'; $id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM booking_hotel WHERE id_booking=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Booking</h2>
    <form method="post">
        <label>Nama Tamu</label>
        <input type="text" name="nama_tamu" value="<?= $row['nama_tamu'] ?>" required>

        <label>Tipe Kamar</label>
        <select name="tipe_kamar">
            <option <?= $row['tipe_kamar'] == 'Single' ? 'selected' : '' ?>>Single</option>
            <option <?= $row['tipe_kamar'] == 'Double' ? 'selected' : '' ?>>Double</option>
            <option <?= $row['tipe_kamar'] == 'Suite' ? 'selected' : '' ?>>Suite</option>
        </select>

        <label>Check-in</label>
        <input type="date" name="checkin" value="<?= $row['checkin'] ?>" required>

        <label>Check-out</label>
        <input type="date" name="checkout" value="<?= $row['checkout'] ?>" required>

        <label>Status Pembayaran</label>
        <select name="status_pembayaran">
            <option <?= $row['status_pembayaran'] == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
            <option <?= $row['status_pembayaran'] == 'Belum Lunas' ? 'selected' : '' ?>>Belum Lunas</option>
        </select>

        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama_tamu'];
        $tipe = $_POST['tipe_kamar'];
        $in = $_POST['checkin'];
        $out = $_POST['checkout'];
        $status = $_POST['status_pembayaran'];

        mysqli_query($koneksi, "UPDATE booking_hotel SET 
            nama_tamu='$nama', tipe_kamar='$tipe', checkin='$in', checkout='$out', status_pembayaran='$status'
            WHERE id_booking=$id");

        echo "<script>window.location='index.php';</script>";
    }
    ?>
</body>
</html>