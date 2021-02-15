<?php
    $hegylist="";
    $kivalasztott="";
    $hegylist2="";
    require_once "config.php";
    $sql="SELECT nev FROM csucs";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $hegylist.="<option>{$nev}</option>";
    }

    if(isset($_POST["gomb"])){
        $kivalasztott=$_POST["hegycsucsok"];
        $sql="SELECT DISTINCT maszo.nev as 'neev' from csucs inner join maszo on csucs.mazon=maszo.az where csucs.nev='{$kivalasztott}'";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $hegylist2.="<li>{$neev}</li>";
        }
        if($neev=="idegen"){
            $hegylist2="Nem mászta meg magyar hegymászó a csúcsot!";
        }
    }
?>

<form method="post">
    <select name="hegycsucsok" id="">
        <option value="0">
            Válassz egy hegycsúcsot!
        </option>
        <?=$hegylist?>
    </select>
    
    <ul>
        <?=$hegylist2?>
    </ul>
    
    <input type="submit" value="keheses" name="gomb">
</form>