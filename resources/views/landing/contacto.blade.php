@extends("layouts.plantilla")

@section("title", "Contacto")

@section("content")
<main>
    <h2>Formulario</h2>
    <form id="formulario" class="mx-5" >
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" class="form-control" id="apellido">
          </div>
        </div>
        <div class="col-md-6 py-3">
          <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" required>
          </div>
        </div>
        <div class="col-md-6 py-3">
          <div class="form-group">
            <label for="numero">Número de celular</label>
            <input type="number" class="form-control" id="numero">
          </div>
        </div>
        <div class="form-group py-3">
          <label for="direccion">Escriba su dirección</label>
          <textarea class="form-control" id="direccion"></textarea>
        </div>
        <div class="boton">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </div>
    </form>
  </main>
@endsection
