<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield("title")|DHAMAFI</title>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/css/jquery-ui.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <div class="top-menu">
      <div class="redes" >
        <a href="#">
          <img src="Img/2twitter.jpg" width="25" height="25" alt="buscar">
        </a>
        <a href="#">
          <img src="Img/3Face.png" width="25" height="25" alt="buscar">
        </a>
        <a href="#">
          <img src="Img/4Insta.jpg" width="25" height="25" alt="buscar">
        </a>
        <a href="#">
          <img src="Img/5pinterest.jpg" width="25" height="25" alt="buscar">
        </a>
      </div>
      <div class="buscar" >
        <input id="autocomplete" type="text" placeholder="Buscar">
      </div>
    </div>
    <div class="name">
      <h1>Gastronomia</h1>
    </div>
    <div class="menu">
      <nav class="links">
        <a href="/" class="activo" >Inicio</a>
        <a href="acerca">Acerca de</a>
        <a href="productos">Productos & Servicios</a>
        <a href="recetas">Recetas</a>
        <a href="contacto">Contacto</a>
      </nav>
    </div>
  </header>
  @yield("content")
  <footer>
    <div class="col-md-5 pie-pagina pie">
      <img src="img/6Logo.jpg" alt="Logo">
      <a href="contacto">Contáctenos</a>
    </div>
    <div class="col-md-5 pie-pagina">
      <h3>Menú</h3>
      <ul>
        <li>
          <a href="index">Inicio</a>
        </li>
        <li>
          <a href="acerca">Acerca de</a>
        </li>
        <li>
          <a href="productos">Productos & Servicios</a>
        </li>
        <li>
          <a href="recetas">Recetas</a>
        </li>
        <li>
          <a href="contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </footer>
</body>
</html>
