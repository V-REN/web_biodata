<?php

    include "../koneksi/koneksi.php";

    $NAME_PENDAFTARAN = $_POST['nama'];
    $ASAL_SEKOLAH = $_POST['asalsekolah'];
    $NISN = $_POST['nisn'];
    $JENIS_KELAMIN = $_POST['jk'];
    $TTL = $_POST['ttl'];
    $NO_HP = $_POST['Nohp'];
    $NO_SKHU = $_POST['noskhu'];
    $ALAMAT = $_POST['alamat'];


    $query = "insert into user set nama='$NAME_PENDAFTARAN', asalsekolah='$ASAL_SEKOLAH', nisn='$NISN', jk='$JENIS_KELAMIN', ttl='$TTL', nohp='$NO_HP', noskhu='$NO_SKHU', alamat='$ALAMAT'";

    mysqli_query($host,$query);

?>