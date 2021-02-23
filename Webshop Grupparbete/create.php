<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once("database.php");

    $name = htmlspecialchars(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $email = htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $message = htmlspecialchars(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

    if (isset($name, $email, $message)) {
        if (strlen($name) < 50 && strlen($email) < 50) {
            if ($email === filter_var($email, FILTER_VALIDATE_EMAIL)) {

                //Prepare input
                $stmt = $conn->prepare("INSERT INTO contactform (name, email, message) VALUE (:name, :email, :message)");

                //Bind input
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':message', $message);

                //Execute and save
                $stmt->execute();

                $last_id = $conn->lastInsertId();
                $mess = "<div class='alert alert-success' role='alert'>
            <p>$name har sparats i databasen med id=$last_id</p></div>";
            } else {
                $errEmail = "<div class='alert alert-danger' role='alert'>Your Email Adress is invalid, try again! </div>";
            }
        } else {
            $errMsg = "<div class='alert alert-danger' role='alert'>Your input is too long, max input Name &amp; email 50 characters.</div>";
        }
    } else {
        $errMsg = "<div class='alert alert-danger' role='alert'>You need to enter text in all fields</div>";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form action="" class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center">
                            <h2>Contact Form</h2>
                        </legend>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="email" placeholder="Your email" class="form-control" required>
                                <span class="error"> <?php if (isset($errEmail)) echo $errEmail; ?> </span>
                            </div>
                        </div>

                        <!-- Message input -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Please enter your message here..." rows="5" required></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <span class="error"> <?php if (isset($mess)) echo "$mess"; ?> </span>
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                <span> <?php if (isset($errErr)) echo $errErr; ?> </span>

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-12 text-right"><button><a href="admin/admin.php"><b>Admin</b></a></button></div>
        </div>
    </div>
</div>