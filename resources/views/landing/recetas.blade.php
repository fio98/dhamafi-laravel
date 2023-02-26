@extends("layouts.plantilla")

@section("title", "Recetas")

@section("content")
<main>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/cremebrulee.jpg" class="card-img-top" alt="cremebrulee">
          <div class="card-body">
            <h5 class="card-title">Crême brûlée</h5>
            <p class="card-text">La crème brûlée es un postre que consiste en una crema cuya superficie se ha espolvoreado de azúcar con el fin de quemarlo y obtener así una fina capa crujiente de caramelo.</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal1">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal1">Ver ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/macarrons.jpg" class="card-img-top" alt="macarons">
          <div class="card-body">
            <h5 class="card-title">Macarrons</h5>
            <p class="card-text">El macaron es una galleta o pastelito tradicional francés hecho de clara de huevo, almendra molida, azúcar glas y azúcar.</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal2">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal2">Ver ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/cordon.png" class="card-img-top" alt="cordon">
          <div class="card-body">
            <h5 class="card-title">Cordon Blue</h5>
            <p class="card-text">Un cordon bleu o schnitzel cordon bleu es un plato de carne envuelto alrededor de queso, luego empanado y frito.</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal3">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal3">Ver ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/flan.jpeg" class="card-img-top" alt="flan">
          <div class="card-body">
            <h5 class="card-title">Flan</h5>
            <p class="card-text">El flan es un postre elaborado con una natilla, teniendo como ingredientes principales huevos enteros, leche y azúcar, que luego es refrigerado para obtener una textura cremosa y gelatinosa</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal4">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal4">Ver ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/hojaldre.png" class="card-img-top" alt="hojaldre">
          <div class="card-body">
            <h5 class="card-title">Masa de Hojaldre</h5>
            <p class="card-text">El hojaldre es una masa crujiente utilizada para elaborar pasteles y otras preparaciones culinarias. Se elabora con harina, grasa, agua y sal. Es crujiente después de su cocción.</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal5">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal5">Ver ingredientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/masap.jpeg" class="card-img-top" alt="masapizza">
          <div class="card-body">
            <h5 class="card-title">Masa de Pizza</h5>
            <p class="card-text">La pizza es una preparación culinaria que consiste en un pan plano, habitualmente de forma circular, elaborado con harina de trigo, levadura, agua y sal que tradicionalmente se cubre con salsa de tomate y mozzarella y se hornea a alta temperatura en un horno de leña.</p>
          </div>
          <div class="card-footer text-center">
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#recetasModal6">Ver receta</button>
            <button href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ingredientesModal6">Ver ingredientes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ingredientesModal1" tabindex="-1" aria-labelledby="ingredientesModalLabel1" aria-hidden="true">
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ingredientesModal2" tabindex="-1" aria-labelledby="ingredientesModalLabel2" aria-hidden="true">
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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ingredientesModal3" tabindex="-1" aria-labelledby="ingredientesModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>2 pechugas de pollo cortadas en filetes</p>
            <p>8 lonchas de queso tipo sandwich</p>
            <p>8 lonchas de jamón york</p>
            <p>Pan rallado, harina y 2 huevos</p>
            <p>sal y pimienta</p>
            <p>Aceite</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ingredientesModal4" tabindex="-1" aria-labelledby="ingredientesModalLabel4" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Para el Flan:</p>
            <p>5 huevos</p>
            <p>1 lata (12oz) de leche evaporada</p>
            <p>1 lata (14oz) de leche condensada</p>
            <p>1 cucharada de vainilla</p>
            <p>1/2 taza de azúcar</p>
            <p>Para el caramelo:</p>
            <p>1 taza de azúcar</p>
            <p>2cucharadas de agua</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ingredientesModal5" tabindex="-1" aria-labelledby="ingredientesModalLabel5" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>300 gr de harina</p>
            <p>7 gr de sal</p>
            <p>170 ml de agua</p>
            <p>250 gr de mantequilla (si puede ser especial pastelería) (a temperatura ambiente, ni muy dura ni muy blanda)</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ingredientesModal6" tabindex="-1" aria-labelledby="ingredientesModalLabel6" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingredientes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>400 gramos de harina de trigo</p>
            <p>200 ml de agua tibia</p>
            <p>2 cucharadas de aceite de oliva</p>
            <p>15 gramos de levadura fresca</p>
            <p>1 pizca de sal</p>
            <p>Harina para la encimera (para que no se pegue)</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="recetasModal1" tabindex="-1" aria-labelledby="recetasModalLabel1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Comenzamos preparando la base de agua en la que colocaremos nuestros moldes con la crême brûlée. Para ello llenamos de unos 3 dedos de agua, una bandeja grande en la que luego nos quepan los moldes que vayamos a utilizar para hornear la crema.</p>
            <p>2- Encendemos el horno a 160º C y ponemos la fuente con el agua en el horno. La intención es que el agua esté caliente en el momento en el que comencemos a hornear la crema.</p>
            <p>3- En una cazuela calentamos la nata con las semillas de la vaina de vainilla. Incorporamos también la propia vaina, una vez abierta. Calentamos la nata durante unos 10 minutos, teniendo mucho cuidado de que nunca llegue a hervir. Retiramos del fuego y dejamos que repose durante 20 minutos.</p>
            <p>4- En un bol batimos las yemas con el azúcar y una pizca de sal, hasta que tengamos una crema espumosa. Añadimos la nata poco a poco, colándola y sin parar de remover hasta integrarla con el resto de ingredientes.</p>
            <p>5- Volvemos a poner la crema en una cazuela y la cocinamos, sin parar de remover, a fuego medio durante unos minutos. Veremos como la crema empieza a espesar ligeramente.
            </p>
            <p>6- Vertemos la mezcla en los moldes que hayamos elegido para la crême brûlée y los colocamos dentro de la fuente que tenemos calentándose en el horno. El agua de la fuente debería llegar hasta más o menos la mitad de los molde con la crema.</p>
            <p>7- Precalentamos el horno a 160º C durante 10 minutos. El horno debe estar caliente cuando metamos la crême brûlée. Horneamos durante 30 minutos a 160º C.</p>
            <p>8- Retiramos la bandeja del horno y dejemos que se enfríe la crema sobre una rejilla. No guardaremos las crême brûlée en el frigo hasta que se haya enfriado totalmente. Podemos dejarla de un día para otro.</p>
            <p>9- Cubrimos cada uno de los molde con 2 cucharadas de azúcar. Y con la ayuda de un quemador de cocina tostamos el azúcar superficial hasta que quede un caramelo. Sólo tiene que quedar con una fina capa que protegerá la crema.</p>
            <p>10- Dejamos que el caramelo se enfríe y se solidifique antes de disfrutar de este postre lácteo tradicional francés. Toda una maravilla gastronómica, perfecta para una sobremesa de categoría.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recetasModal2" tabindex="-1" aria-labelledby="recetasModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Tamiza en un bol el azúcar glas una vez y las almendras dos veces. Mézclalos y los vuelves a tamizar dos veces más. Resérvalo.</p>
            <p>2- Monta las claras a punto de nieve. Cuando empiecen a subir incorpora el azúcar y el colorante (opcional) y terminas de montar las claras.</p>
            <p>3- Incorpora la mezcla de las almendras a las claras, lo hechas bruscamente y en forma de lluvia hasta que hayas vertido todo el contenido. Esta es una de las claves para conseguir unos buenos macarons. Bate con movimientos envolventes hasta conseguir una mezcla brillante y lisa.</p>
            <p>4- Introduce la mezcla en una manga pastelera con una boquilla redonda y ancha. Pon la manga vertical y vas haciendo montoncitos sobre papel de hornear y le vas dando forma con la ayuda de una plantilla.</p>
            <p>5- Cuando los toques y no se te peguen en los dedos es hora de hornearlos. Precalienta el horno a 140º C y los haces durante 10 minutos.</p>
            <p>6- Los dejas enfriar una media hora.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recetasModal3" tabindex="-1" aria-labelledby="recetasModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Salpimentamos las pechugas de pollo. Recuerda que deben estar ya fileteadas. En la carnicería nos lo harán sin ningún problema.</p>
            <p>2- En una encimera, ponemos un trozo de papel de cocina transparente. Encima ponemos una de las pechugas y la tapamos con más papel film. Con un martillo u otro objeto romo, como con un vaso grande y pesado, golpeamos la pechuga. La idea es estirarla y ablandar sus fibras.</p>
            <p>3- Continuamos con la elaboración de nuestro cordon bleu de pollo. Retiramos la pechuga del papel film. Sobre ella, ponemos unos trozos de queso. Sobre el queso, una loncha de jamón cocido y sobre éste, más queso. Así queda más cremoso. Enrollamos todo con las manos, encerrando el relleno en el interior de la pechuga de pollo. No pasa nada si sobresale un poco por los lados.</p>
            <p>4- Ahora, pasamos cada «paquetito» de pollo relleno primero por harina, después por huevo, luego por pan rallado y después de nuevo por huevo y por pan rallado. Por ese orden. Con esto de pasarlo dos veces por huevo y por rallado, lograremos una cobertura exterior más fuerte, que aguante mejor el relleno y más crujiente. Reservamos en un plato hasta haber empanado todo el pollo</p>
            <p>5- Cuando hayamos rellenado y empanado todas las pechugas de nuestro cordon bleu de pollo, las metemos en el congelador durante unos 10 minutos. Si no vas a freírlas en el momento, puedes dejarlas unas horas en la nevera.</p>
            <p>6- Freímos en abundante aceite. Que las cubra por completo. Es importante que el aceite no esté muy caliente (a unos 150ºC) para que el calor penetre bien en el interior de cada paquetito de pollo, sin que se queme el pan rallado. Pasados unos tres minutos de fritura, cuando esté dorado y cocinado en su interior, retiramos del aceite y colocamos cada cordon bleu de pollo en papel absorbente, antes de servirlo.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recetasModal4" tabindex="-1" aria-labelledby="recetasModalLabel4" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Pre calienta el horno a 350°F y ten a mano el molde que usarás para el baño de maría.</p>
            <p>2- Coloca el azúcar para el caramelo en un sartén a fuego medio con las 2 cucharadas de agua hasta que se derrita en forma homogénea.</p>
            <p>3- Cocina hasta que el caramelo adquiera un color dorado.</p>
            <p>4- Viértelo en el molde que usarás. Esparce el caramelo por el molde cuidadosamente hasta que cubra las paredes del mismo. Déjalo enfriar.</p>
            <p>5- Agrega los huevos y licua solo por unos segundos. Luego agrega la leche evaporada y mezcla. Incorpora la leche condensada y mezcla. Agrega la vainilla, el azúcar y continua mezclando hasta que obtengas una mezcla homogénea.</p>
            <p>6- Cuela y vierte la mezcla en el molde que ya tienes previamente acaramelado.</p>
            <p>7- Lleva al horno a baño de María por 45 minutos.</p>
            <p>8- Verifica que esté listo utilizando un palito para pinchos o un cuchillo fino. Si salen limpios significa que ya está listo.</p>
            <p>9- Sácalo del horno con mucho cuidado de no quemarte y ponlo sobre una parrilla de alambre. Deja enfriar a temperatura ambiente hasta que esté completamente frio.</p>
            <p>10- Desmolda y lleva a la nevera hasta el momento de servirlo.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recetasModal5" tabindex="-1" aria-labelledby="recetasModalLabel5" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Masa de hojaldre explicada paso a pasoMezcla la harina + sal + agua. Amasa hasta tener una mezcla homogénea. Hacer una bola y filmar con papel transparente. Refrigerarla 30 min.</p>
            <p>2- Masa de hojaldre explicada paso a pasoColoca toda la mantequilla encima de papel sulfurizado. Pon otra hoja de papel vegetal encima. Ahora, presiona con el rulo y extiendela a fin de conseguir una plancha de mantequilla. Pliega el papel hasta conseguir un cuadrado. Vuelve a extender hasta conseguir un perfecto cuadrado de mantequilla, dejando el mismo grosor por todos lados. Refrigerar.</p>
            <p>3- Masa de hojaldre explicada paso a pasoEstira la masa encima de la mesa enharinada. Forma un rectángulo en el que pueda entrar el cuadrado de mantequilla dos veces.Coloca el cuadrado de mantequilla en un lado. Doblar la masa cubriendo la mantequilla por encima. No dudes en estirar un poco la masa para cerrar los bordes para que tenga el mismo tamaño que la mantequilla.</p>
            <p>4- Masa de hojaldre explicada paso a pasoGolpea levemente la masa con el rulo. De esa manera se pegará bien la mantequilla. Gira la masa 90° y estírala a lo largo (unos 50 cm)</p>
            <p>5- Masa de hojaldre explicada paso a pasoRetirar el exceso de harina que quede sobre la masa. Tome la parte inferior de su rectángulo y dóblelo aproximadamente 1/3 de la masa. Luego doble la parte superior de la masa. Todo tiene que estar bien alineado para hacer 3 capas uniformes.</p>
            <p>6- Masa de hojaldre explicada paso a paso3 capas de masa: quiere decir, un "giro simple". Es necesario que todos los pliegues estén bien unidos y que no haya vacío entre ellos. Todo debe estar bien uniforme.</p>
            <p>7- Masa de hojaldre explicada paso a pasoGolpea otra vez con el rulo suavemente. Gira la masa 90°. Las 3 capas visibles deben estar justo enfrente tuya. Estírala, y haz un segundo giro simple. Envuelve la masa en papel transparente y refrigerala durante 30 min ( ni más, ni menos)</p>
            <p>8- Masa de hojaldre explicada paso a pasoSaca la masa y colocala con las capas visibles hacia a ti. Sella los bordes apoyando con el rulo. Estira la masa formando de nuevo un rectángulo lo más regular posible. Coge la parte de abajo y pliegala 2/3 ( hasta el centro. Luego, coge la parte de arriba de la masa y dóblala hacia el centro también. Estira bien las esquinas para que queden iguales.</p>
            <p>9- Masa de hojaldre explicada paso a pasoLuego, dobla de nuevo uniendo los dos pliegues. Esto te dará 4 capas: esto se llama "giro doble". Presiona con el rulo, gira 90º y vuelve a repetir la operación anterior, haz otro giro doble.Guarda la masa en papel film y refrigera durante 30 min.</p>
            <p>10- Masa de hojaldre explicada paso a pasoDespués de este tiempo, haz de nuevo 2 giros simples. No olvides tener siempre las capas mirando hacia a ti. Y no olvides tampoco quitar el sobrante de harina cuando dobles la masa.</p>
            <p>11- Masa de hojaldre explicada paso a pasoEnvolver la masa en papel transparente y refrigerar hasta la utilización.NUNCA guardes la masa en forma de bola, si no, destruirás todas las capas que hiciste anteriormente.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="recetasModal6" tabindex="-1" aria-labelledby="recetasModalLabel6" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Receta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>1- Para hacer la masa de pizza italiana es muy sencillo. En un bol agregamos el aceite, el agua y la levadura. Mezclamos y seguidamente le añadimos la harina y la pizca de sal. Una vez que tengáis mas o menos mezclado todo en el bol lo pasamos a la encima para amasar bien.</p>
            <p>2- Ahora comienza el amasado. Ponemos un poco de harina en la encimera y tendremos que amasar como 3 o 4 minutos sin parar. Veremos que hemos terminado cuando la masa esté lisa totalmente, si se pega mucho le ponemos un poco de harina y seguimos hasta que quede lisa.</p>
            <p>3- Ahora una vez lista, la dejamos reposar durante 1 hora más o menos. Una vez reposada la partimos en dos y podemos hacer dos pizzas muy majas. La amasamos y estiramos. Ponemos lo ingredientes y al horno. Listo!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
