<?php
require 'inc/head.php';
require 'inc/data/products.php';

// Démarrer la session
session_start();

// Vérifier si le panier existe dans la session
$cart = $_SESSION['cart'] ?? array();

?>
<section class="cookies container-fluid">
	<div class="row">
		<?php foreach ($cart as $id => $item) { ?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail text-center">
					<img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
					<figcaption class="caption">
						<h3><?= $catalog[$id]['name']; ?></h3>
						<p><?= $catalog[$id]['description']; ?></p>
						<p>Quantity: <?= $item['quantity']; ?></p>
					</figcaption>
				</figure>
			</div>
		<?php } ?>
	</div>
</section>
<?php require 'inc/foot.php'; ?>


