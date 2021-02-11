<?php
    require_once "config.php";
    $strLista="";
    $strLista2="";
    $kivalasztott="";
        $sql="SELECT nev from tanar";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch())
            $strLista.="<option>{$row["nev"]}</option><br>";

        if(isset($_POST['gomb'])){
        $kivalasztott=$_POST["tanarlist"];
        $sql="SELECT tanitvany.nev, tanitasi_alkalom.datum, tanitasi_alkalom.kezdesido from tanitasi_alkalom inner join
         tanar on tanar.tanar_id=tanitasi_alkalom.tanar_id inner JOIN tanitvany on tanitasi_alkalom.tanitvany_id=tanitvany.tanitvany_id WHERE tanar.nev='{$kivalasztott}' GROUP by tanitvany.nev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            $strLista2.="<tr><td>{$row["nev"]}</td><td>{$row["datum"]}</td><td>{$row["kezdesido"]}</td></tr>";
        }
    }
?>

<h1>Tanár-tanítvány</h1>

<form method="post">
  <select name="tanarlist">
    <?=$strLista?>
</select>

<input type="submit" value="listáz" name="gomb">
<br>

<table>
    <thead>
        <th>Tanítványok névsora</th>
        <th>Dátum</th>
        <th>Időpont</th>
    </thead>
    <tbody>
        <?=$strLista2?>
    </tbody>
</table>
</form>
