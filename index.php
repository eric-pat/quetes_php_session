<?php require 'inc/data/products.php';

session_start();

if(isset($_GET['add_to_cart'])) {
$id = $_GET['add_to_cart'];
if(isset($_SESSION['cart'][$id])) {
$_SESSION['cart'][$id]['quantity']++;
} else {
$_SESSION['cart'][$id] = array('quantity' => 1, 'name' => $catalog[$id]['name']);
}
}

require 'inc/head.php';

$cart = $_SESSION['cart'] ?? array();

?>

<section class="cookies container-fluid">
	<div class="row">
		<?php foreach ($catalog as $id => $cookie) {
			$quantity = $cart[$id]['quantity'] ?? 0;
			?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail text-center">
					<img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
					<figcaption class="caption">
						<h3><?= $cookie['name']; ?></h3>
						<p><?= $cookie['description']; ?></p>
						<a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
						</a>
					</figcaption>
				</figure>
			</div>
		<?php } ?>
	</div>
</section>

<?php require 'inc/foot.php'; ?>


