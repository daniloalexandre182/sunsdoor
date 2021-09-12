<?php
require_once("header.php");
//require_once("conexao.php");
//@session_start();
?>

<!-- slide -->
<section id="carousel" class="container-fluid">
  <div class="carousel slide" id="slider" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner bg-dark">
      <div class="carousel-item active">
        <img src="img/slide-1.jpg" alt="Slide1" class="d-block mx-auto">
      </div>
      <div class="carousel-item">
        <img src="img/slide-2.jpg" alt="Slide2" class="d-block mx-auto">
      </div>
      <div class="carousel-item">
        <img src="img/slide-3.jpg" alt="Slide3" class="d-block mx-auto">
      </div>
    </div>
    <a href="#slider" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section>
<!-- //slide -->


<main class="container">
  <!-- Novidades -->
  <section id="novidades" class="mt-3">
    <div class="sec-titulo border-bottom">
      <a href="categoria.php"><h2>Novidades!</h2></a>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/bermuda.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/Bermuda azul.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa Azul</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/Blusa-azul.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Blusa estilosa azul</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/camisa-masc.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Camisa masculina FEIA</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- //Novidades -->

  <!-- Pranchas -->
  <section id="pranchas" class="mt-3">
    <div class="sec-titulo border-bottom">
      <a href="categoria.php"><h2>Pranchas!</h2></a>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/prancha1.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Prancha da boa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/prancha2.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Prancha foto 3</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/prancha1.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Prancha Sunsdoor</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/prancha2.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Prancha do Tiozão</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- //pranchas -->

  <!-- Leash -->
  <section id="leash" class="mt-3">
    <div class="sec-titulo border-bottom">
      <a href="categoria.php"><h2>Leash!</h2></a>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/leash.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/leash.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/leash.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/leash.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- //Leash -->

  <!-- Deck -->
  <section id="deck" class="mt-3">
    <div class="sec-titulo border-bottom">
      <a href="categoria.php"><h2>Deck!</h2></a>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/deck1.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/deck2.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/deck3.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="produto text-center p-3">
          <a href="produto.php">
            <div class="produto-img">
              <img src="img/produtos/deck1.jpg" alt="Bermuda" class="img-fluid">
            </div>
            <div class="produto-info">
              <div class="produto-titulo">
                <h4>Bermuda estilosa</h4>
              </div>
              <div class="produto-preco text-body">
                R$120,00
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- //Deck -->
</main>




<?php
require_once("footer.php");
//require_once("modal-carrinho.php");

?>






