<?php
    require_once "config.php";
    $strList="";
    $sql="SELECT fnev, eredmenyek.ido from futo inner join eredmenyek on futo.fid=eredmenyek.fid inner JOIN versenyek on eredmenyek.vid=versenyek.vid WHERE versenyek.vnev='Olimpia' ORDER by ido";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $strList.="<li>{$fnev}"."-"."{$ido}</li>";
    }
?>
<h1>
    Ranglista
</h1>

<form method="post">
<ul name="Ranglista">
    <?=$strList?>
</ul>
</form>