<?php
    
    //jika input nama kosong maka akan ke halaman kosong.php
    if (empty($_POST['nama'])) { 
        header("location:7kosong.php"); 

    //jika input nama terisi maka akan muncul hasil nama
    } else {
        echo "<center>Nama :".$_POST['nama']."</center><br>"; 
    }
?>