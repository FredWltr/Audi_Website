<?php
?>

<html>
    <head>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" type="text/css" href="myStyleTest.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    
    <body style="margin:0px;" onload="scrollAnimation()">
        <!-- Navigation -->
        <div class="screen" id="homepage">
            <nav class ="topnav" id="myTopnav">
                <ul>
                    <li class="middle"><a href="javascript:void(0);" onClick="iconFunction()" class="home"><i class="fa fa-bars"></i>&nbsp; Home</a></li>
                    <li class="logo"><a href ="not_created_yet.php"> <img src="audi-logo.PNG" style="height:25px;"> </a></li>
                    <li></li>
                    <li class="model"><a href ="not_created_yet.php" > Models </a></li>
                    <li class="items"><a href ="not_created_yet.php">Inventory</a></li>
                    <li class="items"><a href ="not_created_yet.php">Inside Audi</a></li>
                    <li class="items"><a href ="not_created_yet.php">Shopping Tools</a></li>
                    <li class="items"><a href ="not_created_yet.php">e-tron</a></li>
                    <li class="items"><a href ="not_created_yet.php">myAudi</a></li>
                    <li class="items"><a href ="not_created_yet.php">TDI Settlement</a></li>

                </ul>
            </nav>

            <div class="image-bg" style="color:#FFFFFF;">
                <div style="height: 120px;">
                    <h1 class="screen-one-text" style="padding-top: 30px; padding-left: 24px; font-size: 36px; letter-spacing: -0.54px; font-stretch: 130%"> 2021 R8 Coupe </h1>
                    <h4 style="padding-top: 10px; padding-left: 30px; font-size: 16px; letter-spacing: -0.24px; font-stretch: 130%">Starting at $142,700*</h4>
                </div>
                <div class="box">
                    <a href="not_created_yet.php" class="screen-one-build">Build</a>
                    <a href="not_created_yet.php" class="screen-one-other">*View MRSP disclamer</a>
                </div>
            </div>
        </div>
        <div class="sticky" style="z-index: 99;">
            <nav class="sticky-nav">
                <ul>
                    <li class="mainlink"><a href="#homepage" style="font-weight: 700;">2021 R8 Coupe</a></li>
                    <li class="dropdown" style="padding-left:0; z-index: 999;"><a href="javascript:void(0);" onClick="stickyFunction()"><i class="fa fa-angle-down" style="width:90vw; text-align: end;"></i></a></li>
                    <li class="items"><a href="#design" onclick="isClicked()">Design</a></li>
                    <li class="items"><a href="not_created_yet.php">Performance</a></li>
                    <li class="items"><a href="not_created_yet.php">Technology</a></li>
                    <li class="items"><a href="not_created_yet.php">Shopping Tools</a></li>
                    <li class="items"><a href="not_created_yet.php">Build</a></li>
                </ul>
                <p style="height: 7px; width:100%; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), transparent);"></p>
            </nav>
        </div>
        <div class="screen-bigger">    
            <div class="screen-two">
                <div class="center">
                    <h2>A lengendary car to own.</h2>
                    <p class="subtitle">Born on the racetrack, the Audi R8 Coupe brings the racing-tuned performance you’re seeking with uncompromised styling. This is your opportunity to enjoy the exhilarating performance that lies within.</p>
                    <p class="key-highlights">Key Highlights</p>
                    <div class="horizontal-box">
                        <ul>
                            <li><p>Engine Displacement</p>
                                <span class="big">5.2</span><span class="small"> liters</span></li>
                            <li class="side-border"><p>Redline</p>
                                <span class="big">8,700</span><span class="small">rpm</span>
                                <p style="font-size: 16px; font-weight:400">Always obey local speed and traffic laws.</p></li>
                            <li><p>Naturally Aspirated</p>
                                <span class="big">V10</span></li>
                        </ul>
                    </div>
                    <div>
                        <a href="not_created_yet.php" class="screen-one-other">View Technical Specifications</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="screen">
            <div class="screen-three-bg"></div>
        </div>
        
        <div class="img-wrapper" id="design">
            <div class="screen-four-bg">
            </div>
            <div class = "front" style="background-color:#F9F9F9; display:flex; justify-content: flex-start; align-items: center; height: 100%;">
                <h2 style="font-size:44px; font-weight:400; padding-left:100px;">Design</h2>
            </div>
        </div>
        
        <div class="screen">
            
        </div>
        
        <script>
            
            window.addEventListener("resize", scrollAnimation);
            
            function scrollAnimation(){
            
                const screenHeight = window.innerHeight;
                const width = window.innerWidth;

                var bigScreenHeight = 1300;
                if(width > 900){
                    bigScreenHeight = 950;
                } else if (width < 550){
                    bigScreenHeight = 1370;
                }

                var checkpoint = screenHeight * 2 + bigScreenHeight;

                window.addEventListener("scroll", () => {
                  const currentScroll = window.pageYOffset;
                  let scroll = this.scrollY;
                  console.log(scroll);
                  if (currentScroll <= checkpoint) {
                    opacity = 1;
                  } else {
                    opacity = 1- currentScroll / checkpoint;;
                  }
                  document.querySelector(".front").style.opacity = opacity;
                });
            }

            
            function iconFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                  x.className += " responsive";
                } else {
                  x.className = "topnav";
                }            
              
                var icon=document.getElementsByClassName("fa-bars")[0];
                if(icon){
                   icon.className = icon.className.replace("fa-bars", "fa-times");
                }
                else{
                icon=document.getElementsByClassName("fa-times")[0];
                 icon.className = icon.className.replace("fa-times", "fa-bars");
                }
            }
            
            function stickyFunction() {
                var x = document.getElementsByClassName("sticky-nav")[0];
                if (x.className === "sticky-nav") {
                  x.className += " responsive";
                } else {
                  x.className = "sticky-nav";
                }
                
                 var icon=document.getElementsByClassName("fa-angle-down")[0];
                if(icon){
                   icon.className = icon.className.replace("fa-angle-down", "fa-angle-up");
                }
                else{
                icon=document.getElementsByClassName("fa-angle-up")[0];
                 icon.className = icon.className.replace("fa-angle-up", "fa-angle-down");
                }
            }
            
            function isClicked() {
                var x = document.getElementsByClassName("sticky-nav responsive")[0];
                if (x.className === "sticky-nav responsive"){
                    x.className = "sticky-nav";
                    icon=document.getElementsByClassName("fa-angle-up")[0];
                    icon.className = icon.className.replace("fa-angle-up", "fa-angle-down");
                }
            }
            
            
        </script>
        
        
    </body>   
</html>

