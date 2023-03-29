<?php
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <!-- CSS -->
    <link rel="stylesheet" href="register.css">
    
    <title>Register</title>
</head>
<body>
  
    <div class="bara-sus d-flex justify-content-between">
        <div class="interact align-self-start">
            <img src="./imagini/sigla interact.png" alt="">
        </div>
    </div>

<section class="cover ">

<img class="imagine-bg" src="./imagini/register image.jpg" alt="">

<div class="register d-flex align-content-center justify-content-center flex-column">
    <h1 class="titlu">Register</h1>

    <form action="/includes/register.inc.php" method="POST">
        <div class="mini-cat d-flex">
            <div class="spate-input in-mini prima">
                <input name="nume" class="form-control prima" placeholder="Nume" type="text" required>
            </div>
            <div class="spate-input in-mini">
                <input name="prenume" class="form-control" placeholder="Prenume" type="text" required>
            </div>
            
            
        </div>
        <div class="mini-cat d-flex">
            <div class="spate-input in-mini prima">
                <select class="form-control prima" name="varsta" required>
                    <option selected="" value=""> Varsta</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="spate-input in-mini">
                <select class="form-control" name="clasa" required>
                <option selected="" value=""> Clasa</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
            </div>
            
            
        </div>
        
        <div class="spate-input">
            <select class="form-control" name="gen" required>
			<option selected="" value=""> Gen</option>
			<option value="1">Baiat</option>
			<option value="2">Fata</option>
            <option value="3">Fata(caut fata)</option>
            <option value="4">Baiat(caut baiat)</option>
		    </select>
        </div>
        
        <div class="spate-input">
            <input name="linkSM" class="form-control" placeholder="Username Instagram" type="text" required>
        </div>
        <div class="spate-input">
            <input name="email" class="form-control" placeholder="Email" type="email" required>
        </div>
        <div class="spate-input">
            <input name="pwd" class="form-control" placeholder="Parola" type="password" required>
        </div>
        <div class="spate-input">
            <input name="pwd2" class="form-control" placeholder="Repeta Parola" type="password" required>
        </div>
        <div class="spate-input d-flex flex-row justify-content-center align-content-center">
            <input class="cbox" type="checkbox" required>
            <p>Accepta‎‎‎‎‎‏‏‎ ‎‏‏‎</p> <a href="/termenii si conditiile.html">Termenii si conditiile</a>
        </div>

        
        

        <div class="spate-input">
            <button type="submit" name="trimis" class="buton-register"> Register  </button>
        </div>
        <div class="spate-input">
            <p class="msg-eroare">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "invalidemail"){
                          echo "Invalid Mail";
                        }
                        if($_GET["error"] == "invalideURL"){
                            echo "Invalide URL";
                        }
                        if($_GET["error"] == "pwddontmatch"){
                            echo "Parolele sunt diferite";
                        }
                        if($_GET["error"] == "emailexistent"){
                            echo "Email deja inregistrat";
                        }
                        if($_GET["error"] == "cperror"){
                            echo "Capcha ERROR";
                        }


                    }
                    
            
            
            
                ?>
            </p>    
        </div>
        
        
        






                                                               
    </form>
</div>



</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>