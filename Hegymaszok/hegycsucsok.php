<?php
    require_once "config.php";
    $strLista="";
    $sql="SELECT nev, magassag, edatum FROM csucs ORDER by magassag DESC";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        print_r($row);
        
        extract($row);
        $strLista.="<li>{$nev} - {$magassag} - {$edatum}</li>";
    }
?>

<ul name="hegycsucs"> 
    <?=$strLista?>
</ul>