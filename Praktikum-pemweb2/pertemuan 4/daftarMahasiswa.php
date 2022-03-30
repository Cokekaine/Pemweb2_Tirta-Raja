<?php 
require_once "classMahasiswa.php";

$tirta=new Mahasiswa("Tirta Raja","01010101","Sistem Informasi","2021",3.4);
$fani=new Mahasiswa("Fani Hilwa","02020202","Sistem Informasi","2021", 3.06);
$ilyasha=new Mahasiswa("Ilyasha Efrian","03030303","Sistem Informasi","2021", 3.7);
$annisa=new Mahasiswa("Annisa Nurul","04040404","Sistem Informasi","2019", 3.7);
$data=[$tirta, $fani, $ilyasha, $annisa];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
<div class="container">
 <div class="row">
     <div class="col-12">
         <h1 class="text-center">Daftar Mahasiswa</h1> 
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     </div>
 </div>
 <div class="row">
     <div class="col-12">
         <table class="table text-center table-dark table-hover">
              <thead class="thead-dark">
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Prodi</th>
                  <th>IPK</th>
                  <th>Predikat</th>
                  <th>Tahun Angkatan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $mahasiswa) : ?>
                <tr>
                  <td><?= $mahasiswa->nama; ?></td>
                  <td><?= $mahasiswa->nim; ?></td>
                  <td><?= $mahasiswa->prodi; ?></td>
                  <td><?= $mahasiswa->ipk; ?></td>
                  <td><?= $mahasiswa->predikat_ipk(); ?></td>
                  <td><?= $mahasiswa->thn_angkatan; ?></td>
              </tbody>
                <?php endforeach; ?>
            </table>
     </div>
 </div>
 </div>
 </body>
 </html>