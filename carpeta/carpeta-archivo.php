<?php 
define('NOMBRE_PAGINA', 'carpeta-archivo');
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/header.php';
?>
<section>
            <h1>Probar medidas</h1>
                <p>En este espacio vamos a probar medidas y demás elementos de CSS</p>
                <section class="medidas"></section>
                <H2>Medidas absolutas</H2>
                <div class="absolutas-sizes">
                <div class="cm">centimetros = cm</div>
                <div class="mm">Milimetros = mm</div>
                <div class="in">Pulgadas = In (96px o 2.54cm)</div>
                <div class="px">px = Pixeles</div>
                <div class="pt">pt = Puntos</div>
                <div class="pc">pc = Picas</div>
                </div>

                <H2>Medidas relativas</H2>
                <div class="relativas-sizes">
                <div class="em">em = Multiplicador del tamaño fuente. Depende del tamaño del elemento en si.</div>
                <div class="rem">rem = multiplicador del tamaño de la fuente del elemento root. Depende del html</div>
                <div class="vh">vh = porcentaje del alto del viewport. Cambia con el alto en función del dispositivo</div>
                <div class="vw">vw = porcentaje del ancho del viewport. Cambia en función del ancho del dispositivo</div>
                <div class="porcentaje"> % porcentaje del tamaño del elemento.¿De qué elemento? Del elemento de arriba. En este caso de la clase "relativas sizes". Para eso hay que ponerle medidas al elemento de arriba.</div>
                </div>
</section>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/carpeta/assets/footer.php';
?>    