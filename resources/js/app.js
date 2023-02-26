import './bootstrap';

// Habilitar tabs en acerca de.
$(document).ready(function () {
    $("#tabs").tabs();
    $("#acordeon").accordion();
    $("#autocomplete").autocomplete({
        source:["masa para pizza", "flan", "gastronomia", "reposteria", "panaderia", "pasteles", "decoracion", "recetas", "productos", "ingredientes",]
    });
    $('input, textarea').blur(function() {
        if ($(this).val()) {
          $(this).removeClass("border-danger");
          $(this).addClass("border border-success border-3");
        }
        else {
          $(this).removeClass("border-success");
          $(this).addClass("border border-danger border-3");
        }
      });

      $('input[type="email"]').blur(function() {
        if (!$(this).val() || !$(this)[0].validity.valid) {
          $(this).addClass("border--dashed");
        }
        else {
          $(this).removeClass("border--dashed");
        }
      });

      $("#formulario").submit(function() {
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var email = $("#email").val();
        var numero = $("#numero").val();
        var direccion = $("#direccion").val();
        var campos = [];
        var mensaje = '';
        var status = '';

        if (nombre.length < 1) {
          campos.push("Nombre");
        }
        if (apellido.length < 1) {
          campos.push('Apellido');
        }
        if (email.length < 1) {
          campos.push('Email');
        }
        if (numero.length < 1) {
          campos.push('Numero');
        }
        if (direccion.length < 1) {
          campos.push('Dirección');
        }

        if (campos[0]) {
          mensaje = 'Debe llenar los siguientes campos:\n ' + campos.join(', ');
          status = "error"
        }
        else {
          mensaje = "El formulario ha sido enviado.";
          status = "success"
        }

        swal("Info", mensaje, status);
        event.preventDefault();
      });

      $("#autocomplete").autocomplete({
        source:["masa para pizza", "flan", "gastronomia", "reposteria", "panaderia", "pasteles", "decoracion", "recetas", "productos", "ingredientes",]
      });
});

