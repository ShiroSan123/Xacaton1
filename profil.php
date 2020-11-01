<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		body {
		    color: #fff;
		    background-attachment: fixed;
		    background-repeat: repeat-x;
		    background-size: 100% 100%;
	</style>
</head>
<body style="background-image: url(img/bg1.jpg);">
<?php 
	$connect = mysqli_connect('127.0.0.1','root','','Xakaton');
	$query_text = "SELECT * FROM Login";
	$query = mysqli_query($connect, $query_text); 
	$stroka1 = $query->fetch_assoc();
	$query_text4 = "SELECT * FROM Logo";
	$query = mysqli_query($connect, $query_text4); 
	$stro1 = $query->fetch_assoc();
	$stro2 = $query->fetch_assoc();
 ?>
	<div class="col-12 bg-dark">
		<div class="row">
			<div class="col-4">
				<div class="row">
					<img class="" src="img/logo.png" style="height: 60px;">
					<h4><a class="text-white ml-2 text-decoration-none" href="main.php">Название</a></h4>
				</div>
			</div>
			<div class="col-6">
				<div class="row">
					<h4><a class="text-white ml-2 text-decoration-none" href="">Каталог</a></h4>
					<h4><a class="text-white ml-2 text-decoration-none" href="">Поиск</a></h4>
					<h4><a class="text-white ml-2 text-decoration-none" href="">Форум</a></h4>
					<h4><a class="text-white ml-2 text-decoration-none" href="">FAQ</a></h4>
					<h4><a class="text-white ml-2 text-decoration-none" href="">Прочее</a></h4>
				</div>
			</div>
			<div class="col-2">
				<div class="row">
					<h4><a class="text-white ml-2 text-decoration-none" href="main.php">На главную</a></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="col-11 mx-auto mt-4">
		<div class="row">
			<div class="col-8 ml-4 pl-0 pr-0" style="height: 500px">
				<div class="col-12 bg-dark" style="height: 238px;">
					<h4 class="text-white">Редактирование профиля</h4>
					<div class="row">
						<div class="col-6">
							<form action="insert.php" method="GET">
								<input type="" name="gu" placeholder="Описание" class="col-12 mt-2 text-center" style="height: 40px;">
								<input type="" name="go" placeholder="Аватарка" class="col-12 mt-2 text-center" style="height: 40px;">
								<div class="text-center">
									<button class="mt-2 bg-success" style="font-family: arial;font-size: 25px;">Готово</button>
								</div>				
							</form>
						</div>
						<div class="col-6 mx-auto pl-0 pr-0 d-flex" style="background: #2d2d2d">
							<div class="col-3 bg-secondary mt-3 ml-3 rounded mb-2" style="height: 130px;">
								<?php 
									 echo '<img' . ' style="width: 90%;"'. ' src="' . $stro1["logo"] . '">';
								 ?>
							</div>
							<div class="col-4 mt-3 pl-0 pr-0 ml-2 mb-2">
								<!-- Название -->
								<div class="col-12" style="height: 30%">
									<?php 
										echo "<h5 style='color: white;font-size: 25px;'>".$stroka1["name"]."</h5>"
									 ?>
								</div>
								<!-- Описание -->
								<div class="col-12 mt-2" style="height: 50%">
									<?php 
										echo "<h5 style='color: white;font-size: 25px;'>".$stro2["prof"]."</h5>"
									 ?>
								</div>
							</div>			
						</div>
					</div>
				</div>
				<div class="col-12 mt-4" style="">
					<div class="row">
						<div class="col bg-dark pl-0 pr-0" style="height: 238px;">
							<div class="row">
								<h5 class="text-white ml-4 mt-2 pl-0 pr-0">Последние новости</h5>
							</div>
							<div class="row">
								<p class="text-white ml-4 mt-2 pl-0 pr-0">Название новости</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">Автор</p>
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">время</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0">Название новости</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">Автор</p>
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">время</p>
							</div>
						</div>
						<div class="col bg-dark ml-4 pl-0 pr-0" style="height: 238px;">
							<div class="row">
								<h5 class="text-white ml-4 mt-2 pl-0 pr-0">Последние темы форумов</h5>
							</div>
							<div class="row">
								<p class="text-white ml-4 mt-2 pl-0 pr-0">Название форума</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">Автор</p>
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">время</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0">Название форума</p>
							</div>
							<div class="row">
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">Автор</p>
								<p class="text-white ml-4 pl-0 pr-0 text-secondary">время</p>
							</div>
							<div class="row">
								<button class="bg-success rounded text-white ml-auto mr-4">+Помощь командам</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3 bg-dark ml-4" style="height: 500px">
				
			</div>
		</div>
	</div>
</body>
</html>