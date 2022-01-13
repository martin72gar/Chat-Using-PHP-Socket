<?php
    
$sock = socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, '127.0.0.1',5000);
socket_listen($sock,1);

echo "menunggu client \n";

class Chat {

    function readline() {
        return rtrim(fgets(STDIN));
    }
}


do {
    $terima=socket_accept($sock);
    $pesan=socket_read($terima, 1024);
    $pesan=rtrim($pesan);
    echo "Pesan Client : ".$pesan."\n";

    $line= new Chat;
    echo "Masukkan Pesan : ";
    $balas=$line->readline();

    socket_write($terima, $balas, strlen($balas));
} while ($balas!='bye');

socket_close($terima);
socket_close($sock);

?>