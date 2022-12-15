<?php include('template/head.php'); ?>

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

<?php include('template/foot.php'); ?>