<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>
                            <?php echo $endereco_loja ?>
                        </li>
                        <li>Telefone:
                            <?php echo $telefone ?>
                        </li>
                        <li>Email:
                            <?php echo $email ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Principais Links</h6>
                    <ul>
                        <li><a href="contatos.php">Contatos</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="carrinho.php">Carrinho</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="lista-produtos">Lista de Produtos</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Ainda não possui Cadastro?</h6>
                    <p>Insira seu email para se cadastrar em nosso site!!</p>
                    <form action="sistema/index.php" method="get">
                        <input type="email" name="email_rodape" placeholder="Insira seu Email" required>
                        <button type="submit" class="site-btn">Cadastre-se</button>
                    </form>
                    <div class="footer__widget__social">
                        <a target="_blank" title="Ir para página do Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                        <a target="_blank"
                            href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>"
                            title="<?php echo $whatsapp ?>"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid border-top py-2">
    <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <p class="text-center">Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados |
                        Desenvolvido por <a href="https://www.daniloalexandre.com"
                            target="_blank">Danilo Alexandre</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascara.js"></script>




</body>

</html>