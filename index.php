<?php
require "koneksi.php";

$suratkeluar = query("SELECT * FROM suratkeluar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar surat masuk</title>
</head>
<body>
    <h1>Daftar surat masuk</h1>
    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No.</th>
            <th>Tanggal Surat Masuk</th>
            <th>Tanggal Surat Dikirim</th>
            <th>No. Surat</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Diteruskan Kepada</th>
            <th>Kode Arsip</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($suratkeluar as $srt): ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$srt["Tanggal Surat Masuk"];?></td>
                <td><?=$srt["Tanggal Surat Dikirim"];?></td>
                <td><?=$srt["No. Surat"];?></td>
                <td><?=$srt["Pengirim"];?></td>
                <td><?=$srt["Perihal"];?></td>
                <td><?=$srt["Diteruskan Kepada"];?></td>
                <td><?=$srt["Kode Arsip"];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</body>
</html>