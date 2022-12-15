<?php ini_set('display_errors',1); ?>
<!doctype html>
<html lang="ru" >
	<head>
		<title>МагаZина</title>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Nunito:wght@400;500;600;700&display=swap" />
		<link rel="stylesheet" href="style/main.css" />
	</head>
	<body>
		<header class="header" >
			<div class="wrapper row" >
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item" ><a class="header__link" href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.5 17.5L13.875 13.875" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
						<li class="header__item" ><a class="header__link" href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.50033 18.3333C7.96056 18.3333 8.33366 17.9602 8.33366 17.5C8.33366 17.0397 7.96056 16.6666 7.50033 16.6666C7.04009 16.6666 6.66699 17.0397 6.66699 17.5C6.66699 17.9602 7.04009 18.3333 7.50033 18.3333Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.6663 18.3333C17.1266 18.3333 17.4997 17.9602 17.4997 17.5C17.4997 17.0397 17.1266 16.6666 16.6663 16.6666C16.2061 16.6666 15.833 17.0397 15.833 17.5C15.833 17.9602 16.2061 18.3333 16.6663 18.3333Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M0.833008 0.833374H4.16634L6.39967 11.9917C6.47588 12.3754 6.6846 12.72 6.9893 12.9653C7.29399 13.2106 7.67526 13.3409 8.06634 13.3334H16.1663C16.5574 13.3409 16.9387 13.2106 17.2434 12.9653C17.5481 12.72 17.7568 12.3754 17.833 11.9917L19.1663 5.00004H4.99967" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
						<li class="header__item" ><a class="header__link" href="#">Sign Up</a></li>
						<li class="header__item" ><a class="header__link header__link__frame" href="#" >Sign In</a></li>
					</ul>
				</nav> 

			</div>
		</header>
		<main>
			<div class="crudheader" >
				<div class="wrapper row crudheader__row" > 
					<img class="crudheader__img" src="images/cta.jpg" alt="" />
					<div class="crudheader__block" >
						<h2 class="crudheade__head" ><?php echo $_SERVER['PHP_SELF'] ?></h2>
						<p class="crudheade__text" >
							<a href="create.php" class="button" >Create</a>
							<a href="list.php" class="button" >Read</a>
							<?php if(isset($_GET['id'])) { ?>
							<a href="update.php?id=<?php echo $_GET['id'] ?>" class="button" >Update</a>
							<a href="delete.php?id=<?php echo $_GET['id'] ?>" class="button" >Delete</a>
							<?php } ?>
						</p>
					</div>
				</div>
			</div>
<!-- head.html -->