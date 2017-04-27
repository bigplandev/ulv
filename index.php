<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>ULV - Introdução</title>

		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,400italic">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:500,700,400">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Select2 -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

		<link rel="stylesheet" href="assets/css/theme.css">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">
			<div class="row">
  				<div class="col-md-6 col-md-offset-3 intro">
  					<div class="row logo">
  						<div class="col-md-12">
  							<img class="img-responsive" src="assets/images/logo_intro.svg" />
  						</div>
  					</div>

  					<div class="row menu-linguas">
  						<div class="col-md-12">
  							<select class="select-idiomas" id="idioma" style="width: 100%">
  								<option value="en">ENGLISH</option>
  								<option value="es">ESPAÑOL</option>
  								<option value="pt-br">PORTUGUÊS</option>
							</select>
  						</div>
  					</div>
  				</div>
			</div>
		</div>

		<!-- Bootstrap e jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Select2 -->
		<script src="assets/plugins/select2/js/select2.full.min.js"></script>
		<script src="assets/plugins/select2/js/i18n/pt-BR.js"></script>

		<script type="text/javascript">
			$(".select-idiomas").select2({
			  	placeholder: "Select the language",
			  	allowClear: false,
			  	minimumResultsForSearch: Infinity
			});

			var $langSelect = $(".select-idiomas");

			$langSelect.on("change", function(e){
				var lingua = $(this).val();

				if(lingua == "pt-br"){ alert('Você selecionou: PORTUGUÊS'); }
				if(lingua == "es"){ alert('Você selecionou: ESPAÑOL'); }
				if(lingua == "en"){ alert('Você selecionou: ENGLISH'); }
			});
		</script>
	</body>
</html>