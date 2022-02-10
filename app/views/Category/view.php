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
                <!-- <div class="clearfix"></div> -->
            </div>
            <div class="text-center">
                    <p>(<?= count($products) ?> товара(ов) из <?= $total; ?>)</p>
                    <?php if ($pagination->countPages > 1) : ?>
                        <?= $pagination; ?>
                    <?php endif; ?>
                <?php else : ?>
                    <h4>In this category no products... </h4>
                <?php endif; ?>
                </div>
    </div>

</div>

<!-- //mens -->