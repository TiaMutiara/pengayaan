<?php
$koneksi = mysqli_connect("localhost", "root", "", "portofolio");

$q = mysqli_query($koneksi, "select * from user where id=1");
$data = mysqli_fetch_assoc($q);

print json_encode($data);
