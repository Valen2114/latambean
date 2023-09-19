<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="../index/css/header.css">
    <script src="https://kit.fontawesome.com/96f9a4100d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <header>
          <p><i class="fa-sharp fa-solid fa-phone"></i></p>
          <p><i class="fa-solid fa-user"></i></p>
          <p><i class="fa-solid fa-message"></i></p>
        </header>
        <header class="navegacion">
        <p><i class="fa-solid fa-bars"></i></p>
        <p>
          <a href="../index/index.php">
            <img src="../imagenes/logo blanco index.png" alt=""/>
          </a>
        </p>
        <!-- buscador -->
        <div class="search">
              <div id="search-bar">
                  <form action="../buscador/buscar.php" method="get" style="display: flex;">
                    <input type="text" name="searchInput" placeholder="¿Que buscas hoy?">
                    <!-- <input type="submit"> -->
                    <button class="buscar-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License -  https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                  </svg>
                        <p class="text">Buscar</p>
                      </button>
                  </form>
              </div>
        </div>
        <!-- Carrito -->
        
        <p>
          <p class="carro" onclick="hacerVisibleCarrito()"><i class="fa-solid fa-cart-shopping carrito-compras"></i></p>
          <li class="li-1" onclick="hacerVisibleCarrito()"><a href="#">Mi carrito</a></li>
        </p>
        <!-- Cuenta -->
        <?php
          session_start();
          if(isset($_SESSION['usuario'])){
            if($_SESSION['usuario'] == "Administrador" ){
              echo "
                <p class='cuenta'>
                  <a href='../panel-admin/index.php'>
                  <i class='fa-solid fa-circle-user'></i></a>
                </p>
                <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../panel-admin/index.php'>".$_SESSION['usuario']."</a></li>
              ";  
            }else{
              echo "
                <p class='cuenta'>
                  <a href='../interfazUsuario/index.php'>
                  <i class='fa-solid fa-circle-user'></i></a>
                </p>
                <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../interfazUsuario/index.php'>".$_SESSION['usuario']."</a></li>
              ";
            }
          }else{
            echo "
              <p class='cuenta'>
                <a href='../login/logica/view/index.php'>
                <i class='fa-solid fa-circle-user'></i></a>
              </p>
              <li class='li-2'><a href='../login/logica/view/index.php'>Mi cuenta</a></li>
            ";
          }
        ?>
        <!-- modo entrega -->
        <div>
          <p class="modoentrega">
            <i class="fa-sharp fa-solid fa-car-side"></i
            ><a href="#">Modo de entrega</a>
          </p>
          <p class="quienessomos">
            <a href="../nosotros/nosotros.php"
              ><i class="fa-solid fa-store"></i> ¿Quienes somos?</a
            >
          </p>
        </div>
        </header>
        <div id="menu">
        <ul>
          <p><i class="fa-sharp fa-solid fa-xmark"></i></p>
          <li><a href="../productos/productos.php"> Resfrigerados</a></li>
          <li><a href="../productos/productos.php"> Snacks y pasabocas</a></li>
          <li><a href="../productos/productos.php"> Cuidado personal</a></li>
          <li><a href="../productos/productos.php"> Aseo del hogar</a></li>
          <li><a href="../productos/productos.php"> Granos</a></li>
          <li><a href="../productos/productos.php"> Despensa</a></li>
          <li><a href="../productos/productos.php"> Bebidas</a></li>
        </ul>
        </div>
    </div>
</body>
</html>
