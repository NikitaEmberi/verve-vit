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
    <style>
        #overlay {
  position: absolute; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 1; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
.event_item:hover #overlay {
    transition: 1s;
    opacity: 0;
    
}
    </style>
    
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

                            <div class="event_item" data-color="lit" style="background-color: #ffffff;">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="background-color: #ffffff; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(/images/events/2.jpg)">
                                    <div class="event_item_inner">
                                        
                                        <div class="event_item_head">
                                            <div class="event_item_title">Literary Council</div>
                                            <div class="event_item_subtitle"><span>This is a Literary Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div id="overlay"></div> 
                                </div>
                                
                                
                            </div>

                            <div class="event_item" data-color="cult">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t31.0-8/27993801_1203897646411268_8159286761677238872_o.jpg?_nc_cat=103&ccb=2&_nc_sid=cdbe9c&_nc_ohc=O3a_5yh79XEAX8tR7M5&_nc_ht=scontent.famd4-1.fna&oh=0f85cdd35e2313850ebce735c225d158&oe=6029E2E8)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Cultural Council</div>
                                            <div class="event_item_subtitle"><span>This is a Cultural Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="sports">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/53238287_1512489958885367_4264831451809185792_o.jpg?_nc_cat=101&ccb=2&_nc_sid=cdbe9c&_nc_ohc=K6NHQu9ZBbUAX_IdODY&_nc_ht=scontent.famd4-1.fna&oh=7b6ced1eba55fefcdd07428f82984ca2&oe=602A8FA6)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Sports Council</div>
                                            <div class="event_item_subtitle"><span>This is a Sports Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="tech">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/92461398_1890247541109605_6265730369962639360_o.jpg?_nc_cat=102&ccb=2&_nc_sid=cdbe9c&_nc_ohc=mLDFrX0lDtAAX94N-or&_nc_oc=AQnuZNJts-gX9YyQzn9v0UVXPZWKaBhjMR452W5vqO2_oS2dTT4Cu6v-Yc17y-GmLyw&_nc_ht=scontent.famd4-1.fna&oh=2130df3cde257d059dc85bc92275b660&oe=602B8B18)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Technical Council</div>
                                            <div class="event_item_subtitle"><span>This is a Technical Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>
                            
                            <div class="event_item" data-color="lit" style="background-color: #ffffff;">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="background-color: #ffffff; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(/images/events/2.jpg)">
                                    <div class="event_item_inner">
                                        
                                        <div class="event_item_head">
                                            <div class="event_item_title">Literary Council</div>
                                            <div class="event_item_subtitle"><span>This is a Literary Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div id="overlay"></div> 
                                </div>
                                
                                
                            </div>

                            <div class="event_item" data-color="cult">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t31.0-8/27993801_1203897646411268_8159286761677238872_o.jpg?_nc_cat=103&ccb=2&_nc_sid=cdbe9c&_nc_ohc=O3a_5yh79XEAX8tR7M5&_nc_ht=scontent.famd4-1.fna&oh=0f85cdd35e2313850ebce735c225d158&oe=6029E2E8)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Cultural Council</div>
                                            <div class="event_item_subtitle"><span>This is a Cultural Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="sports">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/53238287_1512489958885367_4264831451809185792_o.jpg?_nc_cat=101&ccb=2&_nc_sid=cdbe9c&_nc_ohc=K6NHQu9ZBbUAX_IdODY&_nc_ht=scontent.famd4-1.fna&oh=7b6ced1eba55fefcdd07428f82984ca2&oe=602A8FA6)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Sports Council</div>
                                            <div class="event_item_subtitle"><span>This is a Sports Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="tech">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/92461398_1890247541109605_6265730369962639360_o.jpg?_nc_cat=102&ccb=2&_nc_sid=cdbe9c&_nc_ohc=mLDFrX0lDtAAX94N-or&_nc_oc=AQnuZNJts-gX9YyQzn9v0UVXPZWKaBhjMR452W5vqO2_oS2dTT4Cu6v-Yc17y-GmLyw&_nc_ht=scontent.famd4-1.fna&oh=2130df3cde257d059dc85bc92275b660&oe=602B8B18)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Technical Council</div>
                                            <div class="event_item_subtitle"><span>This is a Technical Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="lit" style="background-color: #ffffff;">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="background-color: #ffffff; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(/images/events/2.jpg)">
                                    <div class="event_item_inner">
                                        
                                        <div class="event_item_head">
                                            <div class="event_item_title">Literary Council</div>
                                            <div class="event_item_subtitle"><span>This is a Literary Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div id="overlay"></div> 
                                </div>
                                
                                
                            </div>

                            <div class="event_item" data-color="cult">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t31.0-8/27993801_1203897646411268_8159286761677238872_o.jpg?_nc_cat=103&ccb=2&_nc_sid=cdbe9c&_nc_ohc=O3a_5yh79XEAX8tR7M5&_nc_ht=scontent.famd4-1.fna&oh=0f85cdd35e2313850ebce735c225d158&oe=6029E2E8)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Cultural Council</div>
                                            <div class="event_item_subtitle"><span>This is a Cultural Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="sports">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/53238287_1512489958885367_4264831451809185792_o.jpg?_nc_cat=101&ccb=2&_nc_sid=cdbe9c&_nc_ohc=K6NHQu9ZBbUAX_IdODY&_nc_ht=scontent.famd4-1.fna&oh=7b6ced1eba55fefcdd07428f82984ca2&oe=602A8FA6)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Sports Council</div>
                                            <div class="event_item_subtitle"><span>This is a Sports Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="tech">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/92461398_1890247541109605_6265730369962639360_o.jpg?_nc_cat=102&ccb=2&_nc_sid=cdbe9c&_nc_ohc=mLDFrX0lDtAAX94N-or&_nc_oc=AQnuZNJts-gX9YyQzn9v0UVXPZWKaBhjMR452W5vqO2_oS2dTT4Cu6v-Yc17y-GmLyw&_nc_ht=scontent.famd4-1.fna&oh=2130df3cde257d059dc85bc92275b660&oe=602B8B18)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Technical Council</div>
                                            <div class="event_item_subtitle"><span>This is a Technical Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="lit" style="background-color: #ffffff;">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="background-color: #ffffff; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(/images/events/2.jpg)">
                                    <div class="event_item_inner">
                                        
                                        <div class="event_item_head">
                                            <div class="event_item_title">Literary Council</div>
                                            <div class="event_item_subtitle"><span>This is a Literary Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <div id="overlay"></div> 
                                </div>
                                
                                
                            </div>

                            <div class="event_item" data-color="cult">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t31.0-8/27993801_1203897646411268_8159286761677238872_o.jpg?_nc_cat=103&ccb=2&_nc_sid=cdbe9c&_nc_ohc=O3a_5yh79XEAX8tR7M5&_nc_ht=scontent.famd4-1.fna&oh=0f85cdd35e2313850ebce735c225d158&oe=6029E2E8)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Cultural Council</div>
                                            <div class="event_item_subtitle"><span>This is a Cultural Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="sports">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/53238287_1512489958885367_4264831451809185792_o.jpg?_nc_cat=101&ccb=2&_nc_sid=cdbe9c&_nc_ohc=K6NHQu9ZBbUAX_IdODY&_nc_ht=scontent.famd4-1.fna&oh=7b6ced1eba55fefcdd07428f82984ca2&oe=602A8FA6)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Sports Council</div>
                                            <div class="event_item_subtitle"><span>This is a Sports Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
                                </div>
                            </div>

                            <div class="event_item" data-color="tech">
                                <a href="#" class="event_item_link"></a>
                                <div class="event_item_container" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://scontent.famd4-1.fna.fbcdn.net/v/t1.0-9/92461398_1890247541109605_6265730369962639360_o.jpg?_nc_cat=102&ccb=2&_nc_sid=cdbe9c&_nc_ohc=mLDFrX0lDtAAX94N-or&_nc_oc=AQnuZNJts-gX9YyQzn9v0UVXPZWKaBhjMR452W5vqO2_oS2dTT4Cu6v-Yc17y-GmLyw&_nc_ht=scontent.famd4-1.fna&oh=2130df3cde257d059dc85bc92275b660&oe=602B8B18)">
                                    <div class="event_item_inner" >
                                        <div class="event_item_circle" style="background-color:#72C4FE;"></div>
                                        <div class="event_item_gradient"></div>
                                        <div class="event_item_head">
                                            <div class="event_item_title">Technical Council</div>
                                            <div class="event_item_subtitle"><span>This is a Technical Council event</span></div>
                                        </div>
                                        <div class="event_item_float" >2020</div>
                                        <div class="event_item_foot">
                                            <ul class="event_item_details" >
                                                <li>25/02/2021</li> <br>
                                                <li>Microsoft Teams</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="overlay"></div> 
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

    <?php include 'loader.php' ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>