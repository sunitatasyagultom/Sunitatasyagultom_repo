<?php

if(isset($_POST['apply'])){
    $a = $_POST['fullname'];
    $b = $_POST['gender'];
    $c = $_POST['kotalahir'];
    $d = $_POST['dob'];
    $e = $_POST['alamat'];
    $f = $_POST['email'];
    $g = $_POST['telepon'];
    $h = $_POST['motivasi'];
    $i = $_POST['linkedin'];
    $j = $_POST['portfolio'];

    include "koneksi/koneksi.php";
    $insertdata = "INSERT INTO registrant (name,gender,kotalahir,dob,alamat,email,telepon,motivational,linkedin,portfolio) 
    values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
    $insertdata = mysqli_query($koneksi, $insertdata);
    if($insertdata){
        header('location:thanks.php');
    } else {
        echo 'Gagal
        <meta http-equiv="refresh" content="3;url=submit.php" />';
    }
};

?>
