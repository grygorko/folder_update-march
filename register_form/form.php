<?php
include "action.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
           Registre</span>

				<div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît taper votre nom">
					<span class="label-input100">Prenom</span>
					<input class="input100" type="text" name="prenom" placeholder="Votre Prenom">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît taper votre prenom">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" placeholder="Votre Nom">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre Email (e@a.x)">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Votre adresse email ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="S'il vous plaît taper votre mot de passe (e@a.x)">
					<span class="label-input100">Mot de passe</span>
					<input class="input100" type="password" name="password" placeholder="Votre Mot de passe">
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Secret Question</span>
					<div>
						<select class="js-select2" name="secret_q">
							<option>Choisissez s'il vous plaît</option>
							<option>What is the name of your best friend?</option>
							<option>What is the name of your mother's hometown?</option>
							<option>What is the name of school you attend?</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît choisissez votre répondre">
					<span class="label-input100">Secret Answer</span>
					<input class="input100" type="text" name="secret_a" placeholder="Votre répondre">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<p><span class="label-input100">Genre</span></p>
					<input type="radio" name="gender" value="H"> <span class="label-input100">Homme</span>
					<input type="radio" name="gender" value="F"> <span class="label-input100">Femme</span>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="S'il vous plaît taper votre année de naissance">
					<span class="label-input100">Année de naissance</span>
					<input class="input100" type="text" name="birthyear" placeholder="Votre année de naissance">
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="">
					<span class="label-input100">Ajouter votre avatar</span>
					<input class="input100" type="file" name="avatar" placeholder="Avatar">
				</div>

				<div class="container-contact100-form-btn">
          <input type="submit" name="submit" value="Registre" class="contact100-form-btn">
						<span>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
				</div>
			</form>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function() {
				$(this).on('select2:close', function(e) {
					if ($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					} else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})

	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [1500, 3900],
			connect: true,
			range: {
				'min': 1500,
				'max': 7500
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
			$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
			$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
		});

	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');

	</script>

</body>

</html>
