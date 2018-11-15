<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  // Étant donné ces variables ...
  $nameTypes    = array("first", "last", "age", "ans");
  $name_first   = "John";
  $name_last    = "Doe";
  $name_age    = "32";
  $name_ans = "ans";
  // foreach = boucle lira tous les name dans le tableau avec un seul echo
  foreach($nameTypes as $type)
  echo ${"name_$type"} . "\n";
  // -----------------------------------------
  ?>
</body>
</html>
