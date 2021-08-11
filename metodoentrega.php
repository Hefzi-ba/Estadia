<?php
include("Menu.php");
$_SESSION['metodoentrega']='';

?>
<div  class="containercard">
  <div class="row row-cols-1 row-cols-md-3 g-4" >
    <div class="col ">
      <div class="card box">
        <img src="./imagenes/Inicio/Man Send Order To Customer.jpg" class="card-img-top  imgcard model" alt="...">
        <div class="card-body">
          <h5 class="card-title mar details">Entrega a domicilio.</h5>
          <a href="gracias.php?serviciodomicilio=1" class=" letraslogin btnx btn btn btn-outline-light" type="button">
            <i class="fas fa-check-square"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card box">
        
        <div class="card-body" >
          <h5 class="card-title letrasmenu text-center" style="font-size: 50px; ">¡Selecciona algún metodo de entrega!</h5>
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card box">
        <img   src="./imagenes/Inicio/Ichiraku (print) - Nucleus _ Art Gallery and Store.jpg" class="card-img-top imgcard model" alt="...">
        <div class="card-body">
          <h5 class="card-title mar details">Recoger compra.</h5>
          <a href="gracias.php?serviciodomicilio=0" class=" letraslogin btnx btn btn btn-outline-light" type="button">
            <i class="fas fa-check-square"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<?php
include("footer.php");
?>