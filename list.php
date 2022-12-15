<?php include('template/head.php'); ?>
<?php include('database.php'); ?>

			<section class="products" >
				<div class="wrapper row products__row" >
					<?php
						$result = $db->prepare("SELECT * FROM products");
						$result->execute();
						while ($o = $result->fetch(PDO::FETCH_LAZY)) {
						?>
							<a href="index.php?id=<?php echo $o->id ?>" class="products__item plant" >
								<h4 class="plant__head" ><?php echo $o->title ?></h4>
								<p class="plant__price" ><?php echo $o->price ?> &#8381;</p>
							</a>
						<?php
						}
					?>
				</div>
			</section>

<?php include('template/foot.php'); ?>