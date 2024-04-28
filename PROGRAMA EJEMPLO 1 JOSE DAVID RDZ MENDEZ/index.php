<!--Pagina HTML/PHP-->
<!--Esta sera una pagina la cual nos permita ingresar datos e iniciar sesion-->

<?php
  
   echo '<body style="background-color:whitesmoke

   ">';
?>
<html>
    <!--STYLE DE BARRA DONDE VA NUESTRO LOGOTIPO-->

<style>
  /* Estilos para la barra de color */
  .barra-color {
    background-color: black; /* Cambia #3498db por el color que desees */
    padding: 5px; /* Añade espacio alrededor del contenido dentro de la barra */
    color: white; /* Color del texto en la barra */
    text-align: center; /* Centra el texto horizontalmente */
    
  }
</style>
  <!--FIN LINEA DE LOGO-->


  <!--STYLE DE TARJETAS-->
  <style>
  .contenedor {
    display: flex;
    justify-content: space-around; /* Distribuye las tarjetas horizontalmente */
    align-items: center; /* Centra verticalmente las tarjetas */
  }
  .tarjeta {
    width: 500px;
    border: 2px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .tarjeta2 {
    width: 200px;
    border: 2px solid #ccc;
    border-radius: 0px;
    overflow: hidden;
    margin: 0px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: absolute;
  left: 10px; /* Cambia estas coordenadas según tus necesidades */
  top: 10px; /* Cambia estas coordenadas según tus necesidades */
  background-color: black; /* Color de fondo de la tarjeta */

  }

  .imagen {
    width: 90%;
    height: 350px;
  }
  .contenido {
    padding: 20px;
    text-align: center;
  }
</style>
  <!--FIN  STYLE DE TARJETAS-->

        <link rel="stylesheet" href="styles.css">

<head>
<title>DIVINE BOUTIQUE</title>
</head>
<div class="barra-color">


<body>
  
<div class="contenedor">

<div class="tarjeta2">
 
<div class="container">
  <h2>USUARIO</h2>
  <div id="mostrarDatos"></div>
  <script src="script.js"></script>
<script>
  // Obtener el dato guardado del almacenamiento local
  var datoGuardado = localStorage.getItem("datoGuardado");
  
  // Mostrar el dato en la página
  document.getElementById("mostrarDatos").innerText = datoGuardado;
</script>
</div>
</div>
</div>

  <!--En este img src tenemos el logotipo de la empresa simulada a la cual se le esta realizando la pagina.-->
<center><img src="imagenescarrusel/divineboutique.jpg" alt=""></center>

 
<!--En este apartado se encuentra un video "promocional" lanzamientos de la boutique-->

</div>

<center><br><video width="1100" height="auto"controls>
<source src="imagenescarrusel/Vídeo promocional para marca de ropa. Lonely.mp4"autoplay, type="video/mp4"></center>

  <!--FIN VIDEO PROMOCIONAL-->


    <!--NUEVAMENTE UTIILIZAMOS LA BARRA CREADA ANTERIORMENTE DE COLOR NEGRO PARA HACER UNA SEPARACION Y COMIENZO DE SECCIONES
      DE VENTAS-->

  <br><br>
  <div class="barra-color">
  <h1>TENIS / SNEAKERS UNISEX</h1>
 
</div>
  
  <!--COMIENZO TARJETA 1-->
  <div class="contenedor">

  <div class="tarjeta">
    <img class="imagen" src="imagenescarrusel/AIRFORCE1.jpg" alt="AIRFORCE1.jpg">
    <div class="contenido">
      <h2>Nike Men's Air Force 1 <br>High '07 Basketball Shoe</h2>
      <p>$2,879</p>
      <button onclick="window.location.href='paginaairforce1.html'">COMPRAR</button>

    </div>
  </div>
  <!--FIN TARJETA 1-->

  <!-- Tarjeta 2 -->
  <div class="tarjeta">
    <img class="imagen" src="imagenescarrusel/AIRFORCE1(2).jpg" alt="Imagen 1">
    <div class="contenido">
      <h2>Nike - Tenis de baloncesto.<br> Naranja/Multi</h2>
      <p>$3,299</p>
      <button onclick="window.location.href='paginaairforce2.html'">COMPRAR</button>

    </div>
  </div>
  <!--FIN TARJETA 2-->

  <!-- Tarjeta 3 -->
  <div class="tarjeta">
    <img class="imagen" src="imagenescarrusel/AIRFORCE(3).jpg" alt="Imagen 2">
    <div class="contenido">
      <h2>Nike Air Force 1 '07 - Tenis de baloncesto<br> Sail/Sail-dk Smoke Grey</h2>
      <p>$2,289</p>
      <button onclick="window.location.href='paginaairforce3.html'">COMPRAR</button>

    </div>
  </div>
</div>
  <!--FIN TARJETA 3-->
  <br>

   <!--COMIENZO TARJETA 4-->
   <div class="contenedor">

<div class="tarjeta">
  <img class="imagen" src="imagenescarrusel/converse.jpg" alt="CONVERSE">
  <div class="contenido">
    <h2>Converse Chuck Taylor  <br>All Star Hi - Zapatillas Deportivas</h2>
    <p>$1,279</p>
    <button onclick="window.location.href='tenis4.html'">COMPRAR</button>

  </div>
</div>
<!--FIN TARJETA 4-->

<!-- Tarjeta 5 -->
<div class="tarjeta">
  <img class="imagen" src="imagenescarrusel/adidasstan.jpg" alt="Imagen 1">
  <div class="contenido">
    <h2>Adidas ORIGINALS Stan Smith <br> Zapatos Casuales Unisex</h2>
    <p>$2,199</p>
    <button onclick="window.location.href='tenis5.html'">COMPRAR</button>

  </div>
</div>
<!--FIN TARJETA 5-->

<!-- Tarjeta 6 -->
<div class="tarjeta">
  <img class="imagen" src="imagenescarrusel/jordans.jpg" alt="Imagen 2">
  <div class="contenido">
    <h2>Air Jordan IV <br> (4) Retro (Fiba)</h2>
    <p>$1,989</p>
    <button onclick="window.location.href='tenis6.html'">COMPRAR</button>
<!--FIN TARJETA 6-->

  </div>
</div>
</div>
<div class="barra-color">
        
      
      
      <p style="font-family: Arial, sans-serif; font-size: 12px;"><br><br><br><br><br><br><br>CREADOR: JOSE DAVID RODRIGUEZ MENDEZ<br>FECHA DE CREACION: 28/04/24<br>REPRESENTACION DE TIENDA DE MODA (SNEKEARS, TENIS, ETC...)
</div>
  
</body>
</html>


 