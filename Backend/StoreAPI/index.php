<?php
include('app.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dice Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">D&amp;D Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Our Products</h1>
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Start</a>
                    <a href="?cat=dice" class="list-group-item">Dices</a>
                    <a href="?cat=book" class="list-group-item">Books</a>
                    <a href="?cat=other" class="list-group-item">Others</a>

                    <!-- For Testing Purpose -->
                    <a href="?cat=No_Category" class="list-group-item">(For Test)</a>
                    <!-- For Testing Purpose -->
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9" id="mainbody">

                <?php
                App::main();
                ?>

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; <?php echo date('Y'); ?></p>
            <p class="m-0 text-center text-white">Jerry Johansson &amp; Felix Marcusson</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>