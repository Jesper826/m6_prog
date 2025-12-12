<?php
include_once __DIR__ . '/../dataclasses/Product.php';
?>
 
<main>
    <section class="content-section">
        <h2>Groente</h2>
        <div class="product-grid">
            <?php
            $products = Product::GetAllGroente($connection);
            foreach ($products as $product): ?>
                <?php include("../source/views/Product.php"); ?>
            <?php endforeach; ?>
        </div>
    </section>
</main>
      
                if ($product['korting']) {
                    $product_desc .= ' - ' . $product['korting'] . '% korting!';
                }
                
                $product_desc .= ' - €' . number_format($product['prijs'], 2, ',', '.');
                
                $product_img = '/assets/img/vegetable.svg';
                include __DIR__ . '/../views/product-card.php';
            }
        } else {
            echo '<p>Geen groenten beschikbaar.</p>';
        }
        ?>
    </div>
</section>
