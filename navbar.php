<script>
	$(document).ready(function(){
		/* Oculto inicialmente */
		$("#conten-menu").hide();

		/* Main dropdown*/ 

		$("#desplegar").click(function(){
			$("#conten-menu").animate({
				height:'toggle',
			});
		});
	});
</script>



<div class="container midropdown">
	<div class="main row">
	 	<img src="http://localhost/wordpress/wp-content/uploads/2017/08/cropped-cropped-all-natural-logo_cd7be5.png" class="col-xs-12 col-md-1 img-responsive" alt="">
	  	<button class="col-md-4 col-xs-12" id="desplegar"> 
	  		<span class="visible-lg visible-md">Descubrir </span>
	  		<span class="visible-xs visible-sm"><i class="fa fa-bars fa-4x" aria-hidden="true"></i>
			</span>
		</button>
	    <div class="col-md-4 col-xs-12" id="buscador">

	    </div>
  	</div>
  	<div id="conten-menu" class="col-xs-12">
  		<div class="col-md-4 col-xs-12">
  			<ul> <h1 class="mddivider">Marcas</h1>
  				<li><a href="">All Natural</a></li>
  				<li><a href="">Limonada</a></li>
  				<li><a href="">Fox Cola</a></li>
  				<li><a href="">Naranjada</a></li>
  			</ul>
  		</div>
  		<div class="col-md-4 col-xs-12">
  			<ul ><h1 class="mddivider">Varios </h1>
  				<li><a href="">Quienes somos.</a></li>
  				<li><a href="">Productos.</a></li>
  				<li><a href="">Trabaje con nosotros.</a></li>
  				<li><a href="">Noticias</a></li>
  			</ul>
  		</div>
  		<div class="col-md-4 col-xs-12">
  			<ul><h1 class="mddivider">Nuestras Redes </h1>
  				<li><a href="">
  					<i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
  				<li><a href="">
  					<i class="fa fa-twitter-square" aria-hidden="true"></i></i> Twitter</a></li>
				</li>
  				<li>
  					<i class="fa fa-instagram" aria-hidden="true"></i></i> Instagram</a></li></li>
  			</ul>
  		</div>
  	</div>
</div>