<?php
    try{
        $dataBase = new PDO("mysql:host=localhost; dbname=adventista", "root", "");
        $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        die("Error: " . $ex->getMessage());
    }


