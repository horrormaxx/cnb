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

    <div class="card-body p-0">
        <?php
           $conn = new mysqli("localhost", "root", "", "cnb");
           if($conn->connect_error){
               die("Ошибка: " . $conn->connect_error);
           }
           $sql = "SELECT * FROM users";
           if($result = $conn->query($sql)) {
               echo '<table class="table table-striped">
                       <thead>
                          <tr>
                             <th>Name</th>
                             <th>Score</th>
                             <th>Date</th>
                          </tr>
                       </thead>';
               foreach($result as $row){
                 echo "<tbody>";
                    echo "<tr>";
                       echo "<td>" . $row["name"] . "</td>";
                       echo "<td>" . $row["score"] . "</td>";
                       echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                 echo "</tbody>";
               }
               echo "</table>";
               $result->free();
           } else{
               echo "Ошибка: " . $conn->error;
           }
           $conn->close();
        ?>   
        </div>
    </main>
    
    <?php include 'page_elements/footer.php'; ?>
</body>
</html>