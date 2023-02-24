<?php 

// ini sebuah komentar
/* ini juga sebuah komentar */
# komentar pake simbol kres


echo "Hello World <br>";
echo 'Hello World <br>';
print_r("Nurul Aeman <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";


$nama = "Nurul Aeman";
$umur = 19;
$berat = 55.2;
$mahasiswa = true;

echo "Nama saya $nama <br>";
echo "Umur saya sekarang adalah $umur tahun <br>";
echo "Berat saya $berat kg";
echo "<hr>";


// Membuar array
$programs = ["php", "javascrip", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}




?>