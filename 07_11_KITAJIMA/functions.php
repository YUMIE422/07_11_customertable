<?php

function connect_to_db()
{$dbn='mysql:dbname=gsacf_d06_11;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
    return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    exit('dbError:'.$e->getMessage());
    }
}
