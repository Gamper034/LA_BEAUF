<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Brasserie la Beauf</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-reboot.css" rel="stylesheet">
		<link href="css/bootstrap-reboot.min.css" rel="stylesheet">
		<link href="css/bootstrap-grid.css" rel="stylesheet">
		<link href="css/bootstrap-grid.min.css" rel="stylesheet">
		<link href="toastr/build/toastr.css" rel="stylesheet">

		<!-- Perso  -->
		<link href="css/style_perso.css" rel="stylesheet">
		
		 <!-- Font Awesome -->
		<link href="fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body>

		<!-- Nav & Image header -->
		<header>		
			<nav class="nav justify-content-center">		
				<div class="responsive-logo"></div>
					<ul id="list-nav">
						<li class="item-nav"><a href="#apropos">A PROPOS</a></li>
						<li class="nav-hidden"><a class="nav_hidden nav_responsive" href="">.</a></li>
						<li class="item-nav"><a href="#nosbieres"> NOS BIERES</a></li>
						<li class="nav-hidden" ><a href="" class="nav_hidden nav_responsive"> <img class="logo_nav nav_hidden logo_nav_responsive" src="images/logo.png" alt="logo de la beauf"> </a></li>
						<li class="item-nav"><a href="#contact">CONTACT</a></li>
						<li class="nav-hidden"><a class="nav_hidden nav_responsive" href="">.</a></li>
						<li class="item-nav"><a href="#follow">NOUS SUIVRE</a></li>
					</ul>

				<div class="btn-toggle-container" role="button" onclick="navbar()">
					<img class="" src="images/menu-icon.svg" alt="icone menu nav">
				</div>
				
			</nav>
			<div class="img_header"></div>
		</header>

		<!-- Qui sommes nous -->
		<div class="padding_intro">
			<div class="container-fluid intro" id="apropos">
				<div class="row">
					<div class="col">
						<h2 class="paragraphe">Qui sommes nous ?</h2>
						<p class="text-intro">Nous sommes deux beaux-frères qui avons créé leur brasserie artisanale par passion en 2020. Nos breuvages sont préparés dans le Sud de la France à partir de saveurs naturelles et de produits français, ce qui reflète l'authenticité d'un vrai Beauf*.Mais rassure-toi, La Beauf n'est pas "bof" et on y prend goût ! Nous t'informons qu'en buvant cette bière, tu rejoins le cercle privé des Beaufs Français...A la tienne ! <br>
							<small id="" class="legend">
							* Beauf :
							Beau-frère ou Homme peu cultivé et fier de l'être, adepte des claquettes chaussettes et grand amateur de pétanque. Le Beauf n'est jamais le dernier pour la troisième mi-temps.
							</small>
						</p>
					</div>
				</div>
			</div>
		</div>
		

		<!-- Nos Bières -->

		<div class="container-fluid">
			<div class="row beer_font">
				<div class="col-md-8 img_1 nopadding" id="nosbieres"> 
					<!-- <img class="img_1" src="/images/IMG_1463_resize.jpg" alt="Image bière blonde">   -->
				</div>
				<div class="col-md-4 nopadding ">
					<h3 class="beers">La Blonde</h3>
					<p class="beers">Bière blonde authentique avec son houblon floral et sa pointe d'amertume pour une bière bien rafraichissante et désaltérante. C'est tout ce qu'on demande à une bière blonde n'est-ce pas ?</p>
					<div class="thin-sep-blonde"></div>
				</div>
			</div>
		</div>

		<div class="container-fluid">

			<div class="row beer_font inverse">
				<div class="col-md-4 nopadding ">
					<h3 class="beers">La Rouquine</h3>
					<p class="beers">Une bière ambrée aux reflets roux, le malt utilisé va amener des notes biscuitées et caramel. Sa légère touche acidulée fera travailler vos papilles en profondeur.</p>
					<div class="thin-sep-rouquine"></div>
				</div>
				<div class="col-md-8 img_2 "> 
					<!-- <img class="img_1" src="/images/IMG_1463_resize.jpg" alt="Image bière blonde">   -->
				</div>
			</div>
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 nopadding">
					<div class="img_3"></div>
				</div>
				<div class="col-md-4 nopadding ">
						<h3 class="beers">La Calie</h3>
						<p class="beers">Sur la base d'une bière blonde plutôt aromatique, nous ajoutons des framboises entières directement dans notre cuve de fermentation. Le résultat ? Une bière légère, naturellement fruitée et tout simplement irrésistible... </p>
						<div class="thin-sep-cerise"></div>

				</div>
				<div class="col-md-4 nopadding">
					<div class="img_4"></div>
				</div>
			</div>
		</div>

		<!-- Contact -->
		<div class="container-fluid pb-5 contact">
			<h2 class="contact" id="contact">Rentrons en contact !</h2>
			<div class="row pb-6">
				<div class="col-md-6">
					<div class="col-10 mx-auto">
						<form method="post" id="form">
							<div class="m-2">
								<label for="nom" class="">Nom*</label>
								<input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
							</div>
							<div class="m-2">
								<label for="email" class="">Email*</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
							</div>
							<div class="m-2">
								<label for="phone" class="">Téléphone</label>
								<input type="text" name="phone" class="form-control" id="phone" placeholder="ex: 0612345678">
							</div>
							<div class="pt-3">
								<label for="message" class="">Message*</label>
								<textarea name="message" id="message" class="form-control" rows="10" placeholder="Entez votre message " required></textarea>
								<small id="help" class="form-text text-muted">* Champs obligatoires</small>
							</div>
							<div class="pt-3 text-right">
							<button name="submit" type="submit" value="submit" id="send_button"  class="btn btn-secondary" onclick="send_form()">Envoyer</button>
							<!-- <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div> -->
							</div>

						</form>
					</div>
				</div>

				<div class="col-md-6">
					<div class=" col-10 mx-auto pt-5 google_responsive">
							<!-- <iframe class="border border-secondary rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.3901445677707!2d3.4567961513350642!3d43.660855179018625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b15d2cc40e4b2d%3A0x9f71d5d508ad422f!2sBrasserie%20La%20Beauf!5e0!3m2!1sfr!2sfr!4v1648658967732!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
							
							<div class="d-flex align-items-left pt-3 pl-0">
								<div class="t pl-0 col-3 p-2 localisation d-flex align-items-center justify-content-center">
									<span class="fa-solid fa-location-dot fa-xl text-white"></span>
								</div>
								<div class="p-2 col-9">
									<p><span><strong>Brasserie la beauf</strong></span> <br> 7 Rue de la Forge, <br> 34725 Saint-Félix-de-Lodez</p>
								</div>
							</div>						
					</div>
				</div>
			</div>
		</div>

		
		<!-- Bas de page -->
		<footer>
			<div class="container">
				<div class="text-center ">
		
					<div class="pt-2" id="follow">
						<span class="m-3">Suivez Nous !</span>
						<ul class="pt-2">
							<!-- <li><a href="" class="deco_hidden fa-brands fa-twitter text-white fa-2x " style="text-decoration: none;"></a></li> -->
							<li><a  target="blank" href="https://www.facebook.com/LaBeauf/" class="fa-brands fa-facebook text-white fa-2x" style="text-decoration: none;"></a></li>
							<li><a target="blank" href="https://www.instagram.com/brasserie_la_beauf/?hl=fr" class="fa-brands fa-instagram text-white fa-2x" style="text-decoration: none;"></a></li>
						</ul>
					</div>
						
					</div>
				</div>
			</div>
		</footer>
		
	</body>

	<script  type="text/javascript" src="js/app.js"></script>
	<script  type="text/javascript" src="js/jquery-3.6.0.js"></script>
	<script  type="text/javascript" src="js/form-script.js"></script>
	<script  type="text/javascript" src="toastr/toastr.js"></script>

</html>

<script>

$('#send_button').on('click', function(){
				
				toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": false,
					"progressBar": false,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}

				toastr["success"]("Message envoyé avec succès")
		
			})

	function send_form(){

		$.ajax({
			type: 'POST',          //La méthode cible (POST ou GET)
			url : 'php/script.php',
			dataType: 'text', //Script Cible
			data: {
				nom: $('input#nom').val(),
				email: $('input#email').val(),
				phone: $('input#phone').val(),
				message: $('textarea#message').val()
			},
			success: function(data){
				// console.log('Envoyé');
				// toastr.success('Demande envoyée avec succès');
				toastr["success"]("Message envoyé avec succès");
			}
		});
	}


	


	
</script>