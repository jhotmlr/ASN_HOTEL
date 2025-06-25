<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Booking Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Booking Hotel</h2>
    <a href="tambah.php"><button>+ Tambah Booking</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Tamu</th>
            <th>Tipe Kamar</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM booking_hotel");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id_booking']}</td>
                <td>{$row['nama_tamu']}</td>
                <td>{$row['tipe_kamar']}</td>
                <td>{$row['checkin']}</td>
                <td>{$row['checkout']}</td>
                <td>{$row['status_pembayaran']}</td>
                <td>
                    <a href='edit.php?id={$row['id_booking']}'>Edit</a> |
                    <a href='hapus.php?id={$row['id_booking']}' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>