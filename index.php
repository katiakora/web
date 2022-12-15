<?php include('template/head.php'); ?>

	<?php if(!isset($_GET['id'])||(!is_numeric($_GET['id']))) { ?>
			<section class="products" >
				<div class="wrapper row products__row" >
					<?php
						$xml = simplexml_load_file('database.xml');
						foreach($xml->item as $o) {
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

	<?php } else { ?>

			<?php
				$xml = simplexml_load_file('database.xml');
				$product = $xml->xpath('//item[./id='.$_GET['id'].']')[0];
			?>
			<section class="product" >
				<div class="wrapper" >
					<h1 class="product__head" ><?php echo $product->title ?></h1>
					<p class="product__price" ><?php echo $product->price ?> &#8381;</p>
					<p class="product__desc" ><?php echo $product->description ?></p>
				</div>
			</section>
	<?php } ?>

<?php include('template/foot.php'); ?>