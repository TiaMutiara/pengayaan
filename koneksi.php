<?php
$koneksi = mysqli_connect("localhost", "root", "", "portofolio");
$a = mysqli_query($koneksi, "SELECT * FROM user");
$b = mysqli_query($koneksi, "SELECT * FROM about");


function data($isi){
    global $koneksi;
    $c = mysqli_query($koneksi, $isi);
    $box = [];
    while ($keluarkan = mysqli_fetch_assoc($c)) 
    {
      $box[] = $keluarkan;
    }
    return $box;
}

function tambah($data){
  global $koneksi;
  $email = $data["email"];
  $nama =  $data["nama_k"];
  $pesan =  $data["pesan"];

  $query = " INSERT INTO contact
            VALUES 
            ('', '$email', '$nama', '$pesan', '')
            ";
          mysqli_query ($koneksi, $query);
          return mysqli_affected_rows($koneksi);

}
?>