<?php
session_start();
$id = $_SESSION["id"];
if(!isset($_SESSION["id"])){
    header("location: ../index.php");
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
    <link rel="stylesheet" href="./anunt.css">

    <!-- Fonturi -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <title>Anunt</title>
</head>
<body>
    <div class="bara-sus d-flex justify-content-between">
        <div class="interact align-self-start">
            <img src="./imagini/sigla interact.png" alt="">
        </div>
        <?php
            if($id==1){
                echo '<button onclick="window.location.href=\'admin.php\'">ADMIN</button>' ;
            }
        ?>
        

        <div class="logout-img align-self-end">
            <img src="./imagini/logout-img.png" alt="" onclick="window.location.href='/includes/logOut.php'">
        </div>
    </div>
    <section class="cover">
        <img class="imagine-bg" src="./imagini/anunt-img.jpg" alt="">
        <div class="text">
            <p>Cupidon și-a notat toate cerintele tale. Acum a plecat in misiune ca sa ti gaseasca perechea. Revino pe 13.02 ca sa îți cunoști jumătate!</p>
        </div>
        




    </section>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>