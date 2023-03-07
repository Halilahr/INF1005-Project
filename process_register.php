<!DOCTYPE html>
<html>
    <head>
        <title>Registration Results</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    
    <?php
        include "link.inc.php";
    ?>
    
    <body>
        <?php
            include "nav.inc.php";
        ?>
        
        <main class="container">
            <hr>
            <?php

            $email = $errorMsg = "";
            $success = true;
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];


            if (empty($_POST["email"]))
            {
                $errorMsg .= "Email is required.<br>";
                $success = false;
            }
            else
            {
                $email = sanitize_input($_POST["email"]);
                // Additional check to make sure e-mail address is well-formed.
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $errorMsg .= "Invalid email format.<br>";
                    $success = false;
                }
            }

            if ($_POST['pwd']!= $_POST['pwd_confirm'])
            {
                $errorMsg .= "Passwords do not match.";
                $success = false;
            }
            //Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
                <?php
                if ($success)
                {
                    echo "<h3>Your registration is successful!</h3>";
                    echo "<h4>Thank you for signing up, " . $fname . " " . $lname . ".</h4>";
                    echo "<a class='btn btn-success'>Log-in</a>";
                }
                else
                {
                    echo "<h3>Oops!</h3>";
                    echo "<h4>The following input errors were detected:</h4>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<a href='register.php' class='btn btn-danger'>Return to Sign Up</a>";
                }
                ?>
        </main>       
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>