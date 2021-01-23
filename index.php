<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/socials.css">
    <link rel="stylesheet" href="css/glimpses.css">
    <style>
        #start{
            height: "100%";
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
            background-image: url(https://images.unsplash.com/photo-1449034446853-66c86144b0ad?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80)
        }
    </style>
    
    <title>verve-vit.com</title>
</head>
<body>
    
    <div id="start">
        
        <div id="layout">

            <div>

                <nav class="Nav Nav--shadow Nav--fixed">
                    <a href="events.html" class="Nav_content"><span>Events</span></a>
                    <div class="Nav_preloader">
                        <div class="Nav__preloader_Item Nav__preloader_Item--first"></div>
                        <div class="Nav__preloader_Item Nav__preloader_Item--second"></div>
                    </div>
                </nav>

                <button class="hamburger" id="hamburger-open" style="display: block; z-index: 9999;">
                    <span class="hamburger_icon">
                        <span class="hamburger_line"></span>
                        <span class="hamburger_line"></span>
                        <span class="hamburger_line"></span>
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
                            <a class="menu__link" href="events.php">Events</a>
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
                            </ul> -->
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="picture-gallery.php">Picture Gallery</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="about-us.php">About Us</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="sponsors.php">Our Sponsors</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </nav>                

                <a class="logo" href="index.html">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2445.000000 493.000000">
                        <g transform="translate(0.000000,493.000000) scale(0.100000,-0.100000)"
                        fill="#fff" stroke="none">
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
                
                <div class="main">
                    
                    <a href="#menu" class="videos_button">
                        <span class="videos_button_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58" width="58" height="58" preserveAspectRatio="xMidYMid meet" focusable="false" 
                                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                                <defs><clipPath id="__lottie_element_2"><rect width="58" height="58" x="0" y="0"></rect></clipPath></defs>
                                <g clip-path="url(#__lottie_element_2)"><g style="display: block;" transform="matrix(1,0,0,1,7,7)" opacity="1"><g opacity="1" transform="matrix(1,0,0,1,22,22)"><path fill="rgb(255,255,255)" fill-opacity="0.5" d=" M19,0 C19,10.493000030517578 10.493000030517578,19 0,19 C-10.493000030517578,19 -19,10.493000030517578 -19,0 C-19,-10.494000434875488 -10.493000030517578,-19 0,-19 C10.48900032043457,-18.989999771118164 18.98900032043457,-10.48900032043457 19,0z M22,0 C22,-12.149999618530273 12.149999618530273,-22 0,-22 C-12.149999618530273,-22 -22,-12.149999618530273 -22,0 C-22,12.149999618530273 -12.149999618530273,22 0,22 C12.149999618530273,22 22,12.149999618530273 22,0z"></path></g><g opacity="1" transform="matrix(1,0,0,1,22,22)"><path fill="rgb(255,255,255)" fill-opacity="1" d=" M19,0 C19,10.493000030517578 10.493000030517578,19 0,19 C-10.493000030517578,19 -19,10.493000030517578 -19,0 C-19,-10.494000434875488 -10.493000030517578,-19 0,-19 C10.48900032043457,-18.989999771118164 18.98900032043457,-10.48900032043457 19,0z M22,0 C22,-12.149999618530273 12.149999618530273,-22 0,-22 C-12.149999618530273,-22 -22,-12.149999618530273 -22,0 C-22,12.149999618530273 -12.149999618530273,22 0,22 C12.149999618530273,22 22,12.149999618530273 22,0z"></path></g><g opacity="1" transform="matrix(1,0,0,1,24,22)"><path fill="rgb(255,255,255)" fill-opacity="1" d=" M5,0 C5,0 -5,5 -5,5 C-5,5 -5,-5 -5,-5 C-5,-5 5,0 5,0z"></path></g></g></g>
                            </svg>
                        </span>
                        <span class="video_text">Glimpses</span>
                    </a>

                    <div class="pop" id="menu">
                        <div class = 'content'>
                            <a href="#" class="close"></a>
                            <div style="height: 100%; width: 100%; display: flex; align-items: center; justify-content: center;">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uWBMBxWax0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-tYEzr_1ZSs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                       
                                
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/03z6SaIt6J0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="Slider" style="z-index: 9;">
                        <div class="Slider_cont">
                            <div class="Slider_textDesc">VERVE</div>
                            <div class="Slider_texttitle">
                                <span>we create</span>
                                <span>unforgettable stories.</span>
                            </div>
                        </div>
                    </div>

                    <div class="Socials">
                        <div class="Socials_buttons">
                            <a href="#" target="_blank" class="mainButton">
                                <div class="Socials_wrapper">
                                    
                                    <svg class="Socials_icon" style="color: white;" width="256px" height="256px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                        <g>
                                            <path style="fill: #fff;" d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#0A0A08"></path>
                                        </g>
                                    </svg>
                                    
                                    <div class="Socials_text">Instagram</div>
                                </div>
                            </a>
                            <a href="#" target="_blank" class="mainButton">
                                <div class="Socials_wrapper">
                                    
                                    <svg class="Socials_icon" viewBox="-21 -117 682.66672 682" xmlns="http://www.w3.org/2000/svg"><path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0"/></svg>
                                    
                                    <div class="Socials_text">YouTube</div>
                                </div>
                            </a>
                            <a href="#" target="_blank" class="mainButton">
                                <div class="Socials_wrapper">
                                    
                                    <svg class="Socials_icon" id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
                                    
                                    <div class="Socials_text">Facebook</div>
                                </div>
                            </a>
                            <a href="#" target="_blank" class="mainButton">
                                <div class="Socials_wrapper">
                                    

                                    <svg  class="Socials_icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
			c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
			c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
			c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
			c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
			c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
			C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
			C480.224,136.96,497.728,118.496,512,97.248z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                    
                                    <div class="Socials_text">Twitter</div>
                                </div>
                            </a>

                            <a href="#" target="_blank" class="mainButton">
                                <div class="Socials_wrapper">
                                    
                                    <svg id="Bold" class="Socials_icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg"><path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/><path d="m.396 7.977h4.976v16.023h-4.976z"/><path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/></svg>
                                    
                                    <div class="Socials_text">LinkedIn</div>
                                </div>
                            </a>
                            
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
    <script>
        window.onload = function () {
    // Array of Images
    var images = ['https://scontent.famd4-1.fna.fbcdn.net/v/t31.0-8/27993801_1203897646411268_8159286761677238872_o.jpg?_nc_cat=103&ccb=2&_nc_sid=cdbe9c&_nc_ohc=O3a_5yh79XEAX8tR7M5&_nc_ht=scontent.famd4-1.fna&oh=0f85cdd35e2313850ebce735c225d158&oe=6029E2E8',
    'https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/53238287_1512489958885367_4264831451809185792_o.jpg?_nc_cat=101&ccb=2&_nc_sid=cdbe9c&_nc_ohc=K6NHQu9ZBbUAX_IdODY&_nc_ht=scontent.famd4-1.fna&oh=7b6ced1eba55fefcdd07428f82984ca2&oe=602A8FA6',
    'https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2094&q=80',
    'https://images.unsplash.com/photo-1534161308652-fdfcf10f62c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2174&q=80'
    ];

       setInterval(changeImage, 5000);
      function changeImage() {   
       var i = Math.floor((Math.random() * 3));

       document.getElementById("start").style.backgroundImage = "url('"+images[i]+"')";

     }
   }
    </script>

</body>
</html>