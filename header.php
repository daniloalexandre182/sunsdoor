<?php 
require_once("config.php");
//require_once("conexao.php");
//@session_start();
//$id_usuario = @$_SESSION['id_usuario'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head><meta charset="gb18030">
    
    <meta name="description" content="Venda de Roupas Masculina e Feminina">
    <?php if(@$palavras == ""){ ?>
    <meta name="keywords" content="botas masculinas, roupas femininas">
    <?php }else{ ?>
    <meta name="keywords" content="<?php echo $palavras ?>">
    <?php } ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nome_loja ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css?id=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    
</head>

<body>


    <!-- header -->
    <header id="topo" class="scroll-ancora">
        <div class="container-fluid header-frete">
            <div class="row">
                <div class="col-12 bg-black">
                    <p class="text-white text-center m-0">Frete gratis para Santos, São Vicente e Praia Grande!</p>
                </div>
            </div>
        </div>


        <div class="container">
            <!-- header-desktop -->
            <div class="row py-2 d-none d-lg-flex" id="header-desktop">
                <div class="col-lg-4">
                    <div class="header-logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo"></a> <span class="h1 align-middle">SUNS DOOR</span>
                    </div>
                </div>
                <div id="btn-header" class="col-lg-4 my-auto d-flex justify-content-center align-items-center">
                    <form>
                        <input class="btn-pesquisa" type="text" name="txtpesquisa" placeholder="Buscar">
                        <button class="btn-buscar"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 my-auto d-flex justify-content-center align-items-center">
                    <p><a href="login.php" class="header-link align-middle">ENTRAR</a> | <a href="cadastro.php" class="header-link align-middle">CADASTRE-SE</a></p>
                </div>
                <div class="col-lg-1 my-auto d-flex justify-content-center align-items-center">
                    <p><i class="fas fa-shopping-cart align-middle"></i> <span class="qtda_carrinho align-middle">0</span></p>
                </div>
            </div>
            <!-- //header-desktop -->
        </div>

        <nav id="nav-header" class="bg-azul navbar navbar-expand-lg justify-content-start">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- header-mobile -->
            <div id="header-mobile" class="d-lg-none">
                <div class="justify-content-center text-center ml-2">
                    <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="sobre.php">Pranchas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="clientes.php">Quilhas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="blog.php">Deck</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="contato.php">Leash</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="trabalhe-conosco.php">Roupas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="trabalhe-conosco.php">Acessórios</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="trabalhe-conosco.php">Capas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="trabalhe-conosco.php">Parafinas</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- whatsapp-fixed -->
        <div class="">
            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" class="whatsapp-fixed text-white" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
        <!-- //whatsapp-fixed -->
    </header>
    <!-- /header -->

