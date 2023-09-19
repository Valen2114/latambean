<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acerca de nosotros</title>
  <link rel="stylesheet" href="../nosotros/main.css" />
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
  <div class="banner">
    <div class="capa"></div>
    <div class="info">
      <h1>¿Quienes somos?</h1>
      <p>Mi Plaza Autoservicio, te hace la vida más fácil</p>
      <a href="#somos">Nosotros</a>
    </div>
  </div>
  <div class="firstAnimation">
    <div class="secondAnimation">
      <div class="logo-container"></div>
    </div>
  </div>
    <div class="card-quienes" id="somos">
      <p class="cardsom-title"><b>¿Quienes somos?</b></p>
      <p class="cardsom-body">
        Somos un Supermercado en el cual nos enorgullece ofrecer a nuestros clientes una experiencia de compra
        excepcional, con productos frescos y de alta calidad a precios competitivos. Nuestra historia comenzó hace más
        de un año cuando un grupo de amigos decidieron abrir una tienda de comestibles en la comunidad local. Desde
        entonces, hemos crecido y evolucionado para convertirnos en uno de los supermercados más populares de la zona.
      </p>
      <a href="#ubicacion"><button class="Btn"></button></a>
    </div>
   
  <aside>
    <div class="card">
      <div class="card__content">
        <p class="cards__title">Misión</p>
        <p class="card__description">
          Nuestra misión es ofrecer a nuestros clientes una experiencia de compra conveniente y accesible,
          proporcionando productos frescos y de alta calidad a precios competitivos, así como un servicio excepcional
          para asegurar su satisfacción y fidelidad.
          Además de proporcionar productos de alimentación básicos, un supermercado corto también podría tener una
          misión enfocada en ofrecer productos orgánicos, locales o específicos para dietas especiales, como veganos,
          vegetarianos o sin gluten.
        </p>
      </div>
    </div>
    <div class="cards">
      <div class="cards__content">
        <p class="cards__title">Visión</p>
        <p class="cards__description">
          Ser líderes en la industria de supermercados al ofrecer una experiencia de compra excepcionalmente conveniente
          y personalizada que inspire a nuestros clientes a volver una y otra vez. Nos esforzamos por proporcionar una
          amplia gama de productos frescos y de alta calidad a precios competitivos, mientras nos enfocamos en la
          sostenibilidad y en apoyar a los productores locales. A través de la innovación constante y un equipo
          altamente motivado, buscamos ser la elección número uno de nuestros clientes en todo momento.
        </p>
      </div>
    </div>
  </aside>
  <div class="ubicacion" id="ubicacion">
  <h1>Donde Encontrarnos</h1>
  </div>
<div class="mapa mapa-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.14657365297396!2d-75.89373716153203!3d2.3908583314610987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ad2ac036e74d3%3A0x58ab2ab5055378ec!2sSENA%20CDATH!5e0!3m2!1ses-419!2sco!4v1691868926223!5m2!1ses-419!2sco" width="100%" height="750" style="border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<body>
 <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../imagenes/logo rojo.png" alt="">
                </div>
                <div class="terms">
                  <p>Plaza autoservicios S.A.S NIT 123 321 1234.
                    <p>Direccion:Oficina central, Calle 8 # 12a-44, Bogotá</p>
                    <p>Lunes a Viernes de 7:00 am a 4:45 pm</p>
                    plaza-autoservicios@gmail.com
                    </p>
                </div>
            </div>
            <div class="box__footer">
              <h2>Atención al Cliente</h2>
              <a href="#">Peticiones,Quejas y Reclamos</a>
              <a href="#">Preguntas frecuentes</a>
              <a href="#">Oportunidades de empleo</a>
              <a href="#">Tendencia</a>
          </div>

          <div class="box__footer">
              <h2>Compañia</h2>
              <a href="../nosotros/nosotros.html">Acerca de nosotros</a>
              <a href="#">Politica & privacidad</a>
              <a href="#">Procesos</a>
              <a href="#">Servicios</a>              
          </div>

            <div class="box__footer">
              <h2>Redes Sociales</h2>
              <a href="https://www.facebook.com/profile.php?id=61550341884052&mibextid=9R9pXO"> <i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="https://wa.link/2cfkyi"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
              <a href="https://www.youtube.com/channel/UCLSbOY64vhOITo-qg9yogcw"><i class="fab fa-youtube"></i> Youtube</a>
              <a href="https://www.instagram.com/miplaza_autoservicio/"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2021 </p>
        </div>
    </footer>   
</body>

  <script src="https://kit.fontawesome.com/72ac7502a0.js" crossorigin="anonymous"></script>
</body>
</html>