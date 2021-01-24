<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="stylesheet" href="css/contact.css">

    <title>Login</title>
    
    
</head>
<body>

    <div id="start">
        
        <div id="layout">

            <div>

                
                <?php include 'navbar.php' ?>
                
                <section class="container">
                    <div class="inner_container">
                        <div class="content">
                            <h2 class="title">Student Council 2020-21 Login</h2>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

                                <div class="form_item" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Username" name="username" autocomplete="off" type="text" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $username_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Password" name="password" autocomplete="off" type="password" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $password_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> style="display: none">
                                    <label class="form_input">
                                        <input id="submit" type="submit" class="form_input_field"/>
                                        
                                    </label>
                                </div>

                                <div class="form_item ">
                                    <a class="white" href="#"><p><span class="bg"></span><span class="base"></span><span class="text">Login</span></p></a>
                                </div>
                            </form>
                        </div>

                        <div class="contacts">
                            
                            <div class="contact_item contact_item--email">
                                <div class="contact_title">Write us for support</div>
                                <a href="mailto:technicalcouncil.vit@gmail.com" class="contact_link"><span>technicalcouncil.vit@gmail.com</span></a>
                            </div>

                            <div class="contact_item">
                                <h3 class="contact_title">Where find us:</h3>
                                <a href="https://goo.gl/maps/zmsYgRTfS37cyx1r6" class="contact_link" target="_blank"><span>Vidyalankar Institute of Technology, Mumbai</span></a>
                            </div>


                        </div>
                    </div>
                </section>
                    
                    
                
            </div>
        </div>

    </div>

    <div class="cursor"></div>

    <?php include 'loader.php' ?>

    
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>