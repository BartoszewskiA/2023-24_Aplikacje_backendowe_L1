<!doctype html>
<?php
session_start();
$procesory = array(
  "i3" => array("nazwa" => "Intel i3 (14 generacja)", "doplata" => 0),
  "i5" => array("nazwa" => "Intel i5 (14 generacja)", "doplata" => 400),
  "i7" => array("nazwa" => "Intel i7 (14 generacja)", "doplata" => 600)
);
$cena_bazowa = 3000;
?>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <form method="post" action="index.php">
    <select name="procesor">
      <option value="i3">Intel i3</option>
      <option value="i5">Intel i3</option>
      <option value="i7">Intel i7</option>
    </select>
    <br><br>
    <input type="submit" value="Zapamiętaj">
  </form>

  <?php
  if (isset($_POST['wyczysc']))
    session_destroy();
  if (isset($_POST['procesor'])) {
    $_SESSION['procesor'] = $_POST['procesor'];
  }
  ?>

  <?php
  if (isset($_SESSION['procesor'])) {
    $procesor = $_SESSION['procesor'];
    echo "Procesor: ", $procesory[$procesor]["nazwa"], "<br>";
    echo "Cena: ",  $cena_bazowa + $procesory[$procesor]["doplata"], "<br>";
  }
  ?>
  <br><br>
  <form method="post" action="index.php">
    <input type="hidden" name="wyczysc" value="true">
    <input type="submit" value="Wyczyść wybór">
  </form>
</body>

</html>