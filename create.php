<?php include('database.php'); ?>
			
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
								$result = $db->prepare("INSERT INTO products (title,price,description) values (?,?,?)");
								$result->execute([
									$_POST['title'],
									$_POST['price'],
									$_POST['description']
								]);
								header('location: list.php?id='.$product->id);
							} else {}
						} else {}

						include('template/form.php'); 
					?>
				</div>
			</section>