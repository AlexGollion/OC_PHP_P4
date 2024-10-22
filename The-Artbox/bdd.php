<?php 
    function connexion() : PDO
    {
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=artbox;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        );

        return $mysqlClient;

    }
?>