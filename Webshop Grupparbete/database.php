<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form action="" class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center">
                            <h2>Admin Login</h2>
                        </legend>
                        <!-- Username input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="username">Username</label>
                            <div class="col-md-9">
                                <input id="username" name="username" type="username" placeholder="Username" class="form-control" required>
                            </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">Password</label>
                            <div class="col-md-9">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control" required>
                            </div>
                        </div>

                        <!-- Login -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button action="admin.php" type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

require_once('admin/login.php');

$dbUser = $_POST['username'];
$dbPass = $_POST['password'];

$dbServer = "localhost";
$dbName = "storedb";
$dbDSN = "mysql:dbname=$dbName; host=$dbServer";

try {
    $conn = new PDO($dbDSN, $dbUser, $dbPass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    echo "<p>Conection Failed</p>" . $e->getMessage();
    exit(1);
}
