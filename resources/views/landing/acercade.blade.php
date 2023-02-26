@extends("layouts.plantilla")

@section("title", "Acerca de")

@section("content")
  <main>
    <div id="tabs">
      <div id="acordeon">
        <h2>Hisroria</h2>
        <div>
          <p>La gastronomía es la disciplina, comprendida como un arte, que estudia las relaciones del ser humano con su modo de alimentación y con el entorno cultural en el que la cocina se da.</p>
          <p>La historia de la gastronomía se remonta a la antigüedad clásica, cuando surgieron los primeros recetarios, en parte impulsados por la presencia en la Roma Imperial de alimentos provenientes de diversos rincones de África, Asia y Europa del norte.</p>
          <p>La tradicional dieta romana se vio entonces enriquecida enormemente, lo cual además convirtió el acto de comer en un acto ceremonial en el que se introducían los alimentos antes de incorporarlos al banquete, destinado a los nobles y a los ricos. No faltaron entonces tratadistas sobre la comida, como Lúculo y Marco Gravio Apicio.</p>
        </div>
        <h2>Influencia</h2>
        <div>La gastronomía es mucho más que comida. Refleja la cultura, el patrimonio, las tradiciones y el sentido de comunidad de los distintos pueblos. Es una forma de promover el entendimiento entre diferentes culturas y de acercar a las personas y las tradiciones. El turismo gastronómico también se perfila como un importante protector del patrimonio cultural, y el sector contribuye a crear oportunidades, incluso puestos de trabajo, sobre todo en los destinos rurales.</div>
        <h2>Gustos</h2>
        <div>
          <ul>
            <li><a href="#tab1">Decoración de pasteles</a></li>
            <li><a href="#tab2">Chocolatería</a></li>
            <li><a href="#tab3">Panadería</a></li>
          </ul>
          <div id="tab1">
            <div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ib1V_Z9sjHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div id="tab2">
            <div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/qC03p0UQkJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div id="tab3">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7v9uaTpJ0Jk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
