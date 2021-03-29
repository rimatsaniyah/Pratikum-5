<?php
    
    // jika input nama kosong akan ke 2redirect.php
    if(empty($_POST['nama'])) {
        header("Location:2redirect.php");
    }

    // jika input email kosong akan ke 2redirect.php
    elseif (empty($_POST['email'])){
        header("Location:2redirect.php");
    }

    else {
        
        // menampilkan nama yang diinput
        echo " Nama : ".$_POST['nama']."<br>";

        // menampilkan email yang diinput
        echo " Email : ".$_POST['email']."<br>";
  
        // menampilkan waktu sesuai zona waktu
        date_default_timezone_set("Asia/Jakarta");
  
        // menampilkan tanggal sesuai zona waktu
        echo " Tanggal login : <br>";
        echo date("l d-F-Y, h:i:s a");
    
    }
?>