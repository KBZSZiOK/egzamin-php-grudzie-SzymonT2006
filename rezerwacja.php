<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezerwacja</title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost","root","","baza1");
if(mysqli_connect_errno()){
    echo "CONNECTION FAILED";
}


if(isset($_POST["data"])&& isset($_POST["osoby"])&& isset($_POST["telefon"])&&isset($_POST["dane_osob"])){
$data = $_POST["data"];
$osoby = $_POST["osoby"];
$telefon = $_POST["telefon"];
$sql = "INSERT INTO rezerwacje (`id`,`nr_stolika`,data_rez,`liczba_osob`,telefon)
values (null,null,'$data',$osoby,'$telefon')";
if(mysqli_query($connect,$sql)){
echo "<h1>Dodano rezerwację do bazy</h1>";

}
mysqli_close($connect);
    
}


?>


</body>
</html>