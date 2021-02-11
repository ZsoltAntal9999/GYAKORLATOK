<?php
    require_once "config.php";
    $strLista="";
    $sql="SELECT nev, telefon, email from tanitvany ORDER by nev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            $strLista.="<li>{$row["nev"]}"." - "."{$row["telefon"]}"." - "."{$row["email"]}</li>";
        }
?>

<h1>Diákok Listája</h1>

<ul>
    <?=$strLista?>
</ul>