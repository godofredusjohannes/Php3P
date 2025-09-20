<?php
//Składowe klasy - właściwości i metody 6.88 /244
//--------------------------------------------

class osoba
{
    public $id, $nazwisko, $imie, $wiek;
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko=$arg1;
    }
    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
    function wpiszImie($arg2)
    {
        $this->imie=$arg2;
    }
    function pobierzImie()
    {
        return $this ->imie;
    }
    function wpiszId($arg3)
    {
        $this->id=$arg3;
    }
    function pobierzId()
    {
        return $this->id;
    }
    function wpiszWiek($arg4)
    {
        $this->wiek=$arg4;
    }
    function pobierzWiek()
    {
        return $this->wiek;
    }
}

$osoba1 = new osoba();

$osoba1->wpiszId(3);
$osoba1->wpiszNazwisko("Kowalski");
$osoba1->wpiszImie("Piotr");
$osoba1->wpiszWiek(16);

echo "ID: " . $osoba1->pobierzId()."\n";
echo "Imie: " . $osoba1->pobierzImie()."\n";
echo "Nazwisko: " . $osoba1->pobierzNazwisko()."\n";
echo "Wiek: " . $osoba1->pobierzWiek()."\n";
