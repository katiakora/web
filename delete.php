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

						if(isset($_POST)&&is_array($_POST)&&isset($_POST['id'])&&$product) {
							$result = $db->prepare("delete from products where id = ?");
							$result->execute([$_POST['id']]);
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