<?php

$db = mysqli_connect('localhost','root','evelyn','webspp');
if(!$db){
    throw new Exception("Database gagal terkoneksi", 1);
}

?>