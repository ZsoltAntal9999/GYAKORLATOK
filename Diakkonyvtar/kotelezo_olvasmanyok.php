<?php
require_once "config.php";
$strLista="";
$strLista2="";
$kivalasztott="";
    $sql="SELECT evfolyam from mu GROUP BY evfolyam";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch())
        $strLista.="<option>{$row["evfolyam"]}</option><br>";

    if(isset($_POST['gomb'])){
        $kivalasztott=$_POST["evfolyamm"];
        $sql="SELECT szerzo, cim from mu where evfolyam='{$kivalasztott}'";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            $strLista2.="<li>{$row["szerzo"]}"."->"."{$row["cim"]}</li>";
        }
    }
?>

    <h1>Kötelező olvasmányok</h1>
<form method="post">
  <select name="evfolyamm">
    <?=$strLista?>
</select>

<ol name="kotelezo">
    <?=$strLista2?>
</ol>

<input type="submit" value="listáz" name="gomb">
</form>
