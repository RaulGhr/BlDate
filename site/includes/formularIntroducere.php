<?php
if(isset($_POST["trimis"])){
    session_start();
    require_once 'db_connect.php';

$id=$_SESSION["id"];


$i1r1=$_POST["1r1"];
$i1r2=$_POST["1r2"];
$i1r3=$_POST["1r3"];
$i2r1=$_POST["2r1"];
$i2r2=$_POST["2r2"];
$i2r3=$_POST["2r3"];
$i3r1=$_POST["3r1"];
$i3r2=$_POST["3r2"];
$i3r3=$_POST["3r3"];
$i4r1=$_POST["4r1"];
$i4r2=$_POST["4r2"];
$i4r3=$_POST["4r3"];
$i5r1=$_POST["5r1"];
$i5r2=$_POST["5r2"];
$i5r3=$_POST["5r3"];
$i6r1=$_POST["6r1"];
$i6r2=$_POST["6r2"];
$i6r3=$_POST["6r3"];
$i7r1=$_POST["7r1"];
$i7r2=$_POST["7r2"];
$i7r3=$_POST["7r3"];
$i8r1=$_POST["8r1"];
$i8r2=$_POST["8r2"];
$i8r3=$_POST["8r3"];
$i9r1=$_POST["9r1"];
$i9r2=$_POST["9r2"];
$i9r3=$_POST["9r3"];
$i10r1=$_POST["10r1"];
$i10r2=$_POST["10r2"];
$i10r3=$_POST["10r3"];
$i11r1=$_POST["11r1"];
$i11r2=$_POST["11r2"];
$i11r3=$_POST["11r3"];
$i12r1=$_POST["12r1"];
$i12r2=$_POST["12r2"];
$i12r3=$_POST["12r3"];
$chestionar=2;

    $sql = "INSERT INTO intrebari (1r1, 1r2, 1r3, 2r1, 2r2, 2r3, 3r1, 3r2, 3r3, 4r1, 4r2 ,4r3, 5r1, 5r2, 5r3, 6r1, 6r2, 6r3, 7r1, 7r2, 7r3, 8r1, 8r2, 8r3, 9r1, 9r2, 9r3, 10r1, 10r2, 10r3, 11r1, 11r2, 11r3, 12r1, 12r2, 12r3, users_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../formular.php?error=stmtfail");
        exit;
    }
    

    mysqli_stmt_bind_param($stmt,"iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $i1r1, $i1r2, $i1r3, $i2r1, $i2r2, $i2r3, $i3r1, $i3r2, $i3r3, $i4r1, $i4r2 ,$i4r3, $i5r1, $i5r2, $i5r3, $i6r1, $i6r2, $i6r3, $i7r1, $i7r2, $i7r3, $i8r1, $i8r2, $i8r3, $i9r1, $i9r2, $i9r2, $i10r1, $i10r2, $i10r3, $i11r1, $i11r2, $i11r3, $i12r1, $i12r2, $i12r3, $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    $sql = "UPDATE users SET Chestionar='2' WHERE id='$id'";
    $conn->query($sql);
    $conn->close();



    header("location: ../anunt.php");





}
else{
    header("location: ../index.php");
}