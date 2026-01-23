<?php
include_once __DIR__ . '/../dataclasses/Product.php';
include_once __DIR__ . '/../dataclasses/Aanbieding.php'; 
?>

<main>
    <section class="content-section">
        <h2>Groente</h2>
        <div class="product-grid">
            <?php
            $products = Product::GetAllGroente($connection);
            if (!empty($products)) {
                foreach ($products as $product): ?>
                    <?php include __DIR__ . '/../views/Product.php'; ?>
                <?php endforeach;
            } else {
                echo '<p>Geen groenten beschikbaar.</p>';
            }
            ?>
        </div>
    </section>
</main>