<?php

$koneksi = mysqli_connect("localhost", "root", "", "les");

function read($sqlString = ""){
    global $koneksi;
    $array = [];
    $query = mysqli_query($koneksi, $sqlString);
    while($data = mysqli_fetch_assoc($query)){
        array_push($array, $data);
    }
    return $array;
}

function post($sqlString = ""){
    global $koneksi;
    $query = mysqli_query($koneksi, $sqlString);
}