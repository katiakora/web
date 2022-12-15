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

						if(isset($_POST)&&is_array($_POST)&&isset($_POST['title'])&&$product->id>0) {
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

								$xml->asXML('database.xml');
								header('location: index.php?id='.$product->id);
							} else {}
						} else {}

						include('template/form.php'); 
					?>
				</div>
			</section>

<?php include('template/foot.php'); ?>