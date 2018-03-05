<?php


// Personenauto's
$auto1 = new PersonenAuto('groen','Ford',40,true,4,5,5);
$auto2 = new PersonenAuto('rood','Ferrari',500,true,4,2,2);
$autos = [$auto1, $auto2];

// Busjes
$busje1 = new Busje('blauw','Mercedes', 60, false, 4, 4, 3);
$busje2 = new Busje('zilver','Mercedes', 60, false, 4, 4, 3);
$busjes = [$busje1, $busje2];

// Fietsen
$fiets1 = new Fiets('zwart','Gazelle', 15, true, 2, 'racefiets', '160cm');
$fiets2 = new Fiets('geel','Gazelle', 10, true, 2, 'damesfiets', '150cm');
$fietsen = [$fiets1, $fiets2];

// Motoren
$motor1 = new Motor('zwart','Honda', 40, true, 2, 'crossmotor', '250cc');
$motor2 = new Motor('zwart','Harley Davidson', 100, true, 2, 'tourmotor', '1000cc');
$motoren = [$motor1, $motor2];

abstract class Voertuig {
  var $kleur;
  var $merk;
  var $prijs;
  var $beschikbaar;
  var $aantalWielen;

  function __construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen){
    $this->kleur = $kleur;
    $this->merk = $merk;
    $this->prijs = $prijs;
    $this->beschikbaar = $beschikbaar;
    $this->aantalWielen = $aantalWielen;
  }

  function verf($kleur){
    $this->kleur - $kleur;
  }

  function isBeschikbaar($bool){
    $this->beschikbaar = $bool;
  }

}

class PersonenAuto extends Voertuig {
  var $deuren;
  var $stoelen;

  function __construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen, $deuren, $stoelen){
    parent::__construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen);
    $this->deuren = $deuren;
    $this->stoelen = $stoelen;
  }

}

class Busje extends Voertuig {
  var $deuren;
  var $stoelen;

  function __construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen, $deuren, $stoelen){
    parent::__construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen);
    $this->deuren = $deuren;
    $this->stoelen = $stoelen;
  }
}

class Fiets extends Voertuig {
  var $type;
  var $hoogte;

  function __construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen, $type, $hoogte){
    parent::__construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen);
    $this->type = $type;
    $this->hoogte = $hoogte;
  }
}

class Motor extends Voertuig {
  var $type;
  var $motorinhoud;

  function __construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen, $type, $motorinhoud){
    parent::__construct($kleur, $merk, $prijs, $beschikbaar, $aantalWielen);
    $this->type = $type;
    $this->motorinhoud = $motorinhoud;
  }

}
