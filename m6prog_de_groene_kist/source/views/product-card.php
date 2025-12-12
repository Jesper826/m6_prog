<?php
$product_name = $product_name ?? 'Productnaam';
$product_desc = $product_desc ?? 'Beschrijving';
$product_img = $product_img ?? '';
?>

<article class="product-card">
    <?php if($product_img): ?>
        <img class="product-img" src="<?php echo htmlspecialchars($product_img, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product_name, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    <h3 class="product-name"><?php echo htmlspecialchars($product_name, ENT_QUOTES, 'UTF-8'); ?></h3>
    <p class="product-desc"><?php echo htmlspecialchars($product_desc, ENT_QUOTES, 'UTF-8'); ?></p>
</article>
