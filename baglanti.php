<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "sci̇encebase1";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if($conn){
    $isim = $_POST["isim"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];

    $sql = "insert into iletisim(adsoyad,email,telefonno) values('$isim','$email','$telefon')";
    $conn->query($sql);
    header("Location: index.php");    
}else{
    die("Bağlantı hatası..");
 }


?>