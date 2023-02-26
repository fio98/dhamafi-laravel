import './bootstrap';

// Habilitar tabs en acerca de.
$(document).ready(function () {
    $("#tabs").tabs();
    $("#acordeon").accordion();
    $("#autocomplete").autocomplete({
        source:["masa para pizza", "flan", "gastronomia", "reposteria", "panaderia", "pasteles", "decoracion", "recetas", "productos", "ingredientes",]
    });
});

