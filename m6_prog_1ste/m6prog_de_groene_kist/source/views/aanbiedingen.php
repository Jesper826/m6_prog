<section class="products" id="products">
    <h2>Onze aanbiedingen (voorbeeld)</h2>
    <div class="product-grid">
        <?php
        $product_name = 'Herfsttomaten';
        $product_desc = 'Zoet en stevig — perfect voor salades.';
        $product_img = '/assets/img/tomato.svg';
        include __DIR__ . '/product-card.php';
        $product_name = 'Winterwortel';
        $product_desc = 'Biologisch geteeld, vol smaak.';
        $product_img = '/assets/img/carrots.svg';
        include __DIR__ . '/product-card.php';
        $product_name = 'Savooiekool';
        $product_desc = 'Krachtige bladstructuur, ideaal voor stamppotten.';
        $product_img = '/assets/img/cabbage.svg';
        include __DIR__ . '/product-card.php';
        ?>
    </div>
</section>