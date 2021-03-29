<?php

    $nama=$_POST['nama'];
    $ttl=$_POST['ttl'];
    $gender=$_POST['gender'];
    $prodi=$_POST['prodi'];
    $motto=$_POST['motto'];

        echo "<h2> Biodata </h2>";
        echo "<br>Nama : $nama <br>";
        echo "<br>Tempat, Tanggal Lahir : $ttl <br>";
        echo "<br>Jenis Kelamin: $gender <br>";
        echo "<br>Prodi : $prodi <br>";
        echo "<br>Motto Hidup : <br>";
        echo " -$motto-";
?>