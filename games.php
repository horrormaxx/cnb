<?php 
   session_start();
   if(!isset($_SESSION["user_id"])){
      // //header("location:/../index.php");
      // header ("location:../lt.php");
      // echo (":)");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rock Paper Scissor</title>
	<!-- Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">

	<?php include 'page_elements/header.php'; ?>

	<main>
	<?php
		$pdo = new PDO('mysql:host=localhost;dbname=cnb', 'root', '');
		echo $_SESSION["name"];

		$date = date("Y-m-d H:i:s"); 
		$query = $pdo->prepare("UPDATE users SET date = '$date' WHERE id = 1");
		$query->execute();
		
		$query = $pdo->prepare("SELECT score FROM users WHERE id = 1");
		$query->execute();
		$score = $query->fetchColumn();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    $playerChoice = $_POST['choice'];
		    $computerChoice = rand(0, 2);
		
		    if ($playerChoice == $computerChoice) {
		        $result = 'Ничья!';
		    } elseif (
		        ($playerChoice == 0 && $computerChoice == 1) ||
		        ($playerChoice == 1 && $computerChoice == 2) ||
		        ($playerChoice == 2 && $computerChoice == 0)
		    ) {
		        $result = 'Вы победили!';
		        $score++;
		    } else {
		        $result = 'Компьютер победил!';
		        
		    }
		
		    $query = $pdo->prepare("UPDATE users SET score = :score WHERE id = 1");
		    $query->bindParam(':score', $score);
		    $query->execute();
		}
	?>


    <h1>Камень, ножницы, бумага</h1>
    <p>Ваш текущий счет: <?php echo $score; ?></p>
    <form method="POST">
        <label>
            <input type="radio" name="choice" value="0"> Камень
        </label>
        <label>
            <input type="radio" name="choice" value="1"> Ножницы
        </label>
        <label>
            <input type="radio" name="choice" value="2"> Бумага
        </label>
        <button type="submit">Играть</button>
    </form>
	
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <p><?php echo $result; ?></p>
    <?php endif; ?>

    </main>

	<?php include 'page_elements/footer.php'; ?>

</body>
</html>
