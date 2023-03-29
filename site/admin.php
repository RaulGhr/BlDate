<?php
session_start();
$id = $_SESSION["id"];
if(!isset($_SESSION["id"])){
    header("location: ../index.php");
}
if($_SESSION["id"]!=1){
    header("location: ../index.php");
}
include "./includes/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <button onclick="window.location.href='/MatchuriAdmin.php?=0'">MatchuriAdmin</button>
    <br>
    <br>
    
    <!-- CAUTARE DUPA NUME -->
    <form action="/admin.php" method="POST"> 
        <div>
            <input value="Nume" name="nume" class="form-control" placeholder="Nume" type="text">
        </div>
        <div>
            <input value="Prenume" name="prenume" class="form-control" placeholder="Prenume" type="text">
        </div>
        <div>
            <button type="submit" name="trimisnume" class="buton-login">Find</button>
        </div>
        <?php
            if(isset($_POST["trimisnume"])){
                // echo 'trimis'. "<br>";
                $nume=$_POST["nume"];
                $prenume=$_POST["prenume"];
                // echo $nume. "<br>";
                // echo $prenume. "<br>";
                if($_POST["nume"]!="Nume"&&$_POST["prenume"]!="Prenume"){
                    // echo '1'. "<br>";
                    $sql = "SELECT * FROM users WHERE Nume='$nume' AND Prenume='$prenume';";
                }
                else if($_POST["nume"]!="Nume"){
                    // echo '2'. "<br>";
                    $sql = "SELECT * FROM users WHERE Nume='$nume';";
                }
                else if($_POST["prenume"]!="Prenume"){
                    // echo '3'. "<br>";
                    $sql = "SELECT * FROM users WHERE Prenume='$prenume';";
                }
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<br>";
                    while($row = $result->fetch_assoc()) {
                        echo '<a href="/MatchuriAdmin.php?id='.$row["id"].'">'."ID:".$row["id"]." ". $row["Nume"]." ".$row["Prenume"].'</a>'. "<br>";
                        
                    }
                } 
                else {
                echo "0 results";
                }
                
            }      
        ?>                                 
    </form>
    <br>
    <br>



    <H1>Statistici</H1>
    <?php
    include "./includes/db_connect.php";
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // Variabile
    $inregistrari=0;
    $baieti=0;
    $fete=0;
    $fetefete=0;
    $baietibaieti=0;
    //Varsta
    $v14=0;
    $v15=0;
    $v16=0;
    $v17=0;
    $v18=0;
    $v19=0;
    $v20=0;
    // Clasa
    $c7=0;
    $c8=0;
    $c9=0;
    $c10=0;
    $c11=0;
    $c12=0;
    // Formular
    $fc=0;
    $fnc=0;
    // Varsta fete
    $fv14=0;
    $fv15=0;
    $fv16=0;
    $fv17=0;
    $fv18=0;
    $fv19=0;
    $fv20=0;
    // Varsta baieti
    $bv14=0;
    $bv15=0;
    $bv16=0;
    $bv17=0;
    $bv18=0;
    $bv19=0;
    $bv20=0;



    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $inregistrari++;
        if($row["Gen"]==1){
            $baieti++;
            if($row["Varsta"]==14){$bv14++;}
            if($row["Varsta"]==15){$bv15++;}
            if($row["Varsta"]==16){$bv16++;}
            if($row["Varsta"]==17){$bv17++;}
            if($row["Varsta"]==18){$bv18++;}
            if($row["Varsta"]==19){$bv19++;}
            if($row["Varsta"]==20){$bv20++;}
        }
        if($row["Gen"]==2){
            $fete++;
            if($row["Varsta"]==14){$fv14++;}
            if($row["Varsta"]==15){$fv15++;}
            if($row["Varsta"]==16){$fv16++;}
            if($row["Varsta"]==17){$fv17++;}
            if($row["Varsta"]==18){$fv18++;}
            if($row["Varsta"]==19){$fv19++;}
            if($row["Varsta"]==20){$fv20++;}
        }
        if($row["Gen"]==3){
            $fetefete++;
            if($row["Varsta"]==14){$fv14++;}
            if($row["Varsta"]==15){$fv15++;}
            if($row["Varsta"]==16){$fv16++;}
            if($row["Varsta"]==17){$fv17++;}
            if($row["Varsta"]==18){$fv18++;}
            if($row["Varsta"]==19){$fv19++;}
            if($row["Varsta"]==20){$fv20++;}
        }
        if($row["Gen"]==4){
            $baietibaieti++;
            if($row["Varsta"]==14){$bv14++;}
            if($row["Varsta"]==15){$bv15++;}
            if($row["Varsta"]==16){$bv16++;}
            if($row["Varsta"]==17){$bv17++;}
            if($row["Varsta"]==18){$bv18++;}
            if($row["Varsta"]==19){$bv19++;}
            if($row["Varsta"]==20){$bv20++;}
        }

        if($row["Varsta"]==14){$v14++;}
        if($row["Varsta"]==15){$v15++;}
        if($row["Varsta"]==16){$v16++;}
        if($row["Varsta"]==17){$v17++;}
        if($row["Varsta"]==18){$v18++;}
        if($row["Varsta"]==19){$v19++;}
        if($row["Varsta"]==20){$v20++;}

        if($row["Clasa"]==7){$c7++;}
        if($row["Clasa"]==8){$c8++;}
        if($row["Clasa"]==9){$c9++;}
        if($row["Clasa"]==10){$c10++;}
        if($row["Clasa"]==11){$c11++;}
        if($row["Clasa"]==12){$c12++;}

        if($row["Chestionar"]==1){$fnc++;}
        if($row["Chestionar"]==2){$fc++;}

      }
    } 
    $conn->close();


    echo'Inregistrari:'.$inregistrari.'<br>';
    echo'Baieti:'.$baieti.'<br>';
    echo'Fete:'.$fete.'<br>';
    echo'Fete care vor fete:'.$fetefete.'<br>';
    echo'Baieti care vor baieti:'.$baietibaieti.'<br>';
    echo '<br>';
    echo'14 ani:'.$v14.'<br>';
    echo'15 ani:'.$v15.'<br>';
    echo'16 ani:'.$v16.'<br>';
    echo'17 ani:'.$v17.'<br>';
    echo'18 ani:'.$v18.'<br>';
    echo'19 ani:'.$v19.'<br>';
    echo'20 ani:'.$v20.'<br>';
    echo '<br>';
    echo'Baieti 14 ani:'.$bv14.'<br>';
    echo'Baieti 15 ani:'.$bv15.'<br>';
    echo'Baieti 16 ani:'.$bv16.'<br>';
    echo'Baieti 17 ani:'.$bv17.'<br>';
    echo'Baieti 18 ani:'.$bv18.'<br>';
    echo'Baieti 19 ani:'.$bv19.'<br>';
    echo'Baieti 20 ani:'.$bv20.'<br>';
    echo '<br>';
    echo'Fete 14 ani:'.$fv14.'<br>';
    echo'Fete 15 ani:'.$fv15.'<br>';
    echo'Fete 16 ani:'.$fv16.'<br>';
    echo'Fete 17 ani:'.$fv17.'<br>';
    echo'Fete 18 ani:'.$fv18.'<br>';
    echo'Fete 19 ani:'.$fv19.'<br>';
    echo'Fete 20 ani:'.$fv20.'<br>';
    echo '<br>';
    echo'Clasa 7:'.$c7.'<br>';
    echo'Clasa 8:'.$c8.'<br>';
    echo'Clasa 9:'.$c9.'<br>';
    echo'Clasa 10:'.$c10.'<br>';
    echo'Clasa 11:'.$c11.'<br>';
    echo'Clasa 12:'.$c12.'<br>';
    echo '<br>';
    echo'Formular completat:'.$fc.'<br>';
    echo'Formular necompletat:'.$fnc.'<br>';










    ?>




</body>
</html>