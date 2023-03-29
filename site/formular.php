<?php
session_start();
$id = $_SESSION["id"];
if(!isset($_SESSION["id"])){
    header("location: ../index.php");
}

include "./includes/db_connect.php";
$ceva=1;
$sql = "SELECT Chestionar FROM users WHERE id = '$id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
    $chestionar = $row["Chestionar"];
      if($row["Chestionar"]=='2'){
          header("location: ../anunt.php");
          exit();
      }
      
      
    }
  } 
  $conn->close();
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./formular.css">

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
        <img class="imagine-bg" src="./imagini/formular imagine.jpg" alt="">
        <div class="spate-intrebari d-flex justify-content-center align-content-center">
            <form action="/includes/formularIntroducere.php" method="POST">
                <div class="deasupratext d-flex align-content-center justify-content-center">
                    <p>
                            Formularul de mai jos este format din 12 intrebari. <br>
                            La fiecare intrebare trebuie sa dai 3 raspunsuri. <br>
                            Pentru tine = raspunsul care ti se potriveste cel mai bine <br>
                            Pentru el/ea = cel pe care doresti sa il aiba posibilul tau partener <br>
                            Cat conteaza = cat de mult conteaza intrebarea pentru tine <br>
                    </p>
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>1.Ce vrei de la cealalta persoana?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="1r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Relatie lunga</option>
                                    <option value="2">Relatie scurta</option>
                                    <option value="3">Indecis</option>
                                </select>
                                <select class="form-control selectare" name="1r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Relatie lunga</option>
                                    <option value="2">Relatie scurta</option>
                                    <option value="3">Indecis</option>
                                </select>
                                <select class="form-control selectare" name="1r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>2.Cat de orgolios esti?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="2r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Sunt o persoana orgolioasa</option>
                                    <option value="2">Sunt orgolios, dar fac compromisuri</option>
                                    <option value="3">Nu sunt orgolios</option>
                                </select>
                                <select class="form-control selectare" name="2r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Sunt o persoana orgolioasa</option>
                                    <option value="2">Sunt orgolios, dar fac compromisuri</option>
                                    <option value="3">Nu sunt orgolios</option>
                                </select>
                                <select class="form-control selectare" name="2r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>3.Te consideri o persoana impulsiva?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="3r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Da, dar ma pot stapani</option>
                                    <option value="3">Nu</option>
                                </select>
                                <select class="form-control selectare" name="3r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Da, dar ma pot stapani</option>
                                    <option value="3">Nu</option>
                                </select>
                                <select class="form-control selectare" name="3r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>4.Emotiv/a si sufletist/a sau rece si rational/a?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="4r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Emotiv/a si sufletist/a</option>
                                    <option value="2">Rational/a si rece</option>
                                </select>
                                <select class="form-control selectare" name="4r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Emotiv/a si sufletist/a</option>
                                    <option value="2">Rational/a si rece</option>
                                </select>
                                <select class="form-control selectare" name="4r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>5.Preferinte timp liber?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="5r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Activitati indoor</option>
                                    <option value="2">Activitati outdoor</option>
                                    <option value="3">Activitati mixte</option>
                                </select>
                                <select class="form-control selectare" name="5r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Activitati indoor</option>
                                    <option value="2">Activitati outdoor</option>
                                    <option value="3">Activitati mixte</option>
                                </select>
                                <select class="form-control selectare" name="5r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>6.Care este stilul tau vestimentar?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="6r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Classy</option>
                                    <option value="2">Sport</option>
                                    <option value="3">Casual</option>
                                </select>
                                <select class="form-control selectare" name="6r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Classy</option>
                                    <option value="2">Sport</option>
                                    <option value="3">Casual</option>
                                </select>
                                <select class="form-control selectare" name="6r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>7.Ai vicii/dependente?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="7r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Rareori</option>
                                    <option value="3">Nu</option>
                                </select>
                                <select class="form-control selectare" name="7r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Rareori</option>
                                    <option value="3">Nu</option>
                                </select>
                                <select class="form-control selectare" name="7r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>8.Esti o persoana introvertita sau extrovertita?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="8r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Introvertit</option>
                                    <option value="2">Ambivert</option>
                                    <option value="3">Extrovertit </option>
                                </select>
                                <select class="form-control selectare" name="8r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Introvertit</option>
                                    <option value="2">Ambivert</option>
                                    <option value="3">Extrovertit </option>
                                </select>
                                <select class="form-control selectare" name="8r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>9.Crezi in zodii?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="9r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Nu</option>
                                </select>
                                <select class="form-control selectare" name="9r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Nu</option>
                                </select>
                                <select class="form-control selectare" name="9r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>10.Esti o persoana geloasa?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="10r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Nu</option>
                                </select>
                                <select class="form-control selectare" name="10r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Da</option>
                                    <option value="2">Nu</option>
                                </select>
                                <select class="form-control selectare" name="10r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>11.Stilul muzical?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="11r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Pop</option>
                                    <option value="2">Rock</option>
                                    <option value="3">Hip hop</option>
                                </select>
                                <select class="form-control selectare" name="11r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Pop</option>
                                    <option value="2">Rock</option>
                                    <option value="3">Hip hop</option>
                                </select>
                                <select class="form-control selectare" name="11r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="intrebare d-flex align-content-center justify-content-center">
                    <div class="s-intrebare d-flex flex-column align-content-start justify-content-start">
                        <div class="text-intrebare">
                            <p>12.Cat de organizat esti?</p>
                        </div>
                        <div class="raspunsuri d-flex flex-row">
                            <div class="pt-cine">
                                <p>Pentru tine</p>
                                <p>Pentru el/ea</p>
                                <p>Cat conteaza</p>

                            </div>

                            <div class="spate-select d-flex flex-column">
                                <select class="form-control selectare" name="12r1" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Dezordonat</option>
                                    <option value="2">Obisnuit</option>
                                    <option value="3">Organizat</option>
                                </select>
                                <select class="form-control selectare" name="12r2" required>
                                    <option selected="" value=""></option>
                                    <option value="1">Dezordonat</option>
                                    <option value="2">Obisnuit</option>
                                    <option value="3">Organizat</option>
                                </select>
                                <select class="form-control selectare" name="12r3" required>
                                    <option selected="" value=""></option>
                                    <option value="0">Irelevant</option>
                                    <option value="1">Putin important</option>
                                    <option value="10">Cat de cat</option>
                                    <option value="50">Foarte important</option>
                                    <option value="250">Obligatoriu</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="clasa-buton d-flex align-content-center justify-content-center">
                    <button type="submit" name="trimis" class="buton-submit">Submit</button>
                </div>
                


            </form>

        </div>




    </section>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>