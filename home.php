<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    
    <?php include 'page_elements/header.php'; ?>

    <main>
        <div class="position-absolute top-50 start-50 translate-middle"> 
            <div class="card border-secondary mb-3" style="max-width: 18rem;">

                <div class="card-header">
                    
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <section class="h-100">
                                <header class="container h-100">
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <div class="d-flex flex-column">
                                            <a href="games.php" class="btn btn-danger align-self-center p-2"><i class="bi bi-pc-display"></i> Singleplayer</a>
                                            <!-- <section style="padding-top: 10px;">
                                                <button class="btn btn-danger disabled"><i class="bi bi-person"></i> Multiplayer</button>
                                            </section> -->
                                        </div>
                                    </div>
                                </header>
                            </section>
                        </div>
                    </div> 
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <section class="h-100">
                                <header class="container h-100">
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <div class="d-flex flex-column">
                                            <!-- <a href="-" class="btn btn-primary align-self-center p-2"><i class="bi bi-house"></i> Profile</a> -->
                                            <section style="padding-top: 10px;">
                                                <a href="leaderbord.php" type="button" class="btn btn-primary">
                                                    <i class="bi bi-house"></i> Score
                                                </a>
                                            </section>
                                        </div>
                                    </div>
                                </header>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div> 
    </main>
    
    <?php include 'page_elements/footer.php'; ?>	
    
</body>
</html>