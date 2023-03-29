<?php


    $sql = "INSERT INTO users (oras) VALUES('1');";
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





