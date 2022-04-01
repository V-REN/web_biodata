<?php
$host = mysqli_connect("localhost","root","","pendaftaran_kuliah");
$query = mysqli_query($host,'SELECT * FROM form');
?>
<table cellpadding="5" cellspacing="0" border="1">
    <tr>
        <th>NAME PENDAFTARAN</th>
        <th>ASAL SEKOLAH</th>
        <th>NISN</th>
        <th>JENIS KELAMIN</th>
        <th>TTL</th>
        <th>NO HP</th>
        <th>NO SKHU</th>
        <th>ALAMAT</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($query)) {
    echo'<tr>
        <td>'.$row['nama'].'</td>
        <td>'.$row['asalsekolah'].'</td>
        <td>'.$row['nisn'].'</td>
        <td>'.$row['jk'].'</td>
        <td>'.$row['ttl'].'</td>
        <td>'.$row['nohp'].'</td>
        <td>'.$row['noskhu'].'</td>
        <td>'.$row['alamat'].'</td>
    </tr>';
    }
echo '
</table>';
