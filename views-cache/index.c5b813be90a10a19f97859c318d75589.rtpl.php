<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="/res/site/img/center-slider1.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Yorkshire <span class="primary"><strong>FILHOTES</strong></span>
							</h2>
							<h4 class="caption subtitle">Confira !</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Conferir</a>
						</div>
					</li>
					<li><img src="/res/site/img/center-slider6.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Ração Purina <span class="primary">Dog Chow</span>
							</h2>
							<h4 class="caption subtitle">Filhotes</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>
					</li>
					<li><img src="/res/site/img/center-slider2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Adoção <span class="primary">GATOS <strong>CACHORROS</strong></span>
							</h2>
							<h4 class="caption subtitle">Não deixe de conferir !</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Conferir</a>
						</div>
					</li>
					<li><img src="/res/site/img/center-slider4.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Ração <span class="primary">Purina <strong>CatShow</strong></span>
							</h2>
							<h4 class="caption subtitle">Castrados</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>
					</li>
					<li><img src="/res/site/img/center-slider5.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Ração <span class="primary">Premier <strong>Raças Específicas</strong></span>
							</h2>
							<h4 class="caption subtitle">Yorkshire</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>1 ano de garantia</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Frete grátis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Pagamento seguro</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Novos produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos</h2>
                        <div class="product-carousel">
                        <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    <div class="product-hover">
                                        <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i> Ver Detalhes</a>
                                    </div>
                                </div>
                                
                                <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                                </div> 
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="/res/site/img/brand1.png" alt="">
                            <img src="/res/site/img/brand2.png" alt="">
                            <img src="/res/site/img/brand3.png" alt="">
                            <img src="/res/site/img/brand4.png" alt="">
                            <img src="/res/site/img/brand5.png" alt="">
                            <img src="/res/site/img/brand6.png" alt="">
                            <img src="/res/site/img/brand1.png" alt="">
                            <img src="/res/site/img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->