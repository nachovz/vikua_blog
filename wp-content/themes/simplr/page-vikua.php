<?php /*
Template Name: vikua
*/?>
<?php get_header() ?>

<div class="row">
	<div class="col-xs-8 col-xs-offset-1" id="ciudad">
		<img class="img-responsive" id="ciudad_piso" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/ciudad_vacia.png"/>
		<div class="row">
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=46">
					<div class="col-xs-offset-5 col-xs-2">
						<img class="img-responsive" id="ciudad-proyectos" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/proyectos.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=7">
					<div class="col-xs-2 col-lg-4">
						<img class="img-responsive" id="ciudad-intrafic" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/intrafic.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=78 ">
					<div class="col-xs-4 col-lg-5">
						<img class="img-responsive" id="ciudad-galeria" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/galeria.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=48 ">
					<div class="col-xs-2 col-lg-5">
						<img class="img-responsive" id="ciudad-tec-intraf" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/tec-intraf.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=68">
					<div class="col-xs-2 col-lg-5">
						<img class="img-responsive" id="ciudad-noticias" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/noticias.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="<?php bloginfo('url'); ?>/?page_id=52">
					<div class="col-xs-3 col-lg-4">
						<img class="img-responsive" id="ciudad-its" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/its.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="#">
					<div class="col-xs-2">
						<img class="img-responsive" id="ciudad-vikua" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/vikua.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="#">
					<div class="col-xs-5">
						<img class="img-responsive" id="ciudad-aeropuerto" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/aeropuerto.png"/>
					</div>
				</a>
			</div>
			<div class="row">
				<div class="col-xs-1 col-lg-2">
					<img class="img-responsive" id="semaforo-1" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo1_verde.png"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-lg-2">
					<img class="img-responsive" id="semaforo-2" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo2its_verde.png"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-lg-2">
					<img class="img-responsive" id="semaforo-3" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_its_verde.png"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-lg-2">
					<img class="img-responsive" id="semaforo-4" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_verde.png"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-lg-2">
					<img class="img-responsive" id="carro-rojo" src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/carrorojo.png"/>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$("#ciudad-proyectos").hover(
		function(){
			$("#ciudad-proyectos").popover({ content: "Proyectos", placement: "right" });
	    	$("#ciudad-proyectos").popover('show');
	    	document.getElementById('ciudad-proyectos').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/proyectos_hover.png";
	    	
	    	// $("#ciudad-proyectos").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/noticias.png";
	    	// console.log('proyectos con hover');
		},function(){
			$('#ciudad-proyectos').popover('hide');
			document.getElementById('ciudad-proyectos').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/proyectos.png";
		}
	);
	$("#ciudad-intrafic").hover(
		function(){
			$("#ciudad-intrafic").popover({ content: "Intrafic", placement: "left" });
	    	$('#ciudad-intrafic').popover('show');
	    	document.getElementById('ciudad-intrafic').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/intrafic_hover.png";
		},function(){
			$('#ciudad-intrafic').popover('hide');
			document.getElementById('ciudad-intrafic').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/intrafic.png";
		}
	);
	$("#ciudad-galeria").hover(
		function(){
			$("#ciudad-galeria").popover({ content: "Galeria", placement: "bottom" });
	    	$('#ciudad-galeria').popover('show');
	    	document.getElementById('ciudad-galeria').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/galeria_hover.png";
		},function(){
			$('#ciudad-galeria').popover('hide');
			document.getElementById('ciudad-galeria').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/galeria.png";
		}
	);
	$("#ciudad-tec-intraf").hover(
		function(){
			$("#ciudad-tec-intraf").popover({ content: "TecIntraf", placement: "top" });
	    	$('#ciudad-tec-intraf').popover('show');
	    	document.getElementById('ciudad-tec-intraf').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/tec-intraf_hover.png";
		},function(){
			$('#ciudad-tec-intraf').popover('hide');
			document.getElementById('ciudad-tec-intraf').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/tec-intraf.png";
		}
	);
	$("#ciudad-noticias").hover(
		function(){
			$("#ciudad-noticias").popover({ content: "Noticias", placement: "top" });
	    	$('#ciudad-noticias').popover('show');
	    	document.getElementById('ciudad-noticias').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/noticias_hover.png";
		},function(){
			$('#ciudad-noticias').popover('hide');
			document.getElementById('ciudad-noticias').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/noticias.png";
		}
	);
	$("#ciudad-its").hover(
		function(){
			$("#ciudad-its").popover({ content: "its", placement: "top" });
	    	$('#ciudad-its').popover('show');
	    	document.getElementById('ciudad-its').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/its_hover.png";
		},function(){
			$('#ciudad-its').popover('hide');
			document.getElementById('ciudad-its').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/its.png";
		}
	);
	$("#ciudad-vikua").hover(
		function(){
			$("#ciudad-vikua").popover({ content: "Vikua", placement: "left" });
	    	$('#ciudad-vikua').popover('show');
	    	document.getElementById('ciudad-vikua').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/vikua_hover.png";
		},function(){
			$('#ciudad-vikua').popover('hide');
			document.getElementById('ciudad-vikua').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/vikua.png";
		}
	);
	$("#ciudad-aeropuerto").hover(
		function(){
			$("#ciudad-aeropuerto").popover({ content: "Aeropuerto", placement: "top" });
	    	$('#ciudad-aeropuerto').popover('show');
	    	document.getElementById('ciudad-aeropuerto').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/aeropuerto_hover.png";
		},function(){
			$('#ciudad-aeropuerto').popover('hide');
			document.getElementById('ciudad-aeropuerto').src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/aeropuerto.png";
		}
	);
	 $(document).ready(function(){
	 	var x = 0;
	 	document.getElementById("carro-rojo").className="img-responsive first";
	 	setTimeout(function(){
	 		document.getElementById("carro-rojo").className="img-responsive second";
	 		setTimeout(function(){
	 			document.getElementById("carro-rojo").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/carrorojo1.png";
	 			document.getElementById("carro-rojo").className="img-responsive third";
	 			setTimeout(function(){
			 		document.getElementById("carro-rojo").className="img-responsive fourth";
			 		document.getElementById("carro-rojo").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/carrorojo6.png";
			 		setTimeout(function(){
				 		document.getElementById("carro-rojo").className="img-responsive fifth";
				 		document.getElementById("carro-rojo").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/carrorojo5.png";
				 		setTimeout(function(){
				 			document.getElementById("carro-rojo").className="img-responsive sixth";
				 		},3000)
				 	},3000);
			 	},3000);
	 		},5000);
	 		
		 	
	 	// }, 10000)
		}, 10000)



		 	setInterval(function(){
		 		if(x == 1){
		 			x=0;
		 			document.getElementById("semaforo-1").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo1_verde.png";
		 			document.getElementById("semaforo-3").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_its_verde.png";
		 			document.getElementById("semaforo-4").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_verde.png";	
		 			// document.getElementById("semaforo-4").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_verde.png";
		 		}
		 		else{
		 			x=1;
		 			document.getElementById("semaforo-1").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo1_amarillo.png";
		 			document.getElementById("semaforo-3").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_its_amarillo.png";
		 			// document.getElementById("semaforo-4").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_amarillo.png";
		 			document.getElementById("semaforo-4").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_amarillo.png";	
		 			setTimeout(function(){
		 				document.getElementById("semaforo-1").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo1_rojo.png";
		 				document.getElementById("semaforo-3").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_its_rojo.png"; 
		 				document.getElementById("semaforo-4").src="<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_rojo.png";	
		 				// document.getElementById("semaforo-4").src"<?php echo get_template_directory_uri(); ?>/images/ciudad_vikua/semaforo_intrafic_rojo.png";
		 			}
		 			,4000);
		 		}
		 	},10000)
	 });
	    
</script>

<?php get_footer() ?>