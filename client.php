<!DOCTYPE html>
<html>
<head>
    <title>Client </title>
</head>
<body>

    <form method="POST">
        <table>
            <tr>
                <td>
                    <label> Masukkan pesan : </lable>  
                    <input type="text" name="txtPesan">
                    <input type="submit" name="btnKirim" value="Kirim">
                </td>
            </tr>

            <?php
                error_reporting(E_ALL & ~E_NOTICE);
                if(isset($_POST['btnKirim'])){
                    $pesan=$_POST['txtPesan'];
                    $sock = socket_create(AF_INET, SOCK_STREAM, 0);
                    socket_connect($sock, '127.0.0.1',5000);
                    socket_write($sock, $pesan, strlen($pesan));

                    $balas=socket_read($sock, 1024);
                    $balas=rtrim($balas);
                    $balas="Pesan Server :".$balas;
                    socket_close($sock);
                }
            ?>


            <tr>
                <td>
                    <textarea rows="5" cols="40"><?=$balas?></textarea>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
