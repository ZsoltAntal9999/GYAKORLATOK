<?php
$uzenet="";
require_once "config.php";

if(isset($_POST["gomb"])){
    extract($_POST);
    $sql="INSERT INTO maszo values(null,'{$nev}','{$ferfi}')";
    /*echo $sql;*/
    $stmt=$db->exec($sql);

if($stmt){
    $uzenet="Sikeres adatbeírás.";
}
else{ 
    $uzenet="Nem sikerült";
}
}
?>

<form method="post">
    <label>Név: </label> <input type="text" name="nev" id="">
    <hr>
   <label>Férfi(0 vagy 1): </label> <input type="number" name="ferfi" id="">
    <input type="submit" value="Beir" name="gomb">

</form>

<div>
    <?=$uzenet?>
</div>