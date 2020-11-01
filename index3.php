<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
    body {
        color: #fff; /*/Цвет текста на странице/*/
        background-attachment: fixed; /*/ Фон страницы фиксируется /*/
        background-repeat: repeat-x; /*/ Изображение повторяется по горизонтали */
        background-size: 100% 100%;
    }
   </style>
</head>
<body style="background-image: url(img/bg1.jpg);">
	<?php 	
		$connect = mysqli_connect('127.0.0.1','root','','Xakaton');
		$query_text = "SELECT * FROM Login";
		$query_text2 = "SELECT * FROM Plan";
		$message3 = mysqli_query($connect,'SELECT * FROM message3');
		$query = mysqli_query($connect, $query_text2);
		$Plans1 = $query->fetch_assoc();
		$Plans2 = $query->fetch_assoc();
		$Plans3 = $query->fetch_assoc();
		$Plans4 = $query->fetch_assoc();
		$query = mysqli_query($connect, $query_text); 
		$stroka1 = $query->fetch_assoc();
		$stroka2 = $query->fetch_assoc();
		$stroka3 = $query->fetch_assoc();
		$stroka4 = $query->fetch_assoc();
		$stroka5 = $query->fetch_assoc();
		$stroka6 = $query->fetch_assoc();
		$stroka7 = $query->fetch_assoc();
		$stroka8 = $query->fetch_assoc();
		$query_text4 = "SELECT * FROM Logo";
		$query = mysqli_query($connect, $query_text4); 
		$stro1 = $query->fetch_assoc();
		$stro2 = $query->fetch_assoc();
		$stro3 = $query->fetch_assoc();
		$stro4 = $query->fetch_assoc();
		$stro5 = $query->fetch_assoc();
		$stro6 = $query->fetch_assoc();
		$stro7 = $query->fetch_assoc();
		$stro8 = $query->fetch_assoc();
	?>
	<!-- Шапка сайта -->
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
					<h1 style="font-size: 100%; color: white;font-size: 25px;">Развивай свой бизнес с нами!</h1>
				</div>
			</div>
			<div class="col-2">
				<div class="row">
					<h4><a class="text-white ml-2 text-decoration-none" href="main.php">На главную</a></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="col-10 mx-auto pl-0 pr-0 bg-secondary">
		<!-- Баннер -->
		<div class="col-12 mx-auto pl-0 pr-0 bg-warning" style="height: 250px;  background-image: url();"></div>
		<!-- Информация о компании -->
		<div class="col-12 mx-auto pl-0 pr-0 d-flex" style="background: #2d2d2d">
			<div class="col-1 bg-secondary mt-3 ml-3 rounded mb-2" style="height: 130px;"></div>
			<div class="col-4 mt-3 pl-0 pr-0 ml-2 mb-2">
				<!-- Название -->
				<div class="col-12" style="height: 30%">
					<h2 style="color: white;">Название кампании</h2>
				</div>
				<!-- Описание -->
				<div class="col-12 mt-1" style="height: 50%">
					<h5 style="color: #868e96;">Краткое описание и уровня кампании</h5>
				</div>
			</div>			
		</div>
		<!-- Кнопки -->
		<div class="col-12 mx-auto pl-0 pr-0 bg-warning d-flex">
			<div class="col-8 pl-0 pr-0 bg-secondary pt-2" style="height: 60px;">
				<button class="ml-5 btn1"style="font-size: 100%; color: white;font-size: 20px;">Сотрудники</button>
				<button class="ml-5 btn2"style="font-size: 100%; color: white;font-size: 20px;">Планы</button>
				<button class="ml-5 btn4"style="font-size: 100%; color: white;font-size: 20px;">Сообщения</button>
				<button class="ml-5 btn5"style="font-size: 100%; color: white;font-size: 20px;">Уведомления</button>
			</div>
			<div class=" col-4 pl-0 pr-0 bg-secondary pt-2 text-center" style="height: 60px;">
				<button style="font-size: 100%; color: white;font-size: 20px;">Информация о компании</button>
			</div>
		</div>
	</div>
	<!-- Сотрудники -->
	<div class="biznes col-10 mx-auto pt-3 pl-0 pr-0 bg-secondary pb-5" style="display: none; ">
		<div class="row">
			<!-- Див Сотрудников -->
			<div class="col-9">
				<div class="col-12 d-flex">
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka1["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka1["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px; ">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka2["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka2["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka3["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka3["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka4["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka4["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
				</div>
				<div class="col-12 d-flex mt-4">
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka5["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka5["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px; ">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka6["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka6["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka7["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka7["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
					<div class="col mt-4 rounded pt-2 pb-2 ml-3" style="background: #808080">
						<div class="col-12 bg-warning " style="height: 40px;">
							<?php 
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka8["name"] . "</h4>"." ";
								echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $stroka8["surname"] . "</h4>";
							?>
						</div>
						<div class="col-12 bg-success mt-3 " style="height: 74px;"><h5 style="color: white;font-size: 15px;">Краткое описание и уровня кампании</h5></div>
					</div>
				</div>
			</div>
			<!-- здесь топ -->
			<div class="col-2 bg-dark pl-0 pr-0" style="height: 875px">
				<div class="border-warning border-bottom col-12 pl-0 pr-0">
					<h5 class="text-white ml-2 mt-2">Топ активных недели</h5>
				</div>
				<div class="col-12">
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#1</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#2</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#3</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#4</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#5</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#6</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#7</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#8</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0 border-secondary border-bottom" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#9</p>
							</div>
						</div>
					</div>
					<div class="col mr-2 mt-2 pl-0 pr-0" style="height: 75px;">
						<div class="row">
							<div class="col-9">
								<p class="text-white">Имя пользователя</p>
								<p class="text-white mb-5">Уровень</p>
							</div>
							<div class="col-3">
								<p class="text-white">#10</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Планы -->
	<div class="plans col-10 mx-auto pt-3 pl-0 pr-0 bg-secondary" style="display: none; ">
		<div class="col-7 mx-auto" style="margin-top: 10px; ">
			<div class="col-12 ">
			</div>
		</div>
		<div class="col-5 mt-3 pl-0 pr-0 bg-success " style="height: 100px;">
		<?php 
			echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans1["texts"] . "</h4>";
		?>
		<div class="col-12 mt-3 pl-0 pr-0">
			<?php 
				echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans1["whens"] . "</h4>";
			?>
			<button class="bt1">Завершить</button>
		</div>
		</div>
		<div class="col-5 mt-3 pl-0 pr-0 bg-success " style="height: 100px;">
		<?php 
			echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans2["texts"] . "</h4>";
		?>
		<div class="col-12 mt-3 pl-0 pr-0">
			<?php 
				echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans2["whens"] . "</h4>";
			?>
			<button class="bt1">Завершить</button>
		</div>
		</div>
		<div class="col-5 mt-3 pl-0 pr-0 bg-success " style="height: 100px;">
		<?php 
			echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans3["texts"] . "</h4>";
		?>
		<div class="col-12 mt-3 pl-0 pr-0">
			<?php 
				echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans3["whens"] . "</h4>";
			?>
			<button class="bt1">Завершить</button>
		</div>
		</div>
		<div class="col-5 mt-3 pl-0 pr-0 bg-success " style="height: 100px;">
		<?php 
			echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans4["texts"] . "</h4>";
		?>
		<div class="col-12 mt-3 pl-0 pr-0">
			<?php 
				echo "<h4" . 'style="color: white;font-size: 15px;"' . ">" . $Plans4["whens"] . "</h4>";
			?>
			<button class="bt1">Завершить</button>
		</div>
		</div>
	</div>
	<!-- Сообщения -->
	<div class="messing col-10 mx-auto pt-3 pl-0 pr-0" style="display: none; background: #7a7a7a">
		<div class="col-12 bg-secondsary ">
			<form action="message3.php" method="GET" class="d-flex">
				<textarea name="txt" class="form-control mb-2" placeholder="Заметки"></textarea>
				<button class="btn bg-success ml-2" style="height: 1%">Записать</button>
			</form>
		</div>
		<div>
			<?php 
				for ($i=0; $i < $num; $i++) { 
					$result[$i] = $message3->fetch_assoc();
					echo "<div class='d-flex'>"."<h4>".$stroka1["name"].':'."</h4>"."<h4 class='ml-3' style='color: #ebebeb'>".$result[$i]["text"]."</h4>"."</div>";		
				}
			 ?>
		</div>
	</div>
	<!-- Уведомления -->
	<div class="notification col-10 mx-auto pt-3 pl-0 pr-0 bg-secondary" style="height: 310px;display: none;">Уведомления</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<script>
	let b = document.querySelector(".biznes")
	let p = document.querySelector(".plans")
	let m = document.querySelector(".messing")
	let n = document.querySelector(".notification")
	let o = document.querySelector(".options")
	let b1 = document.querySelector(".btn1")
	let b2 = document.querySelector(".btn2")
	let b3 = document.querySelector(".btn2")
	let b4 = document.querySelector(".btn4")
	let b5 = document.querySelector(".btn5")

	b1.onclick = function(){
		b.style.display = "block";
		p.style.display = "none";
		m.style.display = "none";
		n.style.display = "none";
	}
	b2.onclick = function(){
		b.style.display = "none";
		p.style.display = "block";
		m.style.display = "none";
		n.style.display = "none";
	}
	b4.onclick = function(){
		b.style.display = "none";
		p.style.display = "none";
		m.style.display = "block";
		n.style.display = "none";
	}
	b5.onclick = function(){
		b.style.display = "none";
		p.style.display = "none";
		m.style.display = "none";
		n.style.display = "block";
	}
</script>
</html>