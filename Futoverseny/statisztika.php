<?php
    require_once "config.php";
    $strList="";
    $sql="SELECT YEAR(Now())-szulev as 'kor', COUNT(fnev) as 'letszam' from futo group by szulev";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $strList.="<li>{$kor}"."-"."{$letszam}"." fő"."</li>";
    }
?>
<h1>
    Statisztika
</h1>

<form method="post">
<ul name="Statlist">
    <?=$strList?>
</ul>
</form>
