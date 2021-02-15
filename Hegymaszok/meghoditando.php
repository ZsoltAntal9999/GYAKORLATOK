<?php
require_once "config.php";
$strLista="";
$sql="SELECT nev, edatum FROM csucs WHERE mazon='0' ";
$stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $strLista.="<li>{$nev} - {$edatum}</li>";
    }
?>
<ul>
    <?=$strLista?>
</ul>