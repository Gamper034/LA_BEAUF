<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Brasserie la Beauf</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
		<link href="toastr/build/toastr.css" rel="stylesheet">
		<link href="bootstrap-icons-1.8.2/bootstrap-icons.css" rel="stylesheet">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Perso  -->
		<link href="css/style_perso.css" rel="stylesheet">
		
		 <!-- Font Awesome -->
		<link href="fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body>

		<!-- Nav & Image header -->
		<header>						
			<nav class="navbar navbar-expand-md navbar-light ">
				<a class="navbar-brand d-md-none" href="#"><img src="images/logo.png" alt="logo de la beauf" class="responsive-logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler7"
					aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="myNavbarToggler7">
					<ul class="navbar-nav mx-auto d-flex align-items-center">
						<li class="nav-item">
							<a class="me-2" href="#">HOME</a>
						</li>
						<li class="nav-item">
							<a class="me-2 nav-hidden pointer_none" href="#">.</a>
						</li>
						<li class="nav-item">
							<a class="" href="#apropos">A PROPOS</a>
						</li>
						<a class="d-none d-md-block pointer_none" href="#"><img class="logo_nav mx-4" src="images/logo.png" alt="logo de la beauf"></a>
						<li class="nav-item">
							<a class="me-2" href="#nosbieres">NOS BIERES</a>
						</li>
						<li class="nav-item">
							<a class="me-2 nav-hidden pointer_none" href="#">.</a>
						</li>
						<li class="nav-item">
							<a class="" href="#contact">CONTACT</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="img_header"></div>
		</header>

		<!-- Qui sommes nous -->
		<section class="padding_intro" id="apropos">
			<div class="container-fluid intro" >
				<div class="row">
					<div class="col">
						<h2 class="paragraphe">Qui sommes nous ?</h2>
						<p class="text-intro">Nous sommes deux beaux-frères qui avons créé leur <strong>brasserie artisanale</strong> par passion en 2020. Nos breuvages sont préparés dans le Sud de la France à partir de saveurs naturelles et de produits français, ce qui reflète l'authenticité d'un vrai Beauf*.Mais rassure-toi, La Beauf n'est pas "bof" et on y prend goût ! Nous t'informons qu'en buvant cette bière, tu rejoins le cercle privé des <strong>Beaufs</strong> Français...A la tienne ! <br>
							<small id="" class="legend">
							* Beauf :
							Beau-frère ou Homme peu cultivé et fier de l'être, adepte des claquettes chaussettes et grand amateur de pétanque. Le Beauf n'est jamais le dernier pour la troisième mi-temps.
							</small>
						</p>
					</div>
				</div>
			</div>
		</section>
		

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
		<div class="container-fluid p-2 contact">
			<h2 class="contact mb-5" id="contact">Rentrons en contact !</h2>
			<div class="d-flex justify-content-evenly inverse_contact">
				<div class="col-md-6 margin_contact">
					<div class="col-10 mx-auto">
                    	<form class="" method="post" action="php/send_mail.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="" >
                                <label for="floatingInput">Nom</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="" >
                                <label for="floatingInput">Adresse mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="" >
                                <label for="floatingInput">Téléphone</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="" id="message" name="message" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>
                            
                            <button type="submit" name="send_mail" class=" btn btn-dark text-white"><i class="bi bi-send"> </i>Envoyer</button>   
                        </form>
					</div>
				</div>

				<div class="col-md-6">
                    <div class=" img_contact rounded">
                        <div class="container d-flex justify-content-center h-100">
                            <div class="row align-self-center">
                                <div class="text-center  mb-2">
                                    <div class="d-flex flex-column mb-3 text-white">
                                        <div class="maddox">la Beauf</div>
                                        <div class="Eversthedin">Brasserie Artisanale</div>
                                        <div class="Eversthedin mt-1">Tom Senegas - Quentin Salotti </div>
                                        <div class="justify-content-center contact-size"><i class="bi bi-geo-alt-fill me-1"></i>7 Rue de la Forge, 34725 Saint-Félix-de-Lodez  
                                        </div>
										<div class="justify-content-start contact-size"><i class="bi bi-telephone-fill me-1"></i>06 66 87 60 29</div>
                                    </div>
                                    <a href="https://www.instagram.com/brasserie_la_beauf/?hl=fr" target="_blank"><i class="bi bi-instagram text-white me-2 fa-lg"></i></a>
                                    <a href="https://www.facebook.com/LaBeauf/" target="_blank"><i class="bi bi-facebook text-white me-2 fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
			</div>
		</div>

		
		<!-- Bas de page -->
		<footer class="text-center text-lg-start">
  			<!-- Copyright -->
			<div class="text-center text-white p-3">
				© 2022 Copyright: Brasserie la Beauf
			</div>
			<!-- Copyright -->
		</footer>
		
	</body>

	<script  type="text/javascript" src="js/jquery-3.6.0.js"></script>
	<script  type="text/javascript" src="js/form-script.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</html>


