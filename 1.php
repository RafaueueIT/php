<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
    $name='Krystyna';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    echo 'tekst<br>';

// typy danych
//boolean
//zapisuj zmienne bez polskich znakow w jezyku angielskim

    $prawda = true; //1
    $fałsz = false; //0

    echo $prawda;
    echo $fałsz;

//integer

    $bin = 0b1010;
    $dec = 10;
    $oct = 010;
    $hex = 0x10;

    echo "$bin<br>";
    echo "$dec<br>";
    echo "$oct<br>";
    echo "$hex<br>";

//składnia heredoc <<<nazwaeytkiety ... (brak bialych znakow)nazwaetykiety;
    $name = 'Anna';
    $surname = 'Nowak';
    $text = <<<LABEL
    Heredoc<br>
    Imię: $name,
    Nazwisko: $surname<hr>
LABEL;

    echo $text;

    echo <<<'etykieta'
    Heredoc2<br>
    Imię: $name,
    Nazwisko: $surname<hr>
etykieta;

  $city = 'Poznań';
  echo "Nazwa zmiennej: \$city, wartość $city";

  
    ?>
  </body>
</html>
