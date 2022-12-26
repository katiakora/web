
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>?id=<?php echo $product->id ?>" class="form" method="post" >
	<label>title <br/><input type="text" name="title" class="form__field" value="<?php echo $product->title ?>" /></label>
	<label>price <br/><input type="text" name="price" class="form__field" value="<?php echo $product->price ?>" /></label>
	<label>description <br/><textarea name="description" class="form__field" ><?php echo $product->description ?></textarea></label>
	<input type="submit" class="button form__submit" value="Сохранить" />
</form>