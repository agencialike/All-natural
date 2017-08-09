<?php 
#variables del index
$exp = "expandir";
$cont = "contenido";
 ?>

<script>
$(document).ready(function(){
  /* Esconde inicialmente **/
  $("#cont1").hide();
  $("#cont2").hide();
  $("#cont3").hide();
  $("#cont4").hide();
  $("#cont5").hide();
  $("#cont6").hide();

/*  Aparecer*/
    $("#expandir").click(function(){
        $("#cont1").animate({
            height:'toggle',
        });

        $("#cont2").hide();
        $("#cont3").hide();
        $("#cont4").hide();
        $("#cont5").hide();
        $("#cont6").hide();
    });

    $("#expandir1").click(function(){
        $("#cont2").animate({
            height:'toggle',
        });

        $("#cont1").hide();
        $("#cont3").hide();
        $("#cont4").hide();
        $("#cont5").hide();
        $("#cont6").hide();
    });

    $("#expandir2").click(function(){
        $("#cont3").animate({
            height:'toggle',
        });

        $("#cont1").hide();
        $("#cont2").hide();
        $("#cont4").hide();
        $("#cont5").hide();
        $("#cont6").hide();
    });

    $("#expandir3").click(function(){
        $("#cont4").animate({
            height:'toggle',
        });

        $("#cont1").hide();
        $("#cont2").hide();
        $("#cont3").hide();
        $("#cont5").hide();
        $("#cont6").hide();
    });

    $("#expandir4").click(function(){
        $("#cont5").animate({
            height:'toggle',
        });

        $("#cont1").hide();
        $("#cont2").hide();
        $("#cont4").hide();
        $("#cont3").hide();
        $("#cont6").hide();
    });

    $("#expandir5").click(function(){
        $("#cont6").animate({
            height:'toggle',
        });

        $("#cont1").hide();
        $("#cont2").hide();
        $("#cont4").hide();
        $("#cont3").hide();
        $("#cont5").hide();
    });

});
</script>



<div class="container-fluid">

    <div class="row ">
            <h1 class="titulos"> Productos</h1>
            <div class="col-xs-12  col-md-2 vermas" id="expandir">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-3-1.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-xs-12  col-md-2 vermas" id="expandir1" >
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-4.jpg" class="img-responsive" alt="">
             
            </div>

            <div class="col-xs-12  col-md-2 vermas" id="expandir2">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-5.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-xs-12  col-md-2 vermas" id="expandir3">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-2-1.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-xs-12  col-md-2 vermas" id="expandir4">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-1-1.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-xs-12  col-md-2  vermas" id="expandir5">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-6.jpg" class="img-responsive" alt="">
            </div>
    </div>    

<!-- Contenido-->


  <div class="row">
    <div class="col-xs-12 cnt" id="cont1">
      <div class="col-xs-12 contenidos " >
      <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-3-1.jpg" class="img-responsive col-xs-3" alt="">
              
              <div class="col-xs-9">
                  <h1 class="col-xs-12">Agua All Natural <br>
                  <span> Es obtenida a través de la red municipal agua siguiendo un tratamiento de declorinacion, filtración, radiación UV y ozonización apto para el consumo humano, en la cual se contemplan parámetros Físico Químicos y Microbiológicos para mantener estándares óptimos de calidad y ser considerados líderes en el mercado.</span></h1>
                  <h2 class="col-xs-12">Beneficios <br>
                    <span>Es necesario que ayudemos a nuestro cuerpo a mantener el equilibrio, compensando la pérdida de líquidos tomando no menos de 1,450 mililitros de agua diariamente y mucho mejor si completamos los dos litros.</span>
                  </h2>
                  <div class="col-xs-12" style="padding:10px; ">
                  <h1 class="col-xs-12" >Galería</h1>
                    <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                    </a>

                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>

                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>
                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>
                  </div>
              </div>
              
          </div>
    </div>

    <div class="col-xs-12 cnt" id="cont2">
      <div class="col-xs-12 contenidos " >
              <img src="http://localhost/wordpress/wp-content/uploads/2017/08/unnamed-4.jpg" class="img-responsive col-xs-3" alt="">
              
              <div class="col-xs-9">
                  <h1 class="col-xs-12">Fox Cola <br>
                  <span> Bebida tradicional que viene en varios sabores:
                        Naranja, manzana y fresa. En su proceso de fabricación se considera altos estándares de calidad, obteniendo un producto de características únicas.</span></h1>
                  <h2 class="col-xs-12">Beneficios <br>
                    <span>La gaseosa (también llamada refresco, bebida carbonatada o soda), es una bebida saborizada, efervescente sin alcohol.
Estas bebidas suelen consumirse frías, para ser más refrescantes y para evitar la pérdida de dióxido de carbono, que le otorga la efervescencia</span>
                  </h2>
                  <div class="col-xs-12" style="padding:10px; ">
                  <h1 class="col-xs-12" >Galería</h1>
                    <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                    </a>

                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>

                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>
                      <a href="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" data-lightbox="galleria">
                        <img src="http://practicasa.lacarniceriaec.com/wp-content/uploads/2017/08/porcelanato13.jpg" class="img-responsive col-xs-3" alt="">
                      </a>
                  </div>
              
          </div>
    </div>

    <div class="col-xs-12 cnt" id="cont3">
      <div class="col-xs-12 contenidos " >
              <h1>tres</h1>
              <p></p>
              <div class="col-xs-12">
                  <h2 class="col-xs-4">Telefono</h2>
                  <h4 class="col-xs-4">red sociales</h4>
              </div>
              
          </div>
    </div>

    <div class="col-xs-12 cnt" id="cont4">
      <div class="col-xs-12 contenidos " >
              <h1>cuatro</h1>
              <p></p>
              <div class="col-xs-12">
                  <h2 class="col-xs-4">Telefono</h2>
                  <h4 class="col-xs-4">red sociales</h4>
              </div>
              
          </div>
    </div>
    <div class="col-xs-12 cnt" id="cont5">
      <div class="col-xs-12 contenidos " >
              <h1>cinco</h1>
              <p></p>
              <div class="col-xs-12">
                  <h2 class="col-xs-4">Telefono</h2>
                  <h4 class="col-xs-4">red sociales</h4>
              </div>
              
          </div>
    </div>
    <div class="col-xs-12 cnt" id="cont6">
      <div class="col-xs-12 contenidos " >
              <h1>seis</h1>
              <p></p>
              <div class="col-xs-12">
                  <h2 class="col-xs-4">Telefono</h2>
                  <h4 class="col-xs-4">red sociales</h4>
              </div>
              
          </div>
    </div>
  </div>
</div>