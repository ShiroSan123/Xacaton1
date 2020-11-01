<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="col-12">
		<div class="row">
			<div class="ml-auto" id="account">
				<button data-toggle="dropdown" title="Войти">
					<img src="cabinet2.svg">
					<p style="font-size: 120%" class="">Войти</p> 
				</button>
		       	<ul class="dropdown-menu dropdown-menu-left">
		            <li><a onclick="register();">Регистрация</a></li>
		          	<li><a onclick="login();">Авторизация</a></li>
		        </ul>
			</div>
		</div>
	</div>
	<div class="col-12 pl-0 pr-0" style="background:#008162; height: 70px;">
		<div class="col-8 mx-auto pt-3 pl-0 pr-0 text-center ">
			<a style="font-size: 100%; color: white" href=""><h5>Хочешь узнать как начать бизнес с нуля то тебе сюда!</h5></a>
		</div>
	</div>
	<div class="col-2 mx-auto box2" style="margin-top: 50px; background-color: white;">
		<div class="col-12">
			<form action="insert.php" method="GET">
				<input type="" name="gl" placeholder="Имя" class="col-12 text-center" style="height: 50px;">
				<input type="" name="gh" placeholder="Фамилия" class="col-12 mt-2 text-center" style="height: 50px;">
				<input type="" name="gk" placeholder="Пароль" class="col-12 mt-2 text-center" style="height: 50px;">
				<div class="text-center">
					<button class="mt-2 bg-success" style="font-family: arial;font-size: 25px;">Готово</button>
				</div>				
			</form>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<script>
	function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
	let chel = document.querySelector(".btn1");
	let boss = document.querySelector(".btn2");
	let b1 = document.querySelector(".box1");
	let b2 = document.querySelector(".box2");
	boss.onclick = function(){
		b2.style.display = "block";
		b1.style.display = "none";
	}
	chel.onclick = function(){
		b1.style.display = "block";
		b2.style.display = "none"
	}

</script>
</script>
</html>