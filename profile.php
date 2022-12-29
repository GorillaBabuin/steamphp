<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5" style="background-color: #222431; height: 100%; display: flex;">
			<div class="col-3 bg-danger" style="height: 225px;">
				<img src="profile.jfif">
			</div>
			<div class="col-5 bg-primary" style="height: 225px;">
				<h1>ИМЯ: <?php echo $_GET['profilename'] ?></h1>
				<p>Эл. Почта: <?php echo $_GET['mail'] ?></p>
				<p>Возраст: <?php echo $_GET['age'] ?></p>
				<p class="text-success">
					<?php
                       if ($_GET['age']>=18) {
                       	  echo "ограничений нет";
                       } else{
                          echo "<p class='text-danger'>ограничения есть</p>";
                       }

					?>
				</p>
			</div>

			<div class="col-4 bg-warning" style="height: 225px;">
				<h2>Уровень 1</h2>
				<p>чета</p>
				<form action="redact.php" method="GET">
		         <input hidden value="<?php echo $_GET['password'] ?>" name="password"></input>
		        <button>
				   <a>Редактировать профиль</a>
			     </button>			
	         </form>
				
			</div>
		</div>
	</div>
	
</body>
</html>