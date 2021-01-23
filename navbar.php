<nav class="Nav Nav--shadow Nav--fixed"></nav>

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
            </ul> -->
        </li>
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