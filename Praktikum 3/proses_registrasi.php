<?php

//nilai registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$skills = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];


$skills = [
    'html' => 10,
    'css' => 10,
    'javascript' => 20,
    'rwd boostrap' => 20,
    'php' => 30,
    'python' => 30,
    'java' => 50,
    
    ];


$kategori_skill = '' ;
if  ($total_skor <= 0){
    
}


echo "NIM:  $nim";
echo "<br>Nama Lengkap:  $nama";
echo "<br>Gender:  $gender";
echo "<br>Prodi: $prodi";
echo "<br>Skill:  $skill" . join(',', $skills);
echo "<br>Domisili: $domisi";
echo "<br>Email: $email";
