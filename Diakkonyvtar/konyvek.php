<?php
    require_once "config.php";
    $strTable="";
    $sql="SELECT szerzo, cim, count(peldany.muaz) as 'darabszam' from mu inner join peldany on mu.az=peldany.muaz GROUP by cim order by szerzo asc, cim asc";
    $stmt=$db->query($sql);

    while($row=$stmt->fetch()){
        $strTable.="<tr><td>{$row["szerzo"]}</td><td>{$row["cim"]}</td><td>{$row["darabszam"]}</td></tr>";
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1>
        Könyvtári nyilvántartás
    </h1>
    <table>
        <thead>
            <th>Szerző</th>
            <th>Cím</th>
            <th>Darabszám</th>
        </thead>
        <tbody>
            <?=$strTable?>
        </tbody>
    </table>
</body>
</html>
