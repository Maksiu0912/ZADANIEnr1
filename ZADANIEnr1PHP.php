<?php

// 1. SUMA
function SUMA($a, $b)
{
    $suma = $a + $b;
    echo $suma;
}


// 2. PODSTAWY
function PODSTAWY($a, $b)
{
    $roznica = $a - $b;
    $iloczyn = $a * $b;

    echo "Różnica: " . $roznica . "<br>";
    echo "Iloczyn: " . $iloczyn . "<br>";

    if ($b != 0)
    {
        $iloraz = $a / $b;
        echo "Iloraz: " . $iloraz;
    }
    else
    {
        echo "Nie można dzielić przez zero!";
    }
}


// 3. KALKULATOR
function KALKULATOR($a, $b, $dzialanie)
{
    if ($dzialanie == "suma")
    {
        $wynik = $a + $b;
    }
    else if ($dzialanie == "roznica")
    {
        $wynik = $a - $b;
    }
    else if ($dzialanie == "iloczyn")
    {
        $wynik = $a * $b;
    }
    else if ($dzialanie == "iloraz")
    {
        if ($b != 0)
        {
            $wynik = $a / $b;
        }
        else
        {
            $wynik = "Nie można dzielić przez zero!";
        }
    }
    else
    {
        $wynik = "Niepoprawne działanie";
    }

    echo '<div id="wynik">' . $wynik . '</div>';
}


// 4. MAKS
function MAKS($a, $b, $c)
{
    $maks = $a;

    if ($b > $maks)
    {
        $maks = $b;
    }

    if ($c > $maks)
    {
        $maks = $c;
    }

    echo "Największa liczba: " . $maks;
}


// 5. WZROST
function WZROST($wzrost)
{
    if ($wzrost < 150)
    {
        echo "Niski";
    }
    else if ($wzrost > 180)
    {
        echo "Wysoki";
    }
    else
    {
        echo "Średni";
    }
}


// 6. BMI
function BMI($wzrost, $waga)
{
    $metry = $wzrost / 100;

    $bmi = $waga / ($metry * $metry);

    if ($bmi < 18.5)
    {
        $komentarz = "za mało!";
    }
    else if ($bmi > 25)
    {
        $komentarz = "za dużo!";
    }
    else
    {
        $komentarz = "OK!";
    }

    echo '<div id="wynik">';
    echo "BMI: " . $bmi . "<br>";
    echo $komentarz;
    echo '</div>';
}


// 7. STARSZY
function STARSZY($data1, $data2)
{
    $czas1 = strtotime($data1);
    $czas2 = strtotime($data2);

    if ($czas1 < $czas2)
    {
        echo "Osoba 1 jest starsza";
    }
    else if ($czas2 < $czas1)
    {
        echo "Osoba 2 jest starsza";
    }
    else
    {
        echo "Osoby są w tym samym wieku";
    }
}


// 8. PRZESTEPNY
function PRZESTEPNY($rok)
{
    if ($rok % 400 == 0)
    {
        echo "Rok jest przestępny";
    }
    else if ($rok % 100 == 0)
    {
        echo "Rok nie jest przestępny";
    }
    else if ($rok % 4 == 0)
    {
        echo "Rok jest przestępny";
    }
    else
    {
        echo "Rok nie jest przestępny";
    }
}


// 9. SILA
function SILA($haslo)
{
    $dlugosc = strlen($haslo);

    $cyfra = false;
    $duza = false;
    $mala = false;
    $specjalny = false;

    for ($i = 0; $i < $dlugosc; $i++)
    {
        $znak = $haslo[$i];

        if ($znak >= "0" && $znak <= "9")
        {
            $cyfra = true;
        }
        else if ($znak >= "A" && $znak <= "Z")
        {
            $duza = true;
        }
        else if ($znak >= "a" && $znak <= "z")
        {
            $mala = true;
        }
        else
        {
            $specjalny = true;
        }
    }

    if ($cyfra == false)
    {
        echo "Hasło słabe";
    }
    else if ($duza == false)
    {
        echo "Hasło słabe";
    }
    else if ($mala == false)
    {
        echo "Hasło słabe";
    }
    else if ($specjalny == false)
    {
        echo "Hasło słabe";
    }
    else if ($dlugosc <= 4)
    {
        echo "Hasło słabe";
    }
    else if ($dlugosc < 8)
    {
        echo "Hasło średnie";
    }
    else
    {
        echo "Hasło mocne";
    }
}


// 10. TROJKAT
function TROJKAT($a, $b, $c)
{
    if ($a <= 0 || $b <= 0 || $c <= 0)
    {
        echo "Nie można utworzyć trójkąta";
    }
    else if ($a + $b <= $c)
    {
        echo "Nie można utworzyć trójkąta";
    }
    else if ($a + $c <= $b)
    {
        echo "Nie można utworzyć trójkąta";
    }
    else if ($b + $c <= $a)
    {
        echo "Nie można utworzyć trójkąta";
    }
    else
    {
        echo "Można utworzyć trójkąt";
    }
}


// 11. SZYFR
function SZYFR($tekst)
{
    $wynik = "";

    for ($i = 0; $i < strlen($tekst); $i++)
    {
        $litera = $tekst[$i];

        if ($litera == "y")
        {
            $nowaLitera = "a";
        }
        else if ($litera == "z")
        {
            $nowaLitera = "b";
        }
        else if ($litera == "Y")
        {
            $nowaLitera = "A";
        }
        else if ($litera == "Z")
        {
            $nowaLitera = "B";
        }
        else if (
            ($litera >= "a" && $litera <= "x") ||
            ($litera >= "A" && $litera <= "X")
        )
        {
            $kod = ord($litera);
            $kod = $kod + 2;
            $nowaLitera = chr($kod);
        }
        else
        {
            $nowaLitera = $litera;
        }

        $wynik = $wynik . $nowaLitera;
    }

    echo $wynik;
}

?>