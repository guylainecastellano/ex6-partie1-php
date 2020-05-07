<?php
$number = 140; //1ere version
$number = ($number + 30) / 2
//3e version $number = 140;
//$number += 30;
//$number /=2;
//4e version $number = 140;
//$number = $number + 30;
//$number = $number / 2;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex6 partie1 php</title>
</head>
<body>
  <p>Résultat :
  <?php
  echo $number;
  //1er version soit echo ($number + 30) / 2
  ?>
</p>
</body>
</html>
