<?php
include("include/header.php");
?>
		<div class="">
			<h1 class="">Accueil - Restauration</h1>
		</div>
		<main class="my-4 mx-0 px-0 px-md-4">
					<p class="col-12 mb-4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

			<section class="pratique-access text-center">
				<div class="row mx-1500">
					<!-- transport -->
					<div class="col-12 col-lg-6 my-3 align-items-strech">
						<div class="transport row mx-0 align-items-strech h-100" style="background-image: url('img/accueil/rest-formule.jpg'); background-size: cover; background-position: center;">
							<p class="col-12 col-sm-auto ico px-3 pr-sm-0 pl-sm-4 py-3 pl-xl-5 align-self-center w-25" style="min-height:150px;">
							</p>
							<div class="col-12 col-sm bg-grey px-4 pr-sm-5 pl-sm-0 py-2 bg-skew">
								<p class="titre">
									Les Formules
								</p>
								<ul class="list text-left">
									<li>
										Petits-déjeuners sportifs
									</li>
									<li>
										Menu avec choix poisson ou viande
									</li>
									<li>
										Diner équilibré
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- FIN transport -->
					<!-- transport -->
					<div class="col-12 col-lg-6 my-3 align-items-strech">
						<div class="transport row mx-0 align-items-strech h-100" style="background-image: url('img/accueil/rest-qualite.jpg'); background-size: cover; background-position: center;">
							<p class="col-12 col-sm-auto ico px-3 pr-sm-0 pl-sm-4 py-3 pl-xl-5 align-self-center w-25" style="min-height:150px;">
							</p>
							<div class="col-12 col-sm bg-grey px-4 pr-sm-5 pl-sm-0 py-2 bg-skew">
								<p class="titre">
									Priorité qualité
								</p>
								<ul class="list text-left">
									<li>
										Des produits de locaux fraichement cuisinés
									</li>
									<li>
										Petits-déjeuners, déjeuners et diners adaptés aux besoin des sportifs
									</li>
									<li>
										Lorem ipsum dolor sit amet, consectetur adipisicing
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- FIN transport -->
				</div>
			</section>

			<section class="text-center">
				<div class="row justify-content-center mx-1500">
					<!-- chambre -->
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
						<figure class="hebergement-photo">
							<img src="img/accueil/rest-self2.jpg" alt="illustration" class="img-fluid" />
							<div class="hebergement-photo-hover d-flex flex-column justify-content-center align-items-center">
								<h3 class="font-weight-bold mb-5">Self-service</h3>
								<button class="d-flex justify-content-center">
									<i class="fas fa-plus"></i>
									<span class="">En savoir plus</span>
								</button>
							</div>
						</figure>
					</div>
					<!-- FIN chambre -->
					<!-- chambre -->
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
						<figure class="hebergement-photo">
							<img src="img/accueil/rest-cafet2.jpg" alt="illustration" class="img-fluid" />
							<div class="hebergement-photo-hover d-flex flex-column justify-content-center align-items-center">
								<h3 class="font-weight-bold mb-5">Cafétéria</h3>
								<button class="d-flex justify-content-center">
									<i class="fas fa-plus"></i>
									<span class="">En savoir plus</span>
								</button>
							</div>
						</figure>
					</div>
					<!-- FIN chambre -->
					<!-- chambre -->
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
						<figure class="hebergement-photo">
							<img src="img/accueil/rest-recep1.jpg" alt="illustration" class="img-fluid" />
							<div class="hebergement-photo-hover d-flex flex-column justify-content-center align-items-center">
								<h3 class="font-weight-bold mb-5">Salle de réception</h3>
								<button class="d-flex justify-content-center">
									<i class="fas fa-plus"></i>
									<span class="">En savoir plus</span>
								</button>
							</div>
						</figure>
					</div>
					<!-- FIN chambre -->
			</section>

			<section class="text-center">
				<h2 class="inter">Tri Sélectif</h2>
				<div class="mx-1500">
					<img src="img/ico-recycle.png" alt="icone recyclage" style="height: 50px;" />
					<p class="">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</section>

			<div class="text-center">
				<h2 class="inter">Tarifs et réservation</h2>
				<p>Retrouvez tous nos tarifs <a href="accueil-tarif.php#restauration" class="link">ici</a></p>
				<!-- FORMULAIRE DE CONTACT -->
				<p class="mt-4">FORMULAIRE DE CONTACT</p>
			</div>
			
		</main>

<?php
	include("include/popin-hebergement.php")
?>

<?php
include("include/footer.php");
?>
	