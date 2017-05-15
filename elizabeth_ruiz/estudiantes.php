<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h3>Diseño</h3>
<p>Establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile, en el año 2015:</p>
<h3>año 2015.</h3>

<img src="images/estudiantes_estableciemientos.png" class="img-responsive">


<h3>año 2016.</h3>
<p>Edad, de los estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile, en el año 2016:</p>



<img src="images/edad_año_estudiantes.png" class="img-responsive">


</ol>
<p>Género de los estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile, en el año 2016:</p>
<ol>
  <img src="images/genero_año_cantidad.png" class="img-responsive">



<h3>Año 2009-2010-2011-2012-2013-2014-2015-2016.</h3>
</ol>
<p>Total de estudiantes matriculados en la carrera de Diseño de la Universidad de Chile::</p>
<ol>


  <img src="images/año_Matrícula _total.png" class="img-responsive">
</ol>



<h3>Título Profesional.</h3>

<p> Número de egresados con Título Profesional, según registros de la Oficina de Títulos y Grados de la Universidad de Chile, año 2016</p>
  <img src="images/carrera_año_cantidad.png" class="img-responsive">


<div class="alert alert-danger">
<h4>Ejercicio:</h4>
<p>Revise el <a href="http://www.uchile.cl/portafolio-academico/">Portafolio académico</a>, confirme que se hayan agregado todos los académicos de diseño al CSV. De faltar alguno, por favor agréguelo. Los profesores que no aparecen en el portafolio son docentes invitados (contractualmente no son académicos de la Universidad de Chile; no corresponde agregarlos al CSV).</p>
<p>Haga un listado con los académicos que "han demostrado una actividad docente sostenida, realizándola en forma autónoma y creativa, con pleno dominio de su especialidad, dando a conocer su experiencia en textos de uso docente". Junto a cada nombre, indique sus horas contratadas.</p>
<p>Calcule el promedio de horas que dedican los académicos a sus actividades en Diseño de la Universidad de Chile.</p>
<p>Si resuelve todo antes de que termine la clase: intente agregar una página de detalle, donde se despliegue más información sobre cada académico.</p>
<p>Antes de entregar, retire la impresión de la información contenida en la variable $datos (<code>//print_r</code>).</p>
</ul>
</div>
</section>
<?php include('pie.php');?>
