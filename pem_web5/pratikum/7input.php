<html>
    <head>
        <title></title>
    </head>
    <body>

        <!-- memanggil file hasilkirim.php setelah form dikirimkan-->	
        <form method="POST" action="7hasilkirim.php"> 
            
            <!--membuat tabel -->
            <table> 
                <tr>

                    <!--membuat isi cell pada baris dengan teks nama -->
                    <td width="130">Nama</td> 

                    <!--membuat input type text  -->
                    <td><input type="text" name="nama"></td> 
                </tr>
                <tr>

                    <!--membuat cell pada baris -->
                    <td colspan="2" align="center">
                        
                        <!--membuat buttom kirim -->
                        <input type="submit" name="btnlogin" value="Kirim"> 

                        <!--membuat button reset -->
                        <input type="reset" name="reset" value="reset">
                    
                    </td>

                </tr>
            </table>
        </form>
    </body>
</html> 