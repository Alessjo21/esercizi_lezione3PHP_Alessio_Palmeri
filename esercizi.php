<?php

class shop {

    public $marchio;
    public $modello;
    public $fotocamera;
    public static $counter = 0;

    public function __construct ($_marchio, $_modello, $_fotocamera){
        $this->marchio = $_marchio;
        $this->modello = $_modello;
        $this->fotocamera = $_fotocamera;
        self::$counter;
    }
}

class Smartphone extends shop {
    public $prezzo;
    public static $counter = 0;

    public function __construct($_marchio, $_modello, $_fotocamera, $_prezzo){
        $this->prezzo = $_prezzo;
        parent::__construct($_marchio, $_modello, $_fotocamera);
        self::$counter++;
    }

    public function vendita(){
        echo "Questo Smartphone è".$this->marchio.", modello ".$this->modello.", ha una fotocamere con ".$this->fotocamera." px ed ha il costo di ".$this->prezzo." \n ";
        echo "Smrtphone venduti fino ad ora : ".self::$counter."  \n ";
    }

    public function cover(){
        if (self::$counter % 2 == 0) {
            echo "Il tuo smartphone è protetto dalla cover \n";
        } else {
            echo "il tuo smartphone non è protetto dalla cover \n";
        }
    }
}

$smartphone1 = new Smartphone("apple","iphone 13", 100, 1399);
$smartphone1->vendita();
$smartphone1->cover();
$smartphone2 = new Smartphone("Samsung","FOLD", 100, 1400);
$smartphone2->vendita();
$smartphone2->cover();
$smartphone3 = new Smartphone("Huawei","PRO", 100, 800);
$smartphone3->vendita();
$smartphone3->cover();
$smartphone4 = new Smartphone("LG","KUKI", 100, 950);
$smartphone4->vendita();
$smartphone4->cover();
$smartphone5 = new Smartphone("Motorola","2000", 100, 999);
$smartphone5->vendita();
$smartphone5->cover();
$smartphone6 = new Smartphone("Samsung","Galaxy 12", 100, 1200);
$smartphone6->vendita();
$smartphone6->cover();



?>