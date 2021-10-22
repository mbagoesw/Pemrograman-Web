<?php
$namaServer = "sql109.epizy.com";
$username = "epiz_30117371";
$password = "QrIt1CcBrPObv";
$namaDatabase = "epiz_30117371_pemweb_uts";

// membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDatabase);

// cek koneksi
if (!$conn) {
  die("koneksi gagal: ") . mysqli_connect_error();
}


