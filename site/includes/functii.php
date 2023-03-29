<?php
function invalidEmail($email){
    $result=false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }

    return $result;
}



function pwdMatch($pwd,$pwd2){
    $result=false;
    if($pwd !== $pwd2){
        $result=true;
    }
    else{
        $result=false;
    }

    return $result;
}


function existEmail($email,$conn){
    $sql = "SELECT * FROM users WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmtfail");
        exit;
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultsdata = mysqli_stmt_get_result($stmt);

    if($row =  mysqli_fetch_assoc($resultsdata)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);



}

function createUser($nume,$prenume,$varsta,$clasa,$gen,$linkSM,$email,$pwd,$conn){
    $sql = "INSERT INTO users (Nume, Prenume, Parola, Email, Varsta, Gen, Clasa, Chestionar, Link) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmtfail");
        exit;
    }
    $chestionar=1;

    mysqli_stmt_bind_param($stmt,"ssssiiiis",$nume,$prenume,$pwd,$email,$varsta,$gen,$clasa,$chestionar,$linkSM);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    loginUS($email,$pwd,$conn);



}

function existPwp($pwp,$conn){
    $sql = "SELECT * FROM users WHERE Parola = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=stmtfail");
        exit;
    }

    mysqli_stmt_bind_param($stmt,"s",$pwp);
    mysqli_stmt_execute($stmt);

    $resultsdata = mysqli_stmt_get_result($stmt);

    if($row =  mysqli_fetch_assoc($resultsdata)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUS($email,$pwd,$conn){
    $sql = "SELECT * FROM users WHERE Email = ? AND Parola = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.php?error=stmtfail");
        exit;
    }

    mysqli_stmt_bind_param($stmt,"ss",$email,$pwd);
    mysqli_stmt_execute($stmt);

    $resultsdata = mysqli_stmt_get_result($stmt);

    if($row =  mysqli_fetch_assoc($resultsdata)){
        salvareId($email,$conn);
        header("location: ../formular.php");
        // header("location: ../test.php");
        exit;
    }
    else{
        header("location: ../login.php?error=emailsauparolaincorecta");
        exit;
    }

    mysqli_stmt_close($stmt);

    

}

function salvareId($email,$conn){
    session_start();
    
    $sql = "SELECT id FROM users WHERE email = '$email';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION["id"]=$row["id"];
        }
    } 
    $conn->close();
}