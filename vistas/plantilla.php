<?php
include "./vistas/Layouts/Soporte/head.php";
// include "./vistas/Layouts/Soporte/header.php";
$peticionAjax = false;
require_once "./controladores/vistasControlador.php";
$IV = new vistasControlador();
$vistas = $IV->obtener_vistas_controlador();
if ($vistas == "login" || $vistas == "404") {
  require_once "./vistas/contenidos/" . $vistas . "View.php";
} else {
  include "./vistas/Layouts/Soporte/header.php"; ?>
  <div class="cuerpo">
    <?php
    include $vistas;
    ?>
  </div>
<?php
  include "./vistas/Layouts/Soporte/footer.php";
}
?>