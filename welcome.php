<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        // Check if username is empty
        if(empty(trim($_POST["event_name"]))){
            $eventname_err = "Please enter Event Name.";
        } else{
            $event_name = trim($_POST["event_name"]);
        }

        if(empty(trim($_POST["description"]))){
            $description_err = "Please enter description.";
        } else{
            $description = trim($_POST["description"]);
        }

        if(empty(trim($_POST["contact"]))){
            $contact_err = "Please enter contact.";
        } else{
            $contact = trim($_POST["contact"]);
        }

        if(empty(trim($_POST["date"]))){
            $date_err = "Please enter Date.";
        } else{
            $date = trim($_POST["date"]);
        }

        if(empty(trim($_POST["questions"]))){
            $questions_err = "Please enter Questions.";
        } else{
            $questions = trim($_POST["questions"]);
        }

        if(empty(trim($_POST["questions"]))){
            $questions_err = "Please enter Questions.";
        } else{
            $questions = trim($_POST["questions"]);
        }

        if(empty(trim($_POST["attachment"]))){
            $attachment_err = "Please select attachment.";
        } else{
            $attachment = trim($_POST["attachment"]);
        }
        
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
                            <a class="menu__link active" href="index">Home</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="events">Events</a>
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
                            <a class="menu__link" href="sponsors">My Events</a>
                        </li>
                        
                        <li class="menu__item">
                            <a class="menu__link" href="reset-password">Reset Your Password</a>
                        </li>
                        
                        <li class="menu__item">
                            <a class="menu__link" href="logout">Logout</a>
                        </li>
                    </ul>
                </nav>                

                <a class="logo" href="index">
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
                        
                            <h2 class="title">Welcome <?php echo $_SESSION["username"]?>!!</h2>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

                                <div class="form_item">
                                    <label class="form_input" <?php echo (!empty($eventname_err)) ? 'has-error' : ''; ?>>
                                        <input placeholder="Event Name" name="event_name" autocomplete="off" type="text" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $eventname_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Description" name="description" autocomplete="off" type="text" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $description_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Contact numbers" name="contact" autocomplete="off" type="text" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $contact_err; ?></p>
                                    </label>
                                </div>
                                
                                <div class="form_item" <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Date" name="date" autocomplete="off" type="date" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $date_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($questions_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input">
                                        <input placeholder="Questions (seperated by <>)" name="questions" autocomplete="off" type="text" class="form_input_field"/>
                                        <p class="form_input_field--error"><?php echo $questions_err; ?></p>
                                    </label>
                                </div>

                                <div class="form_item" <?php echo (!empty($attachment_err)) ? 'has-error' : ''; ?>>
                                    <label class="form_input form_input--file" style="cursor: pointer;">
                                        <input placeholder="Poster (height 500px)" id="file-upload" name="attachment" autocomplete="off" type="file" class="form_input_field"/>
                                        <label for="file-upload"></label>
                                        <span class="input_text_file"><span>Poster (height 500px)</span>
                                        <div class="input_icon">
                                            <svg viewBox="0 0 47.032 47.032" class="icon"><path d="M47.013 15.937c-.187-3.685-1.74-7.25-4.26-9.78C37.534.919 28.994.618 23.773 5.354l-.025-.024L2.737 26.419c-3.806 3.82-3.617 10.464.412 14.508a10.128 10.128 0 0 0 7.054 2.991l.164.001a9.73 9.73 0 0 0 6.423-2.381l.025.025 20.569-20.644c2.507-2.516 2.507-6.609 0-9.125-1.214-1.219-2.829-1.89-4.546-1.89s-3.331.671-4.546 1.89l-17.765 17.83 2.859 2.869 17.765-17.83c.901-.905 2.473-.905 3.374 0 .93.933.93 2.453 0 3.386L14.461 38.186c-1.101 1.104-2.588 1.699-4.195 1.673a6.12 6.12 0 0 1-4.259-1.803c-2.437-2.446-2.629-6.543-.412-8.769L26.164 8.644c3.555-3.568 9.97-3.389 13.729.383 1.822 1.828 2.945 4.422 3.081 7.117.139 2.73-.733 5.184-2.452 6.91l1.429 1.435-1.429-1.435-19.034 19.105 2.859 2.87 19.035-19.105c2.539-2.549 3.828-6.095 3.631-9.987z"/>
                                            </svg>
                                        </div>
                                    </label>
                                                                            <p class="form_input_field--error"><?php echo $attachment_err; ?></p>

                                </div>

                                <div class="form_item" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> style="display: none">
                                    <label class="form_input">
                                        <input id="submit" type="submit" class="form_input_field"/>
                                        
                                    </label>
                                </div>

                                <div class="form_item ">
                                    <a class="white" href="#"><p><span class="bg"></span><span class="base"></span><span class="text">Submit</span></p></a>

                                </div>
                            </form>
                        </div>

                        <div class="contacts">

                            <div class="contact_item contact_item--email">
                                
                            </div>


                            
                            <div class="contact_item contact_item--email">
                                <div class="contact_title">Write us</div>
                                <a href="mailto:technicalcouncil.vit@gmail.com" class="contact_link"><span>technicalcouncil.vit@gmail.com</span></a>
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