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

                <nav class="Nav Nav--shadow Nav--fixed">
                    
                </nav>

                <button class="hamburger" id="hamburger-open" style="display: block; z-index: 9999;">
                    <span class="hamburger_icon">
                        <span class="hamburger_line" style="background-color: #000;"></span>
                        <span class="hamburger_line" style="background-color: #000;"></span>
                        <span class="hamburger_line" style="background-color: #000;"></span>
                    </span>
                </button>

                <button class="hamburger" id="hamburger-close" style="display: none;  z-index: 99999999;">
                    <span class="hamburger_icon">
                        <span class="hamburger_line" style="top: 50%; background-color: #000; transform: translate(0%, -50%) matrix(0.7071, -0.7071, 0.7071, 0.7071, 0, 0);"></span>
                        <span class="hamburger_line" style="background-color: #000; opacity: 0;"></span>
                        <span class="hamburger_line" style="bottom: 50%; background-color: #000; transform: translate(0%, 50%) matrix(0.7071, 0.7071, -0.7071, 0.7071, 0, 0);"></span>
                    </span>
                </button>

           
                <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
                <label for="main-navigation-toggle" style="display: none;"><span></span></label>

                <nav id="main-navigation" class="nav-main">
                    <ul class="menu">
                        <li class="menu__item">
                            <a class="menu__link active" href="index.html">Home</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="events.html">Events</a>
                            <!-- <ul class="submenu">
                                <li class="menu__item">
                                    <a class="menu__link" href="#0">E1</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="#0">E2</a>
                                </li>
                                <li class="menu__item">
                                    <a class="menu__link" href="#0">E3</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="menu__item">
                            <a class="menu__link" href="picture-gallery.html">Picture Gallery</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="about-us.html">About Us</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="sponsors.html">Our Sponsors</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                
                </nav>                

                <a class="logo" href="index.html">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2445.000000 493.000000">
                        <g transform="translate(0.000000,493.000000) scale(0.100000,-0.100000)"
                        fill="#000" stroke="none">
                        <path d="M112 4811 c-23 -33 -42 -63 -42 -68 0 -4 425 -1065 944 -2358 l943
                        -2350 510 -3 c403 -2 512 0 516 10 3 7 428 1068 946 2357 l941 2344 -41 64
                        -41 63 -578 0 -578 0 -114 -307 c-63 -170 -321 -865 -573 -1545 -253 -680
                        -462 -1235 -465 -1232 -3 3 -262 697 -576 1542 l-570 1537 -591 3 -590 2 -41
                        -59z"/>
                        <path d="M5787 4822 l-47 -48 0 -2315 0 -2315 43 -42 43 -42 1760 0 1760 0 47
                        48 47 48 0 450 0 450 -43 42 -43 42 -1214 2 -1215 3 0 395 0 395 1045 3 1044
                        2 48 47 48 47 0 446 0 446 -48 47 -48 47 -1044 2 -1045 3 -3 378 -2 377 1197
                        0 1197 0 43 42 43 42 0 462 0 461 -45 42 -45 41 -1738 0 -1738 0 -47 -48z"/>
                        <path d="M10538 4823 l-48 -49 0 -2315 0 -2315 43 -42 43 -42 509 0 509 0 43
                        42 43 42 0 698 0 698 328 0 327 0 500 -738 500 -737 620 -3 621 -2 32 65 c18
                        36 32 70 32 75 0 9 -808 1198 -1007 1482 l-54 77 83 42 c463 231 721 559 825
                        1048 25 118 27 143 28 381 0 202 -4 275 -18 350 -133 719 -639 1158 -1460
                        1267 -104 13 -290 16 -1287 20 l-1165 4 -47 -48z m2340 -1081 c159 -42 282
                        -120 351 -222 118 -177 115 -472 -6 -648 -88 -129 -233 -212 -423 -242 -38 -6
                        -281 -10 -592 -10 l-528 0 0 576 0 575 558 -4 c534 -3 560 -4 640 -25z"/>
                        <path d="M15112 4811 c-23 -33 -42 -63 -42 -68 0 -4 425 -1065 944 -2358 l943
                        -2350 510 -3 c403 -2 512 0 516 10 3 7 428 1068 946 2357 l941 2344 -41 64
                        -41 63 -578 0 -578 0 -114 -307 c-63 -170 -321 -865 -573 -1545 -253 -680
                        -462 -1235 -465 -1232 -3 3 -262 697 -576 1542 l-570 1537 -591 3 -590 2 -41
                        -59z"/>
                        <path d="M20797 4822 l-47 -48 0 -2315 0 -2315 43 -42 43 -42 1760 0 1760 0
                        47 48 47 48 0 450 0 450 -43 42 -43 42 -1214 2 -1215 3 0 395 0 395 1045 3
                        1044 2 48 47 48 47 0 446 0 446 -48 47 -48 47 -1044 2 -1045 3 -3 378 -2 377
                        1197 0 1197 0 43 42 43 42 0 462 0 461 -45 42 -45 41 -1738 0 -1738 0 -47 -48z"/>
                        </g>
                    </svg>
                </a>
                
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

    <section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">
							L
						</span>
						
						<span data-text-preloader="O" class="letters-loading">
							O
						</span>
						
						<span data-text-preloader="A" class="letters-loading">
							A
						</span>
						
						<span data-text-preloader="D" class="letters-loading">
							D
						</span>
						
						<span data-text-preloader="I" class="letters-loading">
							I
						</span>
						
						<span data-text-preloader="N" class="letters-loading">
							N
						</span>
						
						<span data-text-preloader="G" class="letters-loading">
							G
						</span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>