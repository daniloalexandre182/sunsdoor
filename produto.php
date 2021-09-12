<?php
    require_once("header.php");
?>

<main class="container">
    <section id="produto" class="my-3">
        <div class="row">
            <div class="d-md-block d-sm-none col-md-1 produto-imagens p-0">
                <img src="img/produtos/Bermuda azul.jpg" alt="" class="img-fluid mb-3">
                <img src="img/produtos/bermuda.jpg" alt="" class="img-fluid mb-3">
                <img src="img/produtos/Bermuda azul.jpg" alt="" class="img-fluid mb-3">
            </div>
            <div class="col-12 col-md-6">
                <div class="produto-img">
                    <img src="img/produtos/bermuda.jpg" alt="Bermuda" class="img-fluid">
                  </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="produto-info">
                    <div class="row">
                        <div class="col-12">
                            <div class="produto-titulo">
                                <h3>Bermuda preta e cinza</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top py-2">
                        <div class="col-7 produto-preco">
                            <span class="produto-valor">R$ 150,00</span>
                            <span class="produto-parcelado">3x de R$50,00 sem juros</span>
                        </div>
                        <div class="col-5 produto-preco">
                            <a href="#" class="btn btn-lg btn-primary align-middle text-center">COMPRAR</a>
                        </div>
                    </div>
                    <div class="row border-top py-2">
                        <div class="col-6 produto-forma-pag">
                            <span>Transferência / PIX</span>
                        </div>
                        <div class="col-6">
                            <span>R$ 135,00 (10% de desconto)</span>
                        </div>
                    </div>
                    <div class="row border-top py-2">
                        <div class="col-6 produto-forma-pag">
                            <span>Boleto</span>
                        </div>
                        <div class="col-6">
                            <span>R$ 135,00 (10% de desconto)</span>
                        </div>
                    </div>
                    <div class="row border-top py-2">
                        <div class="col-6 produto-forma-pag">
                            <span>Cartão de Crédito</span>
                        </div>
                        <div class="col-6">
                            <span>R$ 150,00</span>
                        </div>
                    </div>
                    <div class="row border-top py-2">
                        <div class="col-3 produto-frete">
                            <label for="cep">Frete</label>
                        </div>
                        <div class="col-5">
                            <input type="texte" class="form-control" id="cep" placeholder="CEP">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary mb-2">CALCULAR</button>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="prodito-info my-4">
            <div class="row">
                <div class="col-12">
                    <h3 class="bg-primary font-weight-bold p-2">Informações do Produto</h3>
                    <p><span>Toalha Poncho para troca de roupas Silverbay - Roupão de Surfista toalhado</span></p>
                    <p>Chega de sofrimento na hora de trocar de roupa na beira da praia.</p>
                    <p>O Poncho Roupão é usado para facilitar a vida do surfista na hora de trocar de roupa em locais públicos.</p>
                    <p>Além disso, o modelo de ponchos da Bully's é confeccionado com tecido de toalha, 100% algodão, e além de se trocar, você pode utiliza-lo para se secar, tirando a necessidade de levar uma toalha junto no seu bate volta ou surf trip.</p>
                    <p>O Roupão possui capuz, e bolso interno.</p>
                    <p>O Material é um tecido muito leve e confortável.</p>
                    <p>Sobre a Bullys: é uma marca de acessórios para surf e nasceu na região da Califórnia, EUA. A marca esta presente no Brasil, e vem se destacando nos últimos anos pela qualidade e preços baixo, tendo o melhor custo x benefício. Conta com um team de atletas renomados como: Ítalo Ferreira, Jadson André, Rodrigo Koxa, Marcelo Trekinho, Marcos Sifu, Guilherme Silve, Kaue Germano, Flavio Nakagima, Sergio Laus, entre outros</p>
                </div>
            </div>
        </div>
    </section>
    <section class="produtos-relacionados">
        <div class="sec-titulo border-bottom">
            <h2>Produtos Relacionados!</h2>
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
        <hr>
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
</main>

<?php include_once("footer.php"); ?>