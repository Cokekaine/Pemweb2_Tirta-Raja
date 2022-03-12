<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="card" style="height: 100%;">
        <div class="card-header">
            Sistem Penilaian
        </div>
        <div class="card-body">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
    
    <form method="GET" action="form_nilai.php">
    Nama : <input type="text" name="nama" value="" size="30"/><br/>
    Mata kuliah : 
    <select name="matkul">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="DDP">Basis Data I</option>
        <option value="DDP">Pemrograman Web</option>
    </select><br/>
    Nilai UTS : <input type="text" name="nilai_uts" value="" size="6" /><br/>
    </form>
    Nilai UAS : <input type="text" name="nilai_uas" value="" size="6" /><br/>
    
    Nilai Tugas Praktikum : <input type="text" name="nilai_tugas" value="" size="6" /><br/>
    <div class="form-group row">
    <label for="staticEmail"
        class="col-sm-4 col-form-label font-weight-bold text-right"></label>
    <div class="col-sm-5">
    <input name="proses" class="btn btn-primary" type="submit">
    </div>
</form>
</body>
</html>
<form class="form-horizontal"
 method="POST" action="nilai_siswa.php">

<?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if(!empty($proses)) {
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
}
?>
 </div>
     
     </div>
 </body>
 
 </html>