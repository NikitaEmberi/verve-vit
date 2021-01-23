<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/socials.css">
    <link rel="stylesheet" href="css/glimpses.css">

    <link rel="stylesheet" href="css/events.css">
    
    <title>Events</title>
</head>

<body>

    <div id="start">
        
        <div id="layout">

            <div>

                <?php include 'navbar.php' ?>
                
                <div class="events">
                    <div class="events_sort">
                        <div class="events_sort_head">
                            <div class="events_sort_title">Filter</div>
                            <button type="button" class="events_sort_close"></button>
                        </div>

                        <div class="events_sort_content">
                            <div>
                                <div class="events_sort_inner" style="overflow: hidden;">

                                    <div class="events_sorter events_sorter--active">
                                        <a href="#all" data-filter="all" class="events_sorter_header">
                                            <div class="sort_title"><span>All Events</span></div>
                                            <div class="sort_plus"></div>
                                        </a>
                                    </div>

                                    <div class="events_sorter">
                                        <a href="#tech" data-filter="tech" class="events_sorter_header">
                                            <div class="sort_title"><span>Technical Events</span></div>
                                            <div class="sort_plus"></div>
                                        </a>
                                    </div>

                                    <div class="events_sorter">
                                        <a href="#lit" data-filter="lit" class="events_sorter_header">
                                            <div class="sort_title"><span>Literary Events</span></div>
                                            <div class="sort_plus"></div>
                                        </a>
                                    </div>

                                    <div class="events_sorter">
                                        <a href="#cult" data-filter="cult" class="events_sorter_header">
                                            <div class="sort_title"><span>Cultural Events</span></div>
                                            <div class="sort_plus"></div>
                                        </a>
                                    </div>

                                    <div class="events_sorter">
                                        <a href="#sports" data-filter="sports" class="events_sorter_header">
                                            <div class="sort_title"><span>Sports Events</span></div>
                                            <div class="sort_plus"></div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="events_list">
                        <div>

                            <div class="event_item" data-color="lit">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_flow event_item_container" style="background-color:#72C4FE;">
                                    <div class="event_item_foot event_item_foot--light">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>Microsoft Teams</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="event_item_container">
                                    <div class="event_item_inner">
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Literary Council</div>
                                            <div class="event_item_subtitle"><span>This is a Lit Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                    </div>
                                    <div class="event_item_foot">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>Microsoft Teams</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="event_item" data-color="cult">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_flow event_item_container" style="background-color:#f0d6d9;;">
                                    <div class="event_item_foot event_item_foot--light">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="event_item_container">
                                    <div class="event_item_inner">
                                        <div class="event_item_circle" style="background-color:#f0d6d9;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Cultural Council</div>
                                            <div class="event_item_subtitle"><span>This is a Cultural Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                    </div>
                                    <div class="event_item_foot">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="event_item" data-color="sports">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_flow event_item_container" style="background-color:#EBD6A9;;">
                                    <div class="event_item_foot event_item_foot--light">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="event_item_container">
                                    <div class="event_item_inner">
                                        <div class="event_item_circle" style="background-color:#EBD6A9;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Sports Council</div>
                                            <div class="event_item_subtitle"><span>This is a Sports Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                    </div>
                                    <div class="event_item_foot">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>             
                            
                            <div class="event_item" data-color="tech">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_flow event_item_container" style="background-color:#323B4E;;">
                                    <div class="event_item_foot event_item_foot--light">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="event_item_container">
                                    <div class="event_item_inner">
                                        <div class="event_item_circle" style="background-color:#323B4E;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Technical Council</div>
                                            <div class="event_item_subtitle"><span>This is a Technical Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                    </div>
                                    <div class="event_item_foot">
                                        <ul class="event_item_details">
                                            <li>25/02/2021</li> <br>
                                            <li>YouTube</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>       
                        </div>

                    </div>

                    <div class="events_sortbtn">
                        <div class="events_sortbtn_bg"></div>
                        <svg >
                            <path fill="#fff" d="M9.082 16.469l-1.818 1.734V9.471L.828.889h18.344L12.468 9.47v4.323l-1.818 1.629V8.8l4.705-6.022H4.611l4.471 6.031v7.66z"></path>
                        </svg>
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