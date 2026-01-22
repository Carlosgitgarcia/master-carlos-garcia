<?php
function ctas() {
    echo '
    <div class="cta">
        <a href="/a-donde-vamos.php" class="btn-cta">Contáctanos</a>
    </div>
    ';
}
function mostrar_breadcrumbs() {
    return NOMBRE_PAGINA !== 'index';
}

function comprobar_pagina() {

    if (NOMBRE_PAGINA === 'index') {
        echo 'Estamos en la página de inicio';
    } else {
        echo 'No estamos en la página de inicio';
    }
}
?>         