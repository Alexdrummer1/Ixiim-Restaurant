<?php include('header.php'); ?>

	<div class="contenedor-general" id="chef">
		<div class="bloque-izquierdo">
			<h1>JORGE VALLEJO<br>(Ciudad de México, 1981)</h1>
			
			<p>Es uno de los chefs mexicanos con mayor reconocimiento en el medio gastronómico, dentro y fuera del país, gracias a una sólida trayectoria, basada en un trabajo entusiasta y pasión por la gastronomía.<br><br>

Estudió Administración y Artes Culinarias en el Centro Culinario de México. En 2004 comenzó a trabajar en los cruceros Princess, en recorridos por todo el mundo. A su regreso, se incorporó al equipo del restaurante Pujol, para después participar como chef corporativo de Grupo Habita, en donde dirigió las cocinas del Hotel Condesa DF, Hotel Habita y Hotel Distrito Capital. Más tarde, en 2010, trabajó como chef ejecutivo del Restaurante Diana del Hotel St. Regis CDMX y posteriormente colaboró en el restaurante Noma de René Redzepi en Copenhague.<br><br>

En 2012 inauguró, junto con su esposa Alejandra Flores, el restaurante Quintonil, que ha obtenido desde entonces diversos reconocimientos, tanto a nivel nacional como internacional.  En 2014, Quintonil ocupó el décimo sitio en la lista Latin America's 50 Best Restaurants. En 2015 fue reconocido como #6, posición que mantuvo en 2016.<br><br>

En 2014, junto con los chefs Mauro Colagreco (restaurante Mirazur, Francia) y Virgilio Martínez (restaurante Central, Perú), Jorge Vallejo echó a andar la iniciativa Orígenes, para recuperar y preservar productos, técnicas y costumbres culinarias que sobreviven en pequeñas comunidades de Latinoamérica.<br><br>

En 2015, Vallejo fue designado “Chef del Año” en los premios GQ Hombres del Año,  obtuvo el Premio Millesime México al Mejor Restaurante y la revista Quién lo incluyó en su grupo de los personajes que transforman a México.<br><br>

En septiembre de ese año fue invitado a la cena organizada por The Best Chef —organización que promueve a los nuevos talentos gastronómicos a nivel internacional— para los 100 mejores chefs del mundo, en la ciudad de Lyon, Francia.<br><br>

En 2016, resaltando la pasión que tiene por sus raíces mexicanas, Jorge Vallejo participa en el desarrollo y conceptualización de la propuesta gastronómica de Chablé e Ixi’im en Yucatán, México, para expresar los sabores y formas de la cocina mexicana moderna.
Así mismo en 2016, su trabajo en Quintonil lo lleva a ocupar el puesto #22 en la lista The World’s 50 Best Restaurants.<br><br>

Su trabajo ha sido reseñado en publicaciones como Apicius, Newsweek, Bleu & Blanc, Gula, Chilango, El Universal, Luxury Travel Magazine, Travel & Leisure, Food and Travel, GQ México, Quién, entre muchas otras. En 2016, Jorge ingresó a la lista de Los 300 Líderes Más Influyentes de México.</p>

			<h1 id="chef2" style="margin-top: 100px;">LUIS RONZÓN<br>(Ciudad de México, 1983)</h1>
			
			<p>Contador público de profesión, pronto cambió los números por los fogones. Como discípulo del chef mexicano Yuri de Gortari, descubrió su pasión por la comida tradicional. Desde entonces, ha buscado múltiples cursos para extender y perfeccionar su práctica gastronómica, impartidos por escuelas de México y el extranjero. Su desempeño le abrió las puertas de los mejores restaurantes de grandes cadenas hoteleras.<br><br>

Luis ha transitado por cocinas de renombre internacional, entre ellas las de restaurantes como Noma (Copenhague) y Malabar (Perú) y en los últimos años como sous chef de Quintonil (Ciudad de México). Estas experiencias lo han adentrado en la experimentación gastronómica, la producción local de insumos y el cultivo de productos autóctonos.<br>

En 2016, fungió como chef instructor de Cocina Mexicana Contemporánea en el Centro Culinario Ambrosía y hoy se encuentra al frente de la cocina de Ixi’im y Chablé como Chef de cuisine aportando su conocimiento y creatividad y materializando las ideas del Chef Jorge Vallejo.</p>
		</div> <!-- /bloque-izquierdo -->
		
		<div class="bloque-derecho bloque-shown" style="background-image:url(assets/img/chef-2.jpg);"></div> <!-- /bloque-izquierdo -->
        <div class="bloque-derecho bloque-hidden" style="background-image:url(assets/img/chef.jpg);"></div> <!-- /bloque-izquierdo -->
		<div class="pattern"></div> <!-- /pattern -->
	</div> <!-- /contenedor-derecho -->
	
	<style>
		body{background-color: #000;}
		.chef{ color: #CF8E26;}
		.pattern{right: 0 !important;}
		div#chef .bloque-hidden { display: none; }
	</style>

<?php include('footer.php'); ?>

<script>
$(window).scroll(function () {
    var offset = $("#chef2").offset().top;

    if ($(window).scrollTop() >= offset * .85 ) {
		console.log('1');
		$('div#chef .bloque-hidden').fadeIn(500);
    } else {
		$('div#chef .bloque-hidden').fadeOut(500);
	}
});
</script>