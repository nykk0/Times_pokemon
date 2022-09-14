<html>

<?php
include('pokemonClasse.php');

$pokemon1 = new pokemon();
$pokemon1->novo_pokemon('Noivern','<label id="dragao">Dragao</label> ,<label id="voador"> Voador</label>','40','M','1.5m');

$pokemon2 = new pokemon();
$pokemon2->novo_pokemon('emolga','<label id="voador"> Voador </label>, <label id="eletrico"> Eletrico</label>','22','F','0.4m');

$pokemon3 = new pokemon();
$pokemon3->novo_pokemon('Escavalier','<label id="metal">Metal </label>, <label id="inseto"> Inseto</label>','32','M','1.0m');

$pokemon4 = new pokemon();
$pokemon4->novo_pokemon('Greninja','<label id="agua">Agua</label>','40','M','1.5m');

$pokemon5 = new pokemon();
$pokemon5->novo_pokemon('Rowlet','<label id="grama">Grama</label>','8','f','0.3m');

$pokemon6 = new pokemon();
$pokemon6->novo_pokemon('Mr Rime','<label id="gelo">Gelo</label> , <label id="psiquico"> Psiquico</label>','32','M','1.5m');


?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
          #eletrico{background: #ffff40}
          #Fogo{background: #ff4040}
          #Grama{background: #7dff40}
          #Agua{background: #19e5e6}
          #voador{background: #a6dced}
          #dragao{background: #0066b2}
          #psiquico{background: #FF69B4}
          #metal{background: #72A0C1}
          #inseto{background: #568203}
          #gelo{background: #89CFF0}
        </style>
    </head>

<body>
  <!-- barra de navegacao -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index1.php"><</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pag2.php">></a>
  </li>
</ul>
<!-- imprimir pokemons na tela -->
<div class="container text-center">
  <div class="row align-items-start">
            <div class="card" id="card1" style="width: 18rem;">
            <img src="noivern.png" class="card-img-top" alt="..." >
            <div class="card-body">
                <p class="card-text"><?php $pokemon1->imprimir_Pokemon()?></p>
                <style>
                </style>
            </div>
            </div>

            <div class="card" id="card2" style="width: 18rem;">
            <img src="emolga.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon2->imprimir_Pokemon()?></p>
            </div>
            </div>

            <div class="card"  id="card3"style="width: 18rem;">
            <img src="escavalier.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon3->imprimir_Pokemon()?></p>
            </div>
            </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
            <div class="card" id="card1" style="width: 18rem;">
            <img src="greninja.png" class="card-img-top" alt="..." >
            <div class="card-body">
                <p class="card-text"><?php $pokemon4->imprimir_Pokemon()?></p>
                <style>
                </style>
            </div>
            </div>

            <div class="card" id="card2" style="width: 18rem;">
            <img src="rowlet.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon5->imprimir_Pokemon()?></p>
            </div>
            </div>

            <div class="card"  id="card3"style="width: 18rem;">
            <img src="rime.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon6->imprimir_Pokemon()?></p>
            </div>
            </div>
  </div>
</div>


</body>
</html>