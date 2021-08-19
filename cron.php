<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'vozama');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
	echo "OK connected";
}

$requeteCadre = '
 UPDATE personal AS p INNER JOIN personal AS 
 b ON p.id = b.id SET p.pers_nbr_conge = b.pers_nbr_conge + b.pers_dr_conge WHERE p.pers_type = "Cadre"
 ';

 $requeteNonCadre = '
 UPDATE personal AS p INNER JOIN personal AS 
 b ON p.id = b.id SET p.pers_nbr_conge = b.pers_nbr_conge + b.pers_dr_conge WHERE p.pers_type = "Non Cadre"
 ';

 $requeteCadreSup = '
 UPDATE personal AS p INNER JOIN personal AS 
 b ON p.id = b.id SET p.pers_nbr_conge = b.pers_nbr_conge + b.pers_dr_conge WHERE p.pers_type = "Cadre Sup"
 ';


    if($stmtC = mysqli_prepare($link, $requeteCadre)){
        if(mysqli_stmt_execute($stmtC)){
           // $result = mysqli_stmt_get_result($stmt);             
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
	if($stmtNC = mysqli_prepare($link, $requeteNonCadre)){
        if(mysqli_stmt_execute($stmtNC)){
            //$result = mysqli_stmt_get_result($stmt);             
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
	if($stmtCS = mysqli_prepare($link, $requeteCadreSup)){
        if(mysqli_stmt_execute($stmtCS)){
            //$result = mysqli_stmt_get_result($stmtCS);             
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmtC);
    mysqli_stmt_close($stmtNC);
    mysqli_stmt_close($stmtCS);
    
    mysqli_close($link);



?>

