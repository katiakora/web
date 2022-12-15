<?php include('template/head.php'); ?>

			<section class="product" >
				<div class="wrapper" >
					<?php 
						$product = (object) ['title' => '', 'price' => '', 'description' => ''];
						if(isset($_POST)&&is_array($_POST)&&isset($_POST['title'])) {
							$product->title = $_POST['title'];
							$product->price = $_POST['price'];
							$product->description = $_POST['description'];

							$rec = true;
							if(!is_string($_POST['title'])||strlen($_POST['title'])<3) {
								$rec = false;
								?><div class="form__error" >Не верно заполнено название продукта</div><?php
							} else {}

							if(!is_numeric($_POST['price'])||$_POST['price']<=0) {
								$rec = false;
								?><div class="form__error" >Не верно заполнена цена продукта</div><?php
							} else {}

							if(!is_string($_POST['description'])||strlen($_POST['description'])<3) {
								$rec = false;
								?><div class="form__error" >Не верно заполнено описание продукта</div><?php
							} else {}

							if($rec) {
								$xml = simplexml_load_file('database.xml');
								$product->id = $xml->attributes()->max + 1;
								
								$item = $xml->addChild('item');
								$item->addChild('id', $product->id);
								$item->addChild('title', $product->title);
								$item->addChild('price', $product->price);
								$item->addChild('description', $product->description);

								$xml->attributes()->max = $product->id;
								$xml->asXML('database.xml');
								header('location: index.php?id='.$product->id);
							} else {}
						} else {}

						include('template/form.php'); 
					?>
				</div>
			</section>

<?php include('template/foot.php'); ?>