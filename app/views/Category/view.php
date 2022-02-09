<!-- banner-bootom-w3-agileits -->
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
    <div class="container">
        <?php if ($products) : ?>
            <?php $curr = \shop\App::$app->getProperty('currency'); ?>
            <div class="single-pro">
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="images/<?= $product->img; ?>" alt="" class="pro-image-front">
                                <img src="images/<?= $product->img; ?>" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="product/<?= $product->alias; ?>"><?= $product->title; ?></a></h4>
                                <div class="info-product-price">
                                    <span class="item_price"><?= $curr['symbol_left'] ?><?= $product->price * $curr['value']; ?><?= $curr['symbol_right']; ?></span>
                                    <?php if ($product->old_price) : ?>
                                        <del><?= $curr['symbol_left'] ?><?= $product->old_price * $curr['value']; ?><?= $curr['symbol_right']; ?></del>
                                    <?php endif; ?>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="cart/add?id=<?= $product->id; ?>" method="post">
                                        <fieldset>
                                            <input type="submit" name="submit" value="Add to cart" id="cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m2.jpg" alt="" class="pro-image-front">
                         <img src="images/m2.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Gabi Full Sleeve Sweatshirt</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$45.99</span>
                             <del>$69.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Sweatshirt" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m3.jpg" alt="" class="pro-image-front">
                         <img src="images/m3.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Dark Blue Track Pants</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$80.99</span>
                             <del>$89.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Dark Blue Track Pants" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m4.jpg" alt="" class="pro-image-front">
                         <img src="images/m4.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Round Neck Black T-Shirt</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$190.99</span>
                             <del>$159.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Black T-Shirt" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m5.jpg" alt="" class="pro-image-front">
                         <img src="images/m5.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Men's Black Jeans</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$60.99</span>
                             <del>$90.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Men's Black Jeans" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m7.jpg" alt="" class="pro-image-front">
                         <img src="images/m7.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Analog Watch</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$160.99</span>
                             <del>$290.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Analog Watch" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m6.jpg" alt="" class="pro-image-front">
                         <img src="images/m6.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Reversible Belt</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$30.99</span>
                             <del>$50.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Reversible Belt" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-md-3 product-men">
                 <div class="men-pro-item simpleCart_shelfItem">
                     <div class="men-thumb-item">
                         <img src="images/m8.jpg" alt="" class="pro-image-front">
                         <img src="images/m8.jpg" alt="" class="pro-image-back">
                         <div class="men-cart-pro">
                             <div class="inner-men-cart-pro">
                                 <a href="single.html" class="link-product-add-cart">Quick View</a>
                             </div>
                         </div>
                         <span class="product-new-top">New</span>

                     </div>
                     <div class="item-info-product ">
                         <h4><a href="single.html">Party Men's Blazer</a></h4>
                         <div class="info-product-price">
                             <span class="item_price">$260.99</span>
                             <del>$390.71</del>
                         </div>
                         <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                             <form action="#" method="post">
                                 <fieldset>
                                     <input type="hidden" name="cmd" value="_cart" />
                                     <input type="hidden" name="add" value="1" />
                                     <input type="hidden" name="business" value=" " />
                                     <input type="hidden" name="item_name" value="Party Men's Blazer" />
                                     <input type="hidden" name="amount" value="30.99" />
                                     <input type="hidden" name="discount_amount" value="1.00" />
                                     <input type="hidden" name="currency_code" value="USD" />
                                     <input type="hidden" name="return" value=" " />
                                     <input type="hidden" name="cancel_return" value=" " />
                                     <input type="submit" name="submit" value="Add to cart" class="button" />
                                 </fieldset>
                             </form>
                         </div>

                     </div>
                 </div>
             </div> -->
                <div class="clearfix"></div>
            </div>
        <?php endif; ?>

    </div>
</div>
<!-- //mens -->