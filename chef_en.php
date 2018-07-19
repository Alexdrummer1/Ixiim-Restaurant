<?php include('header_en.php'); ?>

	<div class="contenedor-general" id="chef">
		<div class="bloque-izquierdo">
			<h1>JORGE VALLEJO<br>(b. Mexico City, 1981)</h1>
			
			<p>Is one of Mexico’s most recognized young chefs on the culinary scene, at home and abroad, whose ever-upward career path has been an unstinting labor of love and enthusiasm. <br><br>
            After discovering his culinary bent as a teenager, Vallejo entered the Centro Culinario de México to study Culinary Administration and Arts. A restless spirit led him to set sail with Princess Cruises in 2004, where he worked on voyages to all corners of the globe. Once back on land, he joined the team at Pujol and was later Corporate Chef at Grupo Habita, where he oversaw kitchens at the Condesa in Mexico City, Habita and Distrito Capital hotels. He became Executive Chef at the St. Regis hotel’s Restaurante Diana, in 2010, before traveling to Copenhagen for a season at Noma. <br><br>
            2012 was a critical year. Alongside his wife Alejandra Flores, Vallejo opened Quintonil, his “life project” (according to a number of public declarations); the couple’s hard work and dedication earned them almost-immediate acclaim and the restaurant was a 2012 Travel+Leisure México Gourmet Awards nominee in the “Best New Restaurant” category. <br><br>
            In 2014, FOUR Magazine named Vallejo a “World Rising Star” and he also won “Best Plate Presentation” at the Gourmet Awards. <br><br>
            That same year—in collaboration with Chefs Mauro Colagreco (from France’s Mirazur) and Virgilio Martínez (from Central, in Peru)—Vallejo started the Orígenes initiative, designed to rescue and preserve culinary products, techniques and customs in small Latin American communities. The initiative is an inclusive program that seeks to involve academics, cooks and students in its rescue efforts. Since its founding, member chefs have journeyed to towns and villages throughout the Western Hemisphere to study culinary customs at the same time they share experiences and teachings. <br><br>
            2014 also saw Quintonil take tenth place on the “Latin America's 50 Best Restaurants” list, rising to sixth place the following year. By 2016, the restaurant had reached 6th place.<br><br>
            GQ Hombres named Vallejo “Chef of the Year” in its 2015 awards and he received that year’s Millesime México “Best Restaurant” prize. Mexican monthly Quién includes him on its list of Mexico’s transformative personalities. <br>
            In September, The Best Chef—an organization promoting new global culinary talents—invited him to a Lyon, France, dinner for the world’s 100 best chefs. <br><br>
            British-based Restaurant magazine ranked Quintonil 35th in its 2015 “50 Best World’s Restaurants” listing and it jumped to twelfth place in 2016—to date, the highest position a Mexican restaurant has occupied. <br><br>
            Vallejo has participated in festivals and congresses in Mexico and abroad, including Morelia, en Boca, Mesamérica, Paralelo Norte and both the Spanish and Filipino editions of Madrid Fusión. <br><br>
            His work has been featured in a variety of publications such as Apicius (in which Quintonil was the youngest restaurant ever to appear) as well as Newsweek, Bleu & Blanc, Gula, Chilango, El Universal, Luxury Travel Magazine, Travel & Leisure, Food and Travel, GQ Méxicoand Quién, among many others. 2016 also saw his name added to the “Mexico’s 300 Most Influential Leaders” list.</p>
            
			<h1 id="chef2" style="margin-top: 100px;">LUIS RONZÓN<br>(b. Mexico City, 1983)</h1>
			<p>Public accountant by profession, soon changed the numbers by the stove. As a disciple of Mexican chef Yuri de Gortari, he discovered his passion for traditional food. Since then, he has continued his professional career in Mexico and abroad to extend and perfect his gastronomic practice. His excellent performance has given him the opportunity to work for internationally renowned restaurants.<br><br>
            Luis has traveled through internationally renowned cuisines, including restaurants such as Noma (Copenhagen) and Malabar (Peru) and in recent years as sous chef of Quintonil (Mexico City). These experiences introduce him into the gastronomic experimentation, the local production and the cultivation of traditional products.<br><br>
            In 2016, he served as chef of Mexican Contemporary Cuisine at the Ambrosia Culinary Center and today he is the Executive Chef at Chablé Resort & Spa and in charge of Ixi´im Restaurant cuisine, contributing there with his knowledge and creativity and materializing the ideas of Chef Jorge Vallejo.</p>
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

<?php include('footer_en.php'); ?>

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