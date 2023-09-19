<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <script src="../index/helper.js"></script>
  <script src="../index/main.js"></script>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <p><i class="fa-sharp fa-solid fa-phone"></i></p>
    <p><i class="fa-solid fa-user"></i></p>
    <p><i class="fa-solid fa-message"></i></p>
  </header>
  <header class="navegacion">
    <p><i class="fa-solid fa-bars"></i></p>
    <p>
      <a href="../index/index.php">
        <img src="../imagenes/logo blanco index.png" alt="" />
      </a>
    </p>
    <!-- buscador -->
    <div class="search">
      <div id="search-bar">
        <form action="../buscador/buscar.php" method="get" style="display: flex;">
          <input type="text" name="searchInput" placeholder="¿Que buscas hoy?">
          <!-- <input type="submit"> -->
          <button class="buscar-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License -  https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
              <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
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
    if (isset($_SESSION['usuario'])) {
      if ($_SESSION['usuario'] == "Administrador") {
        echo "
                <p class='cuenta'>
                  <a href='../panel-admin/index.php'>
                  <i class='fa-solid fa-circle-user'></i></a>
                </p>
                <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../panel-admin/index.php'>" . $_SESSION['usuario'] . "</a></li>
              ";
      } else {
        echo "
                <p class='cuenta'>
                  <a href='../interfazUsuario/index.php'>
                  <i class='fa-solid fa-circle-user'></i></a>
                </p>
                <li class='li-2' style=' text-align: justify; padding:0px 12px;' ><a href='../interfazUsuario/index.php'>" . $_SESSION['usuario'] . "</a></li>
              ";
      }
    } else {
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
        <i class="fa-sharp fa-solid fa-car-side"></i><a href="#">Modo de entrega</a>
      </p>
      <p class="quienessomos">
        <a href="../nosotros/nosotros.php"><i class="fa-solid fa-store"></i> ¿Quienes somos?</a>
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
    <?php
require_once "../panel-admin/includes/db.php";
$productoBuscado = $_GET["searchInput"];
if (!$productoBuscado == "") {
  $consulta = mysqli_query($conexion, "SELECT * FROM inventario WHERE producto LIKE '%$productoBuscado%' ");
  $traerProducto = mysqli_fetch_All($consulta, MYSQLI_ASSOC);
  if (count($traerProducto) > 0) {
    ?>
    <div class="busqueda">
      <?php
      foreach ($traerProducto as $t) {
      ?>
        <div>
          <div class="item">
            <span class="titulo-item"> <?php echo $t['producto'] ?> </span>
            <div class="imagenCate">
              <img src="<?= "../panel-admin/img/productos/" . $t["imagen"] ?>" alt="" class="img-item">
            </div>
            <span class="precio-item">$<?php echo number_format($t['venta'], 0, "'", ".") ?></span>
            <p><?php echo $t['minimo'] ?></p>
            <button class="boton-item">
              <svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
              </svg>
              Agregar
            </button>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <?php
  } else {
    ?>
    <!-- Alerta HTML personalizada cuando no se encuentran productos -->
    <div class="alert alert-danger">
      No se encontraron productos para "<strong><?php echo $productoBuscado; ?></strong>".
    </div>
    <?php
  }
} else {
  echo "Ingrese el nombre del producto";
}
?>


    </div>

  
<!-- Carrito de Compras -->
  <div class="carrito" id="carrito">
    <div class="header-carrito">
      <i class="fa-solid fa-xmark" id="cerrarCarrito" onclick="ocultarCarrito()"></i>
      <h2>Carrito de compras</h2>
    </div>

    <div class="carrito-items">
    </div>
    <div class="carrito-total">
      <div class="fila">
        <strong>Total</strong>
        <span class="carrito-precio-total">
          $00,00
        </span>
      </div>
      <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
    </div>
  </div>

</body>
</html>