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