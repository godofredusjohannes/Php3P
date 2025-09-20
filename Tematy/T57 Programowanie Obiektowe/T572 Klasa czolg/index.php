<?php
class czolg
{
    public $nazwa, $kolor, $il_amunicji;

    function wpiszNazwa($n)
    {
        $this->nazwa=$n;
    }

    function wpiszKolor($k)
    {
        $this->kolor=$k;
    }

    function wpiszAmunicja($amunicja)
    {
        $this->il_amunicji=$amunicja;
    }
    function info()
    {
        echo "\nInformacje o czołgu: \n"."Nazwa: ".$this->nazwa."\nKolor: ".$this->kolor."\nIlość amunicji: ".$this->il_amunicji."\n";
    }

    function pomaluj($nowyKolor){
        $this->kolor=$nowyKolor;
        echo "Pomalowano ".$this->nazwa." na kolor: ".$this->kolor."\n";
    }

    function zaladuj($plusAmunicja){
        if($plusAmunicja > 0){
            $this->il_amunicji+=$plusAmunicja;
            echo "Załadowano ".$plusAmunicja." amunicji\n"."Ilość amunicji: ".$this->il_amunicji."\n";
        }
        else{
            echo "Nie udało sie załadować amunicji.\n";
        }
    }

    function strzelaj(){
        if($this->il_amunicji > 0){
            echo "Wystrzelono pocisk!\n";
            $this->il_amunicji-=1;
            echo "Pozostało: ".$this->il_amunicji." naboi.\n";
        }
        else{
            echo "Nie masz amunicji.\n";
        }
    }
}

$bobek = new czolg();

$bobek->wpiszNazwa("Bobek");
$bobek->wpiszKolor("Czerwony");
$bobek->wpiszAmunicja(1);

$bobek->info();

$bobek->pomaluj("Rurzowy");

$bobek->zaladuj(-7);

$bobek->zaladuj(1);

$bobek->strzelaj();

$bobek->strzelaj();

$bobek->strzelaj();