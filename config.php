<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new MySQLi(HOST,USER,PASS,BASE, 3312); //PORTA 3312 PRECISAVA SER ADICIONADA NESTE CASO, POIS NA MINHA MAQUINA A PORTA PADRÃO É OUTRA

?>