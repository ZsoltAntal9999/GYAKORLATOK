<?php
    require_once "config.php";
    $strList="";
    $sql="SELECT fnev, YEAR(Now())-szulev as 'kor' from futo WHERE YEAR(Now())-szulev<18 ORDER by fnev";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $strList.="<li>{$fnev}"."-"."{$kor}"." éves"."</li>";
    }
?>
<h1>
    Kiskorúak
</h1>

<form method="post">
<ul name="kiskoruaklist">
    <?=$strList?>
</ul>
</form>