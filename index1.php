<html>

<?php
include('pokemonClasse.php');

$pokemon1 = new pokemon();
$pokemon1->novo_pokemon('Pikachu','<label id="eletrico">Eletrico</label>','15','F','0.4m');

$pokemon2 = new pokemon();
$pokemon2->novo_pokemon('Charmander','<label id="Fogo">Fogo</label>','10','M','0.6m');

$pokemon3 = new pokemon();
$pokemon3->novo_pokemon('Squirtle','<label id="Agua">Agua</label>','11','M','0.5m');

$pokemon4 = new pokemon();
$pokemon4->novo_pokemon('Bulbasaur','<label id="Grama">Grama</label>','8','F','0.7m');

$pokemon5 = new pokemon();
$pokemon5->novo_pokemon('Totodile','<label id="Agua">Agua</label>','12','F','0.6m');

$pokemon6 = new pokemon();
$pokemon6->novo_pokemon('typhlosion','<label id="Fogo">Fogo</label>','38','F','1.7m');

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
          #dragao{background: #0000a0}
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
    <a class="nav-link" href="index.php"><</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pag1.php">></a>
  </li>
</ul>
<!-- imprimir pokemons na tela -->
<div class="container text-center">
  <div class="row align-items-start">
            <div class="card" id="card1" style="width: 18rem;">
            <img src="pikachu.png" class="card-img-top" alt="..." >
            <div class="card-body">
                <p class="card-text"><?php $pokemon1->imprimir_Pokemon()?></p>
                <style>
                </style>
            </div>
            </div>

            <div class="card" id="card2" style="width: 18rem;">
            <img src="charmander.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon2->imprimir_Pokemon()?></p>
            </div>
            </div>

            <div class="card"  id="card3"style="width: 18rem;">
            <img src="squirtle.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon3->imprimir_Pokemon()?></p>
            </div>
            </div>
  </div>
</div>
<div class="container text-center">
  <div class="row align-items-start">
            <div class="card" id="card1" style="width: 18rem;">
            <img src="bulbasaur.png" class="card-img-top" alt="..." >
            <div class="card-body">
                <p class="card-text"><?php $pokemon4->imprimir_Pokemon()?></p>
                <style>
                </style>
            </div>
            </div>

            <div class="card" id="card2" style="width: 18rem;">
            <img src="totodile.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon5->imprimir_Pokemon()?></p>
            </div>
            </div>

            <div class="card"  id="card3"style="width: 18rem;">
            <img src="typhlosion.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php $pokemon6->imprimir_Pokemon()?></p>
            </div>
            </div>
  </div>
</div>


</body>
</html>