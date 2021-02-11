<?php
    require_once "config.php";
    $strLista="";
    $sql="SELECT tanar.nev, tantargy.tantargynev, tanar.telefon, tanar.email from
     tanar inner join tantargy on tanar.tantargy_id=tantargy.tantargy_id ORDER by tanar.nev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            $strLista.="<li>{$row["nev"]}"." - "."{$row["tantargynev"]}"." - "."{$row["telefon"]}"." - "."{$row["email"]}</li>";
        }
?>

<h1>Tanárok Listája</h1>

<ol name="tanarlist">
    <?=$strLista?>
</ol>