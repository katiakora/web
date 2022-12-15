<?php include('template/head.php'); ?>
<?php include('database.php'); ?>

			<section class="product" >
				<div class="wrapper" >
					<?php 
						$product = false;
						if(isset($_GET)&&isset($_GET['id'])) {
							$result = $db->prepare("SELECT * FROM products where id = ?");
							$result->execute([$_GET['id']]);
							$product = $result->fetch(PDO::FETCH_LAZY);
						} else {}

						if($product == false) 
							header('location: index.php');

						if(isset($_POST)&&is_array($_POST)&&isset($_POST['title'])&&$product->id>0) {

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
								$result = $db->prepare("update products set title = ?, price = ?, description = ? where id = ? ");
								$result->execute([
									$_POST['title'],
									$_POST['price'],
									$_POST['description'],
									$product->id
								]);
								header('location: index.php?id='.$product->id);
							} else {}
						} else {}

						include('template/form.php'); 
					?>
				</div>
			</section>

<?php include('template/foot.php'); ?>