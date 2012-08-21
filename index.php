<?php
	$username = "";

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        
        <title>iWorkLog</title>
        <style type="text/css" media="screen">@import "./jqtouch/themes/css/jqtouch.css";</style>
        <script src="./jqtouch/src/lib/zepto.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="./jqtouch/src/jqtouch.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            var jQT = new $.jQTouch({
                icon: 'images/iWorkLogtouch.png',
                addGlossToIcon: false,
                startupScreen: 'images/iWorkLog_startup.png',
                statusBar: 'black'
            });

            $(function(){
                // Custom Javascript (onReady)
            });
        </script>
            <style type="text/css" media="screen">
            #jqt.fullscreen #home .info {
                display: none;
            }
            div#jqt #about {
                padding: 100px 10px 40px;
                text-shadow: rgba(0, 0, 0, 0.3) 0px -1px 0;
                color: #999;
                font-size: 13px;
                text-align: center;
                background: #161618;
            }
            div#jqt #about p {
                margin-bottom: 8px;
            }
            div#jqt #about a {
                color: #fff;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="jqt">
	<!--
	     <div id="login">
               <div class="toolbar">
                    <h1>iWorkLog</h1>
                    <a class="button slideup" id="infoButton" href="#about">About</a>
                </div>
                <div class="scroll">
                    <h2>Please log in</h2>
                    <div class="info">
                        <p>Add this page to your home screen <br>for a richer experience.</p>
                    </div>
                </div>
            </div>
            -->
	     <div id="start">
               <div class="toolbar">
                    <h1>iWorkLog</h1>
                    <a class="button slideup" id="infoButton" href="#about">About</a>
                </div>
                <div class="scroll">
                    <h2>Statistics of <? echo $username; ?></h2>
                    <ul class="rounded">
                        <li class="arrow"><a href="#today">Today <small class="counter">8 h</small></a> </li>
                        <li class="arrow"><a href="#week">This Week <small class="counter">26.5 h</small></a></li>
                        <li class="arrow"><a href="#month">This Month <small class="counter">123.45 h</small></a></li>
                    </ul>
                    <ul class="individual">
                        <li><a href="#start" class="greenButton">START</a></li>
                        <li><a href="#stop" class="redButton">STOP</a></li>
                    </ul>
                    <div class="info">
                        <p>Add this page to your home screen <br>for a richer experience.</p>
                    </div>
                </div>
            </div>
	    <div id="about" class="selectable">
                    <p><img src="iWorkLogtouch.png" /></p>
                    <p><strong>iWorkLog</strong><br>Version 1.0 beta<br>
                        <a href="http://www.ericdorr.de">By Eric Dorr</a></p>
                    <p><em>A powerful mobile app with<br> just HTML, CSS, and jQuery.</em></p>
                    <p>
                        <a target="_blank" href="http://twitter.com/CoreTexMusic">@Eric on Twitter</a>
                    </p>
                    <p><br><br><a href="#" class="grayButton goback">Close</a></p>
            </div>
            <div id="today" class="selectable">
                  <div class="toolbar">
                    <h1>Today</h1>
                    <a class="back" id="backButton" href="#start">back</a>
                  </div>  
		  <ul class="edgetoedge scroll">
                    <li class="sep">Work Sessions</li>
                    <li><a href="#">10:00 - 12:00 <em>Business</em> <small class="counter">2 h</small></a></li>
		    <li><a href="#">12:00 - 13:00 <em>Lunch</em> <small class="counter">1 h</small></a></li>
		    <li><a href="#">13:00 - 18:00 <em>Business</em> <small class="counter">5 h</small></a></li>
		    <li><a href="#">18:00 - 22:00 <em>Private</em> <small class="counter">4 h</small></a></li>
		    <li class="sep">Summary</li>
		    <li><a href="#">Business <small class="counter">7 h</small></a></li>
		    <li><a href="#">Private <small class="counter">5 h</small></a></li>
		    <li><a href="#">Lunch <small class="counter">1 h</small></a></li>
		 </ul>
            </div>
	    <div id="week" class="selectable">
                  <div class="toolbar">
                    <h1>Week (KW12)</h1>
                    <a class="back" id="backButton" href="#start">back</a>
                  </div>  
                  <ul class="edgetoedge scroll">
                    <li class="sep">Weekday Summary</li>
                    <li><a href="#">07.05.2012 <em>Monday</em> <small class="counter">2 h</small></a></li>
                    <li><a href="#">08.05.2012 <em>Tuesday</em> <small class="counter">1 h</small></a></li>
                    <li><a href="#">09.05.2012 <em>Wednesday</em> <small class="counter">5 h</small></a></li>
                    <li><a href="#">10.05.2012 <em>Thursday</em> <small class="counter">4 h</small></a></li>
		    <li><a href="#">11.05.2012 <em>Friday</em> <small class="counter">4 h</small></a></li>
		    <li><a href="#">12.05.2012 <em>Saturday</em> <small class="counter">4 h</small></a></li>
                    <li><a href="#">13.05.2012 <em>Sunday</em> <small class="counter">4 h</small></a></li>
                    <li class="sep">Category Summary</li>
                    <li><a href="#">Business <small class="counter">7 h</small></a></li>
		    <li><a href="#">Private <small class="counter">5 h</small></a></li>
		    <li><a href="#">Lunch <small class="counter">5 h</small></a></li>
                 </ul>
            </div>
	    <div id="month" class="selectable">
                  <div class="toolbar">
                    <h1>September</h1>
                    <a class="back" id="backButton" href="#start">back</a>
                  </div>
                  <ul class="edgetoedge scroll">
                    <li class="sep">Week Summary</li>
                    <li><a href="#">07.05.12 - 13.05.12 <em>KW12</em> <small class="counter">2 h</small></a></li>
                    <li><a href="#">07.05.12 - 13.05.12 <em>KW13</em> <small class="counter">1 h</small></a></li>
                    <li><a href="#">09.05.12 - 13.05.12 <em>KW14</em> <small class="counter">5 h</small></a></li>
                    <li><a href="#">10.05.12 - 13.05.12 <em>KW15</em> <small class="counter">4 h</small></a></li>
                    <li><a href="#">11.05.12 - 13.05.12 <em>KW16</em> <small class="counter">4 h</small></a></li>
                    <li><a href="#">12.05.12 - 13.05.12 <em>KW17</em> <small class="counter">4 h</small></a></li>
                    <li><a href="#">13.05.12 - 13.05.12 <em>KW18</em> <small class="counter">4 h</small></a></li>
                    <li class="sep">Category Summary</li>
                    <li><a href="#">Business <small class="counter">7 h</small></a></li>
                    <li><a href="#">Private <small class="counter">5 h</small></a></li>
                    <li><a href="#">Lunch <small class="counter">5 h</small></a></li>
                 </ul>
            </div>
        </div>
    </body>
</html>
