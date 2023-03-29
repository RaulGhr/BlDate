<?php
session_start();
// $id = $_SESSION["id"];
if(!isset($_SESSION["id"])){
    header("location: ../index.php");
}
if($_SESSION["id"]!=1){
    header("location: ../index.php");
}

  

if(isset($_GET["id"])){
    $id=$_GET["id"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./matchuri.css">

    <!-- Fonturi -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <title>Formular</title>
</head>
<body>
    <div class="bara-sus d-flex justify-content-between">
        <div class="interact align-self-start">
            <img src="./imagini/sigla interact.png" alt="">
        </div>
        <div class="logout-img align-self-end">
            <img src="./imagini/logout-img.png" alt="" onclick="window.location.href='/includes/logOut.php'">
        </div>
    </div>
    <section class="cover">
        <img class="imagine-bg" src="./imagini/afisare-img.jpg" alt="">
        <div class="ecran d-flex justify-content-center align-content-center">
            <div class="spate">
                <div class="foaie">

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
                    
                    $gencautat=0;
                    if($gen==1)$gencautat=2;
                    if($gen==2)$gencautat=1;
                    if($gen==3)$gencautat=3;
                    if($gen==4)$gencautat=4;
                    
                    $nrlista=0;
                    
                    $sql = "SELECT * FROM intrebari JOIN users ON users.id = intrebari.users_id WHERE Gen='$gencautat' AND Chestionar='2' AND users.id!='$id'";
                    $result = $conn->query($sql);
                    $punctajTau=0;
                    $punctajTau2=$i1r3+$i2r3+$i3r3+$i4r3+$i5r3+$i6r3+$i7r3+$i8r3+$i9r3+$i10r3+$i11r3+$i12r3;
                    $punctajEl=0;
                    $punctajEl2=0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $punctajEl=0;
                            $punctajTau=0;
                            $punctajEl2=0;
                            // echo 'ID:'. $row["id"] . ' '. '<br>';
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
                            // echo $punctajEl. '/' . $punctajTau2. '<br>';
                            $procent1=$punctajEl / $punctajTau2 * 100;
                            // echo $procent1. '<br>';
                            
                            
                    
                    
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
                    
                            // echo $punctajTau . '/' .$punctajEl2. '<br>';
                    
                            $procent2=$punctajTau / $punctajEl2 * 100;
                            // echo $procent2. '<br>';
                    
                            $potrivire=sqrt($procent1*$procent2);
                    
                            // echo $potrivire;

                            $formular[1][1];
                    
                            // echo '<br>';
                            // echo '<br>';
                            // echo '<br>';
                            if($potrivire>85){
                                // echo 'ID:'. $row["id"] . ' '. '<br>';
                                $ids[$nrlista]=$row["id"];
                                $potr[$nrlista]=$potrivire;
                                $nrlista++;
                            }
                    
                
                        }
                        
                        // $size = $nrlista;
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
                        $length = count( $potr );
                        

                        for ( $i = 0; $i < $length; $i++ ) {
                            for ( $j = 0; $j < $length - 1; $j++ ) {
                            

                            if ( $potr[ $j ] > $potr[ $j + 1 ] ) {
                                $tmp            = $potr[ $j + 1 ];
                                $potr[ $j + 1 ]  = $potr[ $j ];
                                $potr[ $j ]      = $tmp;

                                $tmp            = $ids[ $j + 1 ];
                                $ids[ $j + 1 ]  = $ids[ $j ];
                                $ids[ $j ]      = $tmp;


                            } // end of if conditional

                            } // end of inner for loop
                        } // end of first for loop

                            
                            if($nrlista!=0){
                                $cate=$nrlista;
                                echo'<h3 style="margin-top:15px;">Cupidon a gasit '.$cate.' matchuri</h3>';
                                echo'<h3>Da scroll ca sa le vezi pe toate</h3>';
                            }
                            else{
                                echo'<h3>Din pacate Cupidon nu a gasit pe nimeni.</h3>';
                                echo'<h3>Capul sus, o sa vina si vremea ta.</h3>';
                            }
                            
                        for ($i = $nrlista-1; $i >= 0; $i--) {
                            // echo 'ID:'.$ids[$i].'<br>'.'Potrivire:'.$potr[$i].'<br>';
                            $sql = "SELECT * FROM users WHERE id ='$ids[$i]'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              
                              while($row = $result->fetch_assoc()) {
                                $potr[$i]=round ( $potr[$i] ,  0 , PHP_ROUND_HALF_UP );
                                echo '<div class="persoana d-flex flex-row align-content-between justify-content-between">
                                    <div class="stanga">
                                        <p>Nume: ‎‏‏‎'.$row["Nume"].' ‎‏‏‎'.$row["Prenume"].'</p>
                                        <p>Varsta: ‎‏‏‎'.$row["Varsta"].' ani</p>
                                        <p>Clasa: ‎‏‏‎'.$row["Clasa"].'</p>
                                        <p>Compatibilitate: ‎‏‏‎'.$potr[$i].'%</p>
                                    </div>
                                    <div class="dr d-flex justify-content-center align-content-center flex-column">
                                        <img onclick="openInNewTab(\'https://www.instagram.com/'.$row["Link"].'/\');" class="insta AnimationIncrease1" src="/imagini/sigla-insta.png" alt="">
                                        <p>Tap here</p>
                                    </div>
                                </div> ';

                                



                              }
                            } 
                            
                            
                        }












                      }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    $conn->close();
                    
                    
                    






                ?>





                    <!-- <div class="persoana d-flex flex-row align-content-between justify-content-between">
                        <div class="stanga">
                            <p>Nume:</p>
                            <p>Cati ani are:</p>
                            <p>Clasa:</p>
                            <p>Compatibilitate:</p>
                            </div>
                        <div class="dr d-flex justify-content-center align-content-center flex-column">
                            <img class="insta AnimationIncrease1" src="/imagini/sigla-insta.png" alt="">
                            <p>Tap here</p>
                        </div>
                    </div> -->
                    
                    
                    





                </div>
                
                
                
                
                
                





            </div>
        </div>
        




    </section>

    <script>
        function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>