<?php
    try{
        $dataBase = new PDO("mysql:host=localhost; dbname=adventista", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        die("Error: " . $ex->getMessage());
    }


