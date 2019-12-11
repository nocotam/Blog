<?php
namespace App;



class Stronka
{
    public function number(int $number): int
    {
        $number = random_int(0, 1000000);


        echo("twoj szczescliwy numer to: $number");

    }
}
function oblicz()
{
    $liczba1 = $_POST [liczba1];
    $liczba2 = $_POST [liczba2];

    $wynik1 = $liczba1 + $liczba2;
    $wynik2 = $liczba1 - $liczba2;
    $wynik3 = $liczba1 * $liczba2;
    $wynik4 = $liczba1 / $liczba2;

    echo("dodawanie  $wynik1");
    echo("mnozenie  $wynik3");
    echo("odejmowanie $wynik2");


    if ($liczba2 == 0) {
        echo('Nie mozna dzielic przez 0');
    } else {
        echo("dzielenie $wynik4");

    }
    die;

}
?>

<!doctype html>
<head>
    <title> Mariuszowa strona</title>
    <style>
     body {
         background-color: Green;
     }

    </style>

</head>
<body>

<h1> Kalkulatorex </h1>
<form method="Post">
<input type="text" name="liczba1"/> <br>
<input type="text" name="liczba2"/> <br>
<input type="submit" value="oblicz" onclick="oblicz()"/>

</form>


</body>
</html>
