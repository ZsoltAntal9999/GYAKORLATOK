<?php 

function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
if(isset($_POST["gomb"])){
$number=$_POST["szam"];
$flag = primeCheck($number); 
if ($flag == 1) 
    echo("Prím"); 
else
    echo("Nem prímszám");
}
?> 
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prímszám-e</title>
</head>
<body>
    <form method="post">
            <input type="number" name="szam" id="szam" value="">
            <input type="submit" value="Prímszám-e" name="gomb">
    </form>
    <label>
        
    </label>
</body>
</html>