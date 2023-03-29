<?php
if(isset($_POST["trimis"])){

    
    
    
        $secret   = '6Ld2H1IaAAAAAJQhqYFBdiO8PMEDFPKweTO6_734';
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
        );
        $response = json_decode($response);
    
        

        $nume=$_POST["nume"];
        $prenume=$_POST["prenume"];
        $varsta=$_POST["varsta"];
        $clasa=$_POST["clasa"];
        $gen=$_POST["gen"];
        $linkSM=$_POST["linkSM"];
        $email=$_POST["email"];
        $pwd=$_POST["pwd"];
        $pwd2=$_POST["pwd2"];
        
        require_once 'db_connect.php';
        require_once 'functii.php';
        

        if(invalidEmail($email)!== false){
            header("location: ../register.php?error=invalidemail");
            exit;
        }
       
        if(pwdMatch($pwd,$pwd2)!== false){
            header("location: ../register.php?error=pwddontmatch");
            exit;
        } 
        if(existEmail($email,$conn)!== false){
            header("location: ../register.php?error=emailexistent");
            exit;
        }

        createUser($nume,$prenume,$varsta,$clasa,$gen,$linkSM,$email,$pwd,$conn);










    

    
 

}
else{
    header("location: ../register.php");
}



