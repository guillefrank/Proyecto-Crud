<?php

    
    $status = session_status();
    if($status == PHP_SESSION_NONE){
        //There is no active session
        session_start();
    }else
    if($status == PHP_SESSION_DISABLED){
        //Sessions are not available
    }else
    if($status == PHP_SESSION_ACTIVE){
        //Destroy current and start new one
        session_destroy();
        session_start();
    }



  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pokedex</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="estaticos/css/style.css" />
  </head>

  <body>
    <div id="cabecera" class="bg-white text-white text-center">
      <h1 id="pokemonTitulo"><br> POKEDEXITA </h1></br>
    </div>

    <nav class="lista">
      
        <div clas="d-flex justify-content-between">
               
            <form class="d-flex " name="form">
              <a class="btn btn-warning" type="submit"><h5> BIENVENID@ <?=$_SESSION['user_id'];?> </h5></a>
              <input
                class="form-control"
                type="text"
                name="nombrePokemon"
                placeholder="Ingrese nombre o ID"
              />              
              <button class="btn btn-warning" type="submit" >Buscar</button>
              <a class="btn btn-warning" type="submit" href="partials/logout.php">Cerrar Sesion</a>
              
              
            </form>
        </div>
    </nav>

    <div class="container-fluid" id="ver">
      <div class="img"></div>
      <div class="row">
        <div class="col">
          <div class="img-responsive carta">
            
            <h2 id="TitPok"><u>POKEMON</u></h2>
            <h2 id="nombre">Onix</h2>
            <div class="fakeimg">
              <img
                id="pokefoto"
                class="img-responsive fit-image  pokefoto"
                alt=""
                src="https://img.pokemondb.net/sprites/black-white/anim/normal/onix.gif"
              />
            </div>
            <div id="ObtenerId"><h4 id="h4">ID: 151</h4></div>
            <div id="TitHab">
              <h2><u>HABILIDADES</u></h2>
            </div>
            
            <h4>
              <ul id="habilidades">
                bind
                <li></li>
                slam
                <li></li>
                headbutt
                <li></li>
                tackle
                <li></li>
              </ul>
            </h4>
            <button id="anterior" class="btn btn-success ant" type="submit">Anterior Pokemon</button>
            <button id="siguiente" class="btn btn-success sig" type="submit">Siguiente Pokemon</button>
          </div>
          
          <div id="pokemonId"></div>
        </div>
      </div>
    </div>

    <footer class="w3-container w3-padding-64 w3-center w3-opacity  w3-xlarge">
        <h7>Ⓒ 2022 - Proyecto Login. Desarrollo web by New Team Delevopers.</h7>
    </footer>  
  </body>
  <script src="pruebaApi.js"></script>
</html>
