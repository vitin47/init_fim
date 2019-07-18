<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Sobre:</h2>
                        <p>Loja fundada em 2019, prezamos pelo compromisso e transparência.Trabalhamos com vários tipos de produtos, todos 100% fiéis ás respectivas descrições e informações.
                        <br>
                            Em um site simples, rápido e pratico para melhor atender você consumidor. Qualquer dúvida entre em contato.
                        </p>
                        <div class="footer-social">
                            <a href="https://api.whatsapp.com/send?phone=5531997148987&text=Ol%C3%A1%20Nilton%2C%20vim%20atrav%C3%A9s%20do%20seu%20site." target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.instagram.com/niltonorquideas/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCc2DqL_n22mInrYfbY1Afbg?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href="/profile">Minha Conta</a></li>
                            <li><a href="/profile/orders">Meus Pedidos</a></li>
                            <li><a href="">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <?php require $this->checkTemplate("categories-menu");?>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Promoções</h2>
                        <p>Digite aqui seu e-mail para ficar por dentro das nossas promoções"</p>
                        <div class="newsletter-form">
                            <form method="get" action="/email">
                                <input type="email" name="email" placeholder="Digite seu email">
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright">
                        <p><i class="fas fa-envelope" style="margin-top: 1%;font-size: 20px;"></i> suporte@initstore.com.br</p>
                        <p><i class="fas fa-map-marker-alt" style="margin-top: 1%; font-size: 20px;"></i> Nova Lima - MG</p>
                        <p style="font-size: 15px">&copy; 2019 Init Store. <a href="niltonorquideas.com.br" target="_blank"> initstore.com.br</a></p>
                    </div>
                </div>
                
                <div class="col-md-4" style="margin-top: 2px;">
                	
                		<div class="col-md-6">
                			<p class="footer-style">Pagamento:</p>
		                    <div class="footer-card-icon">
		                        <img src="\res\site\img\pagsef.png">
		                    </div>
		                    <br>
		                    <div class="footer-card-icon">
		                        <img src="\res\site\img\oayy.png">
		                    </div>
		                </div>
                </div>

                <div class="col-md-4" style="margin-top: 2px;">
                	
                		<div class="col-md-6">
                			<p class="footer-style">Envio:</p>
		                    <div class="footer-card-icon">
		                        <img src="\res\site\img\frete_gratis2.gif">
		                    </div>
		                    <br>
		                    <div class="footer-card-icon">
		                        <img src="\res\site\img\envio.png">
		                    </div>
		                </div>
                    
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    
 
    
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="/res/site/js/owl.carousel.min.js"></script>
    <script src="/res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="/res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/res/site/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
	<script type="text/javascript" src="/res/site/js/script.slider.js"></script>
  </body>
</html>