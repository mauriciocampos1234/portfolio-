<!-- Incluindo o arquivo config.php para navegar em vários diretórios lá na ullr do navegador depois das barras e assim carrega o css-->
<?php include('config.php'); ?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Portfólio | Maurício Campos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo/owl.carousel.min.css">
    <link rel="stylesheet" href="estilo/owl.theme.green.min.css">
    <link href="estilo/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="html, css, javascript, php">
    <meta name="description" content="Criação de sites, softwares, sistemas, aplicativos">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
</head><!--Fim HEAD-->

<body>

<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;

            case 'contato':
                echo '<target target="contato" />';
                break;

            case 'graduacoes':
                echo '<target target="graduacoes" />';
                break;

            case 'portfolio':
                echo '<target target="portfolio" />';
                break;
		}
	?>
    
    <header>

        <div class="center">
        
            <div class="logo left"><a href="/"><i class="fa-solid fa-code"></i> Maurício Campos <i class="fa-solid fa-code"></i></a></div><!--Fim LOGOMARCA-->
            
            <nav class="desktop right">
                <ul>
                <li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a title="graduacoes" href="<?php echo INCLUDE_PATH; ?>graduacoes">Graduações</a></li>
                    <li><a title="portfolio" href="<?php echo INCLUDE_PATH; ?>portfolio">Portfolio</a></li>
					<!-- <li><a realtime="noticias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li> -->
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul><!--Fim UL DESKTOP-->
            </nav><!--Fim NAV DESKTOP-->

            <nav class="mobile right">
                
            <div class="botao-menu-mobile">
                <i class="fa-solid fa-bars"></i>
                </div><!-- Fim botao-menu-mobile -->
                
                <ul>
                <li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a title="graduacoes" href="<?php echo INCLUDE_PATH; ?>graduacoes">Graduações</a></li>
                    <li><a title="portfolio" href="<?php echo INCLUDE_PATH; ?>portfolio">Portfolio</a></li>
					<!-- <li><a realtime="noticias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li> -->
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul><!--Fim UL MOBILE-->
            </nav><!--Fim NAV MOBILE-->
            <div class="clear"></div> <!-- Limpando flutuação -->
        
        </div><!--Fim center-->
    </header><!--Fim HEADER-->

<!--------------------------------------------------------->

    <?php

        if(file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        }else {
            if($url != 'depoimentos' && $url != 'servicos' && $url != 'contato' && $url != 'graduacoes' && $url != 'portfolio') {
            $pagina404 = true;
            include('pages/home.php');
            }else {
                include('pages/home.php');
            }
        }
    ?>

    <footer>
		<div class="center">
			<p>&copy;Todos os direitos reservados | Maurício Campos | CNPJ: 46.029.304/0001-82</p>
		</div><!--center-->
	</footer>

<script src="<?php echo INCLUDE_PATH; ?>js/jquery-3.7.1.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA0J1vo4tOUXgZUlhvq7CB0azhh8XGP68Q'></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<!-- <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script> -->

<!-- OWL Carrousel-->
<script src="<?php echo INCLUDE_PATH; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/owl.start.function.js"></script>
<!-- Formulário -->
<script src="<?php echo INCLUDE_PATH; ?>js/send.js"></script>
<!-- Jquery Mask -->
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.mask.min.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/mask-form.js"></script>

<script>
    $(function() {
        // var mensagem = 'Seja muito bem vindo(a)';
        // console.log(mensagem);
        // alert(mensagem);
    })
</script>
    
    <!-- Script do Mapa -->
    <script>
    (g => {
    var h, a, k, p = "The Google Maps JavaScript API",
    c = "google",
    l = "importLibrary",
    q = "__ib__",
    m = document,
    b = window;
    b = b[c] || (b[c] = {});
    var d = b.maps || (b.maps = {}),
    r = new Set,
    e = new URLSearchParams,
    u = () => h || (h = new Promise(async (f, n) => {
    await (a = m.createElement("script"));
    e.set("libraries", [...r] + "");
    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
    e.set("callback", c + ".maps." + q);
    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
    d[q] = f;
    a.onerror = () => h = n(Error(p + " could not load."));
    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
    m.head.append(a)
    }));
    d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })({
    key: "AIzaSyA0J1vo4tOUXgZUlhvq7CB0azhh8XGP68Q",
    v: "weekly",
    });
    </script>

</body><!--Fim BODY-->
</html><!--Fim HTML-->