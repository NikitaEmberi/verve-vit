<!DOCTYPE html>
<html lang="en">
    <head>

        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/events.css">
        
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <link rel="stylesheet" href="css/forms.css">

    </head>
<body>
    <div id="start">
        
        <div id="layout">

            <div>

                <?php include 'navbar.php' ?>
                
                <div class="about_container " style="overflow: hidden scroll;">
                    
                    
                    <div class="about_content">

                        <div class="about_header main_container">
                            
                            <h2 class="title" style="text-align: center;">Event Name</h2>

                        </div>

                        <div class="about_header main_container">

                            <div class="about_description">
                                
                                <form action="" method="post" class="form">

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper">Name</p>
                                            <input placeholder="" name="name" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>
    
                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper">Email</p>
                                            <input placeholder="" name="email" autocomplete="off" type="email" class="form_input_field"/>
                                        </label>
                                    </div>
    
                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper">Phone Number</p>
                                            <input placeholder="" name="phone" autocomplete="off" type="tel" class="form_input_field"/>
                                        </label>
                                    </div>
    
                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Roll Number</p>
                                            <input placeholder="" name="roll" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 1</p>
                                            <input  name="q1" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>
                                    
                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 2</p>

                                            <input  name="q2" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 3</p>

                                            <input  name="q3" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 5</p>

                                            <input  name="q4" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 6</p>

                                            <input  name="q4" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>

                                    <div class="form_item">
                                        <label class="form_input">
                                            <p class="label-helper" for="name">Question 7</p>

                                            <input  name="q4" autocomplete="off" type="text" class="form_input_field"/>
                                        </label>
                                    </div>
    
                                    <div class="form_item ">
                                        <a class="white" href="#"><p><span class="bg"></span><span class="base"></span><span class="text">Submit</span></p></a>
    
                                    </div>
                                    </form>
                                
                            </div>

                        </div>                
                    
                    </div>
                </div>
                
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