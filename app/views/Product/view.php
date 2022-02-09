<!--/single_page-->
<!-- /banner_bottom_agile_info -->
<div class="banner-bootom-w3-agileits">
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<?= $breadcrumbs ?>
				</ol>
			</div>
		</div>
	</div>
	<!-- banner-bootom-w3-agileits -->
	<?php if ($product) : ?>
		<?php $curr = \shop\App::$app->getProperty('currency'); ?>
		<div class="banner-bootom-w3-agileits">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">

							<ul class="slides">
								<li data-thumb="images/<?= $product->img; ?>">
									<div class="thumb-image"> <img src="images/<?= $product->img; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<?php if ($gallery) : ?>
									<?php foreach ($gallery as $item) : ?>
										<li data-thumb="images/<?= $item->img ?>">
											<div class="thumb-image"> <img src="images/<?= $item->img ?>" data-imagezoom="true" class="img-responsive"> </div>
										</li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?= $product->title; ?></h3>
					<p><span class="item_price"><?= $curr['symbol_left']; ?><?= $product->price * $curr['value']; ?><?= $curr['symbol_right']; ?></span>
						<?php if ($product->old_price) : ?>
							<del><?= $curr['symbol_left']; ?><?= $product->old_price * $curr['value']; ?><?= $curr['symbol_right']; ?></del>
						<?php endif; ?>
					</p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<!-- <div class="description">
					<h5>Check delivery, payment options and charges at your location</h5>
					<form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
					</form>
				</div> -->
					<!-- <div class="color-quality">
					<div class="color-quality-right">
						<h5>Quality :</h5>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null">5 Qty</option>
							<option value="null">6 Qty</option>
							<option value="null">7 Qty</option>
							<option value="null">10 Qty</option>
						</select>
					</div>
				</div> -->
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
						<form action="cart/add?id=<?= $product->id; ?>" method="post">
							<fieldset>
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>
			</div>
			<div class="clearfix"> </div>
			<!-- /new_arrivals -->
			<?php if ($product->content) : ?>
				<div class="responsive_tabs_agileits">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<!-- <li>Reviews</li>
					<li>Information</li> -->
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">

								<div class="single_page_agile_its_w3ls">
									<p><?= $product->content; ?></p>
								</div>
							</div>
							<!--//tab_one-->
							<!-- <div class="tab2">

						<div class="single_page_agile_its_w3ls">
							<div class="bootstrap-tab-text-grids">
								<div class="bootstrap-tab-text-grid">
									<div class="bootstrap-tab-text-grid-left">
										<img src="images/t1.jpg" alt=" " class="img-responsive">
									</div>
									<div class="bootstrap-tab-text-grid-right">
										<ul>
											<li><a href="#">Admin</a></li>
											<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
											suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
											vel eum iure reprehenderit.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="add-review">
									<h4>add a review</h4>
									<form action="#" method="post">
										<input type="text" name="Name" required="Name">
										<input type="email" name="Email" required="Email">
										<textarea name="Message" required=""></textarea>
										<input type="submit" value="SEND">
									</form>
								</div>
							</div>

						</div>
					</div>
					<div class="tab3">

						<div class="single_page_agile_its_w3ls">
							<h6>Big Wing Sneakers (Navy)</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
						</div>
					</div> -->
						</div>
					</div>
				</div>
			<?php endif; ?>
			<!-- //new_arrivals -->
			<!--/slider_owl-->
			<?php if ($related) : ?>
				<div class="w3_agile_latest_arrivals">
					<h3 class="wthree_text_info">Related <span>Product</span></h3>
					<?php foreach ($related as $item) : ?>
						<div class="col-md-3 product-men single">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/<?= $item['img']; ?>" alt="" class="pro-image-front">
									<img src="images/<?= $item['img']; ?>" alt="" class="pro-image-back">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="product/<?= $item['alias']; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"><?= $item['title'] ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $curr['symbol_left']; ?><?= $item['price'] * $curr['value']; ?><?= $curr['symbol_right']; ?></span>
										<?php if ($item['old_price']) : ?>
											<del><?= $curr['symbol_left']; ?><?= $item['old_price'] * $curr['value']; ?><?= $curr['symbol_right']; ?></del>
										<?php endif; ?>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="cart/add?id=<?= $item['id']; ?>" method="post">
                                        <fieldset>
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>

								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="clearfix"> </div>
					<!--//slider_owl-->
				</div>
			<?php endif; ?>
			<?php if ($recently) : ?>
				<div class="w3_agile_latest_arrivals">
					<h3 class="wthree_text_info">Recently <span>Viewed</span></h3>
					<?php foreach ($recently as $item) : ?>
						<div class="col-md-3 product-men single">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/<?= $item->img; ?>" alt="" class="pro-image-front">
									<img src="images/<?= $item->img; ?>" alt="" class="pro-image-back">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="product/<?= $item->alias; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"><?= $item->title; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $curr['symbol_left']; ?><?= $item->price * $curr['value']; ?><?= $curr['symbol_right']; ?></span>
										<?php if ($item->old_price) : ?>
											<del><?= $curr['symbol_left']; ?><?= $item->old_price * $curr['value']; ?><?= $curr['symbol_right']; ?></del>
										<?php endif; ?>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
										<form action="cart/add?id=<?= $item->id; ?>" method="post">
											<fieldset>
												<input type="submit" name="submit" value="Add to cart" id="cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="clearfix"> </div>
					<!--//slider_owl-->
				</div>
			<?php endif; ?>
		</div>
</div>
<?php endif; ?>

<!--//single_page-->