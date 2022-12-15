<?php include('template/head.php'); ?>

			<section class="product" >
				<div class="wrapper" >
					<?php 
						$product = false;
						if(isset($_GET)&&isset($_GET['id'])) {
							$xml = simplexml_load_file('database.xml');
							$product = $xml->xpath('//item[./id='.$_GET['id'].']')[0];
						} else {}

						if($product == false) 
							header('location: index.php');

						if(isset($_POST)&&is_array($_POST)&&isset($_POST['id'])&&$product) {
							$i = 0;
							foreach($xml->item as $item) {
								if($item->id == $_POST['id']) {
									unset($xml->item[$i]);
									break;
								} else {}
								$i++;
							}

							$max = 0;
							foreach($xml->item as $item) {
								print($max.' '.$item->id.' <br/>');
								if($max < (integer) $item->id) {
									$max = $item->id;
								} else {}
							}
							$xml->attributes()->max = $max;

							$xml->asXML('database.xml');
							header('location: index.php');
						} else {}
					?>
					<form action="" class="form" method="post" >
						<input type="hidden" name="id" value="<?php echo $product->id ?>" />
						<h2 class="product_head" ><?php echo $product->title ?></h2>
						<input type="submit" class="button form__submit" value="Удалить" />
						<a href="index.php" class="button button--ol" >Отмена</a>
					</form>
				</div>
			</section>

<?php include('template/foot.php'); ?>