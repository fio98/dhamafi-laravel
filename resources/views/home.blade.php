@extends("layouts.plantilla")

@section("title", "Home")

@section("content")
    <main>
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carr1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carr2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carr3.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <h2 class="text-center">Recetas destacadas</h2>
    <div class="mt-3 row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/cremebrulee.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crême brûlée</h5>
            <p class="card-text">La crème brûlée es un postre que consiste en una crema cuya superficie se ha espolvoreado de azúcar con el fin de quemarlo y obtener así una fina capa crujiente de caramelo.</p>
            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Lista de ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/macarrons.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Macarrons</h5>
            <p class="card-text">os macarons son unos pastelitos rellenos tradicionales de la cocina francesa, hechos con clara de huevo, almendra molida, azúcar glas y azúcar.</p>
            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Lista de ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/PastaFresca.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pasta Fresca</h5>
            <p class="card-text">La pasta fresca, es hecha en el momento con un proceso más artesanal. Su textura es más suave y el sabor mucho mejor.</p>
            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Lista de ingredientes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="card mt-5">
      <div class="row">
        <div class="col-md-4 px-0">
          <img src="img/contactenos.webp" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8 px-0">
          <div class="card-body">
            <h5 class="card-title">Contactenos</h5>
            <p class="card-text">Estamos para servirle en lo que usted necesite.</p>
            <a href="contacto.html" class="btn btn-primary">Escribanos!</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>4 yemas</p>
            <p>60 gr de azúcar</p>
            <p>1 vaina de vainilla</p>
            <p>500 ml de crema de leche</p>
            <p>1 pizca de sal</p>
            <p>Azúcar para quemar</p>
          </div>
          <div class="modal-footer">
            <a href="recetas.html" class="btn btn-primary">Ver más recetas</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>110 gr de harina de almendra</p>
            <p>220 gr de azúcar glass</p>
            <p>110 gr de claras de huevo envejecidas</p>
            <p>30 gr de azúcar blanquilla</p>
            <p>Colorantes en gel</p>
          </div>
          <div class="modal-footer">
            <a href="recetas.html" class="btn btn-primary">Ver más recetas</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>500 gr de harina de trigo</p>
            <p>5 huevos</p>
            <p>Agua</p>
            <p>Sal</p>
          </div>
          <div class="modal-footer">
            <a href="recetas.html" class="btn btn-primary">Ver más recetas</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    </main>
@endsection
