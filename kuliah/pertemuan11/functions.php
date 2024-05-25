<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040086');
    return $conn;
}

function query($query)
{
    // Koneksi ke database
    $conn = koneksi();

// Query ke tabel mahasiswa
$result = mysqli_query($conn, $query);

// Menyiapkan data mahasiswa
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }

    return $rows;
}

function tambah ($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "INSERT INTO mahasiswa 
    VALUES (null, '$nama', '$nim', '$email', '$jurusan')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    // or die kalau salah tabel

    return mysqli_affected_rows($conn);
}