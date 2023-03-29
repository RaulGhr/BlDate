<?php
    session_start();
    // $id=$_SESSION["id"];
    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }
    echo $id . ' '. '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include "./includes/db_connect.php";

$sql = "SELECT * FROM intrebari JOIN users ON users.id = intrebari.users_id WHERE users_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
            $i1r1=$row["1r1"];
            $i1r2=$row["1r2"];
            $i1r3=$row["1r3"];
            $i2r1=$row["2r1"];
            $i2r2=$row["2r2"];
            $i2r3=$row["2r3"];
            $i3r1=$row["3r1"];
            $i3r2=$row["3r2"];
            $i3r3=$row["3r3"];
            $i4r1=$row["4r1"];
            $i4r2=$row["4r2"];
            $i4r3=$row["4r3"];
            $i5r1=$row["5r1"];
            $i5r2=$row["5r2"];
            $i5r3=$row["5r3"];
            $i6r1=$row["6r1"];
            $i6r2=$row["6r2"];
            $i6r3=$row["6r3"];
            $i7r1=$row["7r1"];
            $i7r2=$row["7r2"];
            $i7r3=$row["7r3"];
            $i8r1=$row["8r1"];
            $i8r2=$row["8r2"];
            $i8r3=$row["8r3"];
            $i9r1=$row["9r1"];
            $i9r2=$row["9r2"];
            $i9r3=$row["9r3"];
            $i10r1=$row["10r1"];
            $i10r2=$row["10r2"];
            $i10r3=$row["10r3"];
            $i11r1=$row["11r1"];
            $i11r2=$row["11r2"];
            $i11r3=$row["11r3"];
            $i12r1=$row["12r1"];
            $i12r2=$row["12r2"];
            $i12r3=$row["12r3"];
            $gen=$row["Gen"];



        }
        
  
} 



$sql = "SELECT * FROM intrebari JOIN users ON users.id = intrebari.users_id WHERE Gen!='$gen'";
$result = $conn->query($sql);
$punctajTau=0;
$punctajTau2=$i1r3+$i2r3+$i3r3+$i4r3+$i5r3+$i6r3+$i7r3+$i8r3+$i9r3+$i10r3+$i11r3+$i12r3;
$punctajEl=0;
$punctajEl2=0;
$nrlista=0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $punctajEl=0;
        $punctajTau=0;
        $punctajEl2=0;
        echo 'ID:'. $row["id"] . ' '. '<br>';
        if($i1r2==$row["1r1"]){$punctajEl=$punctajEl+$i1r3;}
        if($i2r2==$row["2r1"]){$punctajEl=$punctajEl+$i2r3;}
        if($i3r2==$row["3r1"]){$punctajEl=$punctajEl+$i3r3;}
        if($i4r2==$row["4r1"]){$punctajEl=$punctajEl+$i4r3;}
        if($i5r2==$row["5r1"]){$punctajEl=$punctajEl+$i5r3;}
        if($i6r2==$row["6r1"]){$punctajEl=$punctajEl+$i6r3;}
        if($i7r2==$row["7r1"]){$punctajEl=$punctajEl+$i7r3;}
        if($i8r2==$row["8r1"]){$punctajEl=$punctajEl+$i8r3;}
        if($i9r2==$row["9r1"]){$punctajEl=$punctajEl+$i9r3;}
        if($i10r2==$row["10r1"]){$punctajEl=$punctajEl+$i10r3;}
        if($i11r2==$row["11r1"]){$punctajEl=$punctajEl+$i11r3;}
        if($i12r2==$row["12r1"]){$punctajEl=$punctajEl+$i12r3;}
        echo $punctajEl. '/' . $punctajTau2. '<br>';
        $procent1=$punctajEl / $punctajTau2 * 100;
        echo $procent1. '<br>';
        


        if($row["1r2"]==$i1r1){$punctajTau=$punctajTau+$row["1r3"];}
        if($row["2r2"]==$i2r1){$punctajTau=$punctajTau+$row["2r3"];}
        if($row["3r2"]==$i3r1){$punctajTau=$punctajTau+$row["3r3"];}
        if($row["4r2"]==$i4r1){$punctajTau=$punctajTau+$row["4r3"];}
        if($row["5r2"]==$i5r1){$punctajTau=$punctajTau+$row["5r3"];}
        if($row["6r2"]==$i6r1){$punctajTau=$punctajTau+$row["6r3"];}
        if($row["7r2"]==$i7r1){$punctajTau=$punctajTau+$row["7r3"];}
        if($row["8r2"]==$i8r1){$punctajTau=$punctajTau+$row["8r3"];}
        if($row["9r2"]==$i9r1){$punctajTau=$punctajTau+$row["9r3"];}
        if($row["10r2"]==$i10r1){$punctajTau=$punctajTau+$row["10r3"];}
        if($row["11r2"]==$i11r1){$punctajTau=$punctajTau+$row["11r3"];}
        if($row["12r2"]==$i12r1){$punctajTau=$punctajTau+$row["12r3"];}

        $punctajEl2=$row["1r3"]+$row["2r3"]+$row["3r3"]+$row["4r3"]+$row["5r3"]+$row["6r3"]+$row["7r3"]+$row["8r3"]+$row["9r3"]+$row["10r3"]+$row["11r3"]+$row["12r3"];

        echo $punctajTau . '/' .$punctajEl2. '<br>';

        $procent2=$punctajTau / $punctajEl2 * 100;
        echo $procent2. '<br>';

        $potrivire=sqrt($procent1*$procent2);

        echo $potrivire;

        echo '<br>';
        echo '<br>';
        echo '<br>';
        if($potrivire>79){
            $ids[$nrlista][1]=$row["id"];
            $potr[$nrlista][2]=$potrivire;
            $nrlista++;
        }

    }
  }


$conn->close();

// $size = count($potr)-1;
//     for ($i=0; $i<$size; $i++) {
//         for ($j=0; $j<$size-$i; $j++) {
//             $k = $j+1;
//             if ($potr[$k] < $potr[$j]) {
//                 // Swap elements at indices: $j, $k
//                 list($potr[$j], $potr[$k]) = array($potr[$k], $potr[$j]);
//                 list($ids[$j], $ids[$k]) = array($ids[$k], $ids[$j]);
//             }
//         }
//     }

// for ($i = $nrlista-1; $i >= 0; $i--) {
//     echo 'ID:'.$ids[$i][1].'<br>'.'Potrivire:'.$potr[$i][2].'<br>';
// }


?>




    
</body>
</html>


<?php



?>