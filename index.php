<?php

include('./models/Voertuig.php');

 ?>


<!DOCTYPE html>

<head>


</head>
<body>

<h2>Auto's</h2>
<table>
  <tr>
    <th>Kleur</th>
    <th>Merk</th>
    <th>Prijs</th>
    <th>Beschikbaar</th>
    <th>Wielen</th>
    <th>Deuren</th>
    <th>Stoelen</th>
  </tr>
<?php foreach ($autos as $auto): ?>
  <tr>
    <td><?= $auto->kleur ?></td>
    <td><?= $auto->merk ?></td>
    <td><?= $auto->prijs ?></td>
    <td><?= $auto->beschikbaar ? "Ja" : "Nee" ?></td>
    <td><?= $auto->aantalWielen ?></td>
    <td><?= $auto->deuren ?></td>
    <td><?= $auto->stoelen ?></td>
  </tr>
<?php endforeach ?>

</table>

<h2>Busjes</h2>
<table>
  <tr>
    <th>Kleur</th>
    <th>Merk</th>
    <th>Prijs</th>
    <th>Beschikbaar</th>
    <th>Wielen</th>
    <th>Deuren</th>
    <th>Stoelen</th>
  </tr>
<?php foreach ($busjes as $busje): ?>
  <tr>
    <td><?= $busje->kleur ?></td>
    <td><?= $busje->merk ?></td>
    <td><?= $busje->prijs ?></td>
    <td><?= $busje->beschikbaar ? "Ja" : "Nee" ?></td>
    <td><?= $busje->aantalWielen ?></td>
    <td><?= $busje->deuren ?></td>
    <td><?= $busje->stoelen ?></td>
  </tr>
<?php endforeach ?>

</table>

<h2>Fietsen</h2>
<table>
  <tr>
    <th>Kleur</th>
    <th>Merk</th>
    <th>Prijs</th>
    <th>Beschikbaar</th>
    <th>Wielen</th>
    <th>Type</th>
    <th>Hoogte</th>
  </tr>
<?php foreach ($fietsen as $fiets): ?>
  <tr>
    <td><?= $fiets->kleur ?></td>
    <td><?= $fiets->merk ?></td>
    <td><?= $fiets->prijs ?></td>
    <td><?= $fiets->beschikbaar ? "Ja" : "Nee" ?></td>
    <td><?= $fiets->aantalWielen ?></td>
    <td><?= $fiets->type ?></td>
    <td><?= $fiets->hoogte ?></td>
  </tr>
<?php endforeach ?>

</table>

<h2>Motoren</h2>
<table>
  <tr>
    <th>Kleur</th>
    <th>Merk</th>
    <th>Prijs</th>
    <th>Beschikbaar</th>
    <th>Wielen</th>
    <th>Type</th>
    <th>Motorinhoud</th>
  </tr>
<?php foreach ($motoren as $motor): ?>
  <tr>
    <td><?= $motor->kleur ?></td>
    <td><?= $motor->merk ?></td>
    <td><?= $motor->prijs ?></td>
    <td><?= $motor->beschikbaar ? "Ja" : "Nee" ?></td>
    <td><?= $motor->aantalWielen ?></td>
    <td><?= $motor->type ?></td>
    <td><?= $motor->motorinhoud ?></td>
  </tr>
<?php endforeach ?>

</table>



</body>
<html>


</html>
