<?php
require_once "config.php";
$strLista="";
$strLista2="";
$kivalasztott="";
    $sql="SELECT nev FROM diak";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch())
        $strLista.="<option>{$row["nev"]}</option><br>";

    if(isset($_POST['gomb'])){
        $kivalasztott=$_POST["diak"];
        $sql="SELECT diak.nev, diak.evfolyam, mu.szerzo, mu.cim, kolcsonzes.el, kolcsonzes.vissza, DATEDIFF(vissza,el) as 'diff' from kolcsonzes
         inner join diak on kolcsonzes.diakaz=diak.az inner JOIN peldany on kolcsonzes.peldanyaz=peldany.az inner join mu on peldany.muaz=mu.az WHERE nev='{$kivalasztott}' ORDER by szerzo asc, cim asc";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            $strLista2.="<tr><td>{$row["nev"]}</td><td>{$row["evfolyam"]}</td><td>{$row["szerzo"]}</td><td>{$row["cim"]}</td><td>{$row["el"]}</td><td>{$row["vissza"]}</td><td>{$row["diff"]}</td></tr>";
        }
    }
?>

    <h1>Diákok kölcsönzései</h1>
<form method="post">
  <select name="diak">
    <?=$strLista?>
</select>

<input type="submit" value="listáz" name="gomb">
<br>
<table>
    <thead>
        <th>Neve </th>
        <th>Évfolyam </th> 
        <th>Szerző </th> 
        <th>Címe </th> 
        <th>Elvitte </th> 
        <th>Visszahozta </th> 
        <th>Kölcsönzési napok száma </th> 
    </thead>

    <tbody>
        <?=$strLista2?>
    </tbody>

</table>
</form>