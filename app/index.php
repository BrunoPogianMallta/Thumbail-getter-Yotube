<!DOCTYPE html>

<html>

<head>

	<title>Pegar Thumbnail - Youtube</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta name="author" content="Bruno Pogian Mallta">

	<meta name="description" content="Pegar Thumbnail do Youtube - Site fácil de ser utilizado" />
	<meta name="description" content="Get Thumbnail from Youtube - Easy to use site" />

	<meta name="keywords" content="pegar thumbnail, gerar thumbnail" />
	<meta name="keywords" content="grab thumbnail, generate thumbnail" />

	<meta name="robots" content="index,follow">

	<meta property="og:title" content="Pegar Thumbnail">
	<meta property="og:title" content="Get Thumbnail">

	<meta property="og:site_name" content="Pegar Thumbnail">
	<meta property="og:site_name" content="Get Thumbnail">

	<meta property="og:description" content="Pegar Thumbnail do Youtube - Site fácil de ser utilizado">
	<meta property="og:description" content="Get Thumbnail from Youtube - Easy to use site">

	<meta property="og:url" content="">

	<meta property="og:image" content="https://www.linkedin.com/in/bruno-p-%C3%B3g%C3%AFan-mallta-520527200/">

	<meta property="og:image:type" content="image/jpeg">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>

	<div class="container">

			<h2>Pegue Thumbnail de Qualquer Vídeo do Youtube</h2>

			<p>Para pegar a Thumbnail do vídeo do Youtube<br/>

			Basta inserir a URL, no formato abaixo:<br/>

		<b>http://www.youtube.com/watch?v=erLk59H86ww</b></p>

		<form method="post">

			<input type="text" name="url">

			<input type="submit" name="acao" value="Pegar Thumb!">

		</form>

		
        <div class="img-frame">
		<?php

			if(isset($_POST['acao'])){

				$url = $_POST['url'];



				$videoCode = explode('=',$url);

				//echo $videoCode[1];

				/*

					https://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg

					For the high quality version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg

					There is also a medium quality version of the thumbnail, using a URL similar to the HQ:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg

					For the standard definition version of the thumbnail, use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg

					For the maximum resolution version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg

				*/

				header('Location: http://localhost/Thumbail-getter-Yotube/app?code='.$videoCode[1]);
				



			}else if(isset($_GET['code'])){

				echo '<h2>Sua Thumbnail:</h2>';
				echo '<br/>';
				echo '<img src="http://img.youtube.com/vi/'.$_GET['code'].'/maxresdefault.jpg" />';

			}



		?>
        </div>
		<!-- <a href="/img.youtube.com/vi/'.$_GET['code'].'/maxresdefault.jpg" download="maxresdefault.jpg">Baixe! </a> -->


		<p>Esta ferramenta foi desenvolvida por : Bruno Poggian Mallta</b>.</p>

	</div>

</body>

</html>