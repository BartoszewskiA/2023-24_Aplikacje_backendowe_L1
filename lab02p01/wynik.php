<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <h2>Podsumowanie:</h2>
  <?php
  if (!isset($_POST["imie"]) || !isset($_POST["nazwisko"]) || !isset($_POST["semestr"])) {
    echo "Brakuje niezbędnych danych <br>";
    echo "<a href='index.html'>Powrot do formularza</a>";
    return;
  }

  if (empty($_POST["imie"]) || empty($_POST["nazwisko"]) || empty($_POST["semestr"])) {
    echo "Dane nie mogą być puste <br>";
    echo "<a href='#' onclick='window.history.go(-1);'>Powrot do formularza</a>";
    return;
  }

  if (!is_numeric($semestr) || intval($semestr) > 7 || intval($semestr) < 1) {
    echo "Nieprawidłowy numer semestru, musi być liczbą z przedziału od 1 do 7. <br>";
    echo "<a href='index.html'>Powrot do formularza</a>";
    return;
  }

  $imie = $_POST["imie"];
  $nazwisko = $_POST["nazwisko"];
  $semestr = $_POST["semestr"];
  $stan_zaliczenia_jako_string = "";



  if (isset($_POST["zaliczone"])) {
    $stan_zaliczenia_jako_string = "Zaliczony";
  } else {
    $stan_zaliczenia_jako_string = "Niezaliczony";
  }


  echo "Student semestru $semestr <br>";
  echo "Imię: $imie <br>";
  echo "Nazwisko: $nazwisko <br>";
  echo "Semestr $semestr $stan_zaliczenia_jako_string <br>";

  ?>
</body>

</html>