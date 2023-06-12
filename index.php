<?php
header('Cache-Control: max-age=259200');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="My  Portfolio Website: Dave Dalimocon">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Portfolio: Dave Dalimocon</title>
        <link rel="stylesheet" href="PageOne.css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
      
        <div class="top-navigation">
            <div class="center-menu">
                <div id="avatar">
                    <img src="profpic.webp" alt="dave dalimocon" height="100" width="100"/>
                </div>
                <div class="name-bar">
                    <div class="name-bar-name">
                        <h1>Romeo Dave K.    Dalimocon</h1>
                    </div>
                    <div class="name-bar-position">
                        <h2>Web Developer</h2>
                    </div>
                </div>
            </div>
            <div class="settings">
                    <!-- <img src="settings.png" alt="SVG Image" height="80" width="80"> -->
                    <!-- No need na settings,   minimalist-->
            </div>
        </div>
        <!-- end of Top Navigation Bar-->

        <!--  Left Bar : contact details-->
        <!-- <div class="Left-Bar">  
            <hr/>
            <div>
                <a href="https://www.linkedin.com/in/davedalimocon/">
                    <span class="icon-social-linkedin"> linkedin.com/in/davedalimocon</span>
                </a>
                <br/>
            </div>
            <hr/>
            <div>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    <span class="icon-envelope"> davedalimocon@gmail.com </span>
                </a>
                <br/>
            </div>
            <hr/>
            <div>
                <a href="https://github.com/mrgreenxgreen">
                    <span class="icon-social-github"> github.com/mrgreenxgreen </span>
                </a>
                <br/>
            </div>
            <hr/>
        </div> -->
        <!--  end of Left Bar : contact details-->

        <!-- Main Content -->
        <div class="invoker">
        
            <img src="Invoker.webp" alt="Invoker" />
        </div>
        <div class="container" >
            <div class="icon">
                <div class="imgBx" style="--i:1">
                    <img src="react_glow.webp" alt="react logo" height="200" widt="200">
                </div>   
                <div class="imgBx" style="--i:2">
                    <img src="java_glow.webp" alt="java glow logo" height="200" width="200">
                </div>   
                <div class="imgBx" style="--i:3">
                    <img src="Red_Hat_logo.webp" alt="red hat logo" height="200" width="200">
                </div>    
                <div class="imgBx" style="--i:4">
                    <img src="aws.webp" alt="aws logo" height="200" width="200">
                </div>     
                <div class="imgBx" style="--i:5">    
                    <img src="mysql_glow.webp" alt="mysql logo" height="200" width="200">
                </div>      
                <div class="imgBx" style="--i:6">    
                    <img src="springboot_glow.webp" alt="Sping boot logo" height="200" width="200">
                </div>     
                <div class="imgBx" style="--i:7">
                    <img src="mongodb_glow.webp" alt="mongodb logo" height="200" width="200">
                </div>     
                <div class="imgBx" style="--i:8">    
                    <img src="nodejs_circle.webp" alt="nodejs logo" height="200" width="200">
                </div>
                <div class="imgBx" style="--i:9">    
                    <img src="psd_glow.webp" alt="photoshop logo" height="200" width="200">
                </div>
            </div>   
            
        </div>
        <!-- end of Main Content-->

        <!-- bottom right navigation-->
        <div class="right_nav" style="  position:fixed; right:10px; display:flex; flex-direction:column;bottom:30%;text-decoration: none;"> 
            <div style=" text-decoration: none; height:70px;width:70px;border-radius:15px;font-size:15px;border:2px solid rgb(110, 110, 107);text-align:center;display:flex;flex-direction: column;justify-content: center;">
                <a  href="https://www.linkedin.com/in/davedalimocon/" 
                    target="_blank"
                    style="text-decoration: none;">
                        <span class="icon-social-linkedin"
                              style="font-size:1.5rem;"> 
                        </span>
                        <small>linkedin</small>
                </a>
            </div>
            <div style="  height:70px;width:70px;;border-radius:15px ;font-size:15px;border:2px solid rgb(110, 110, 107);text-align:center;display:flex;flex-direction:column;justify-content: center;">
                <a href="https://github.com/mrgreenxgreen"
                target="_blank"
                style="text-decoration: none;"
                >
                    <span class="icon-social-github" 
                          style="font-size:1.5rem;"> 
                         
                    </span>
                    <small>github</small>
                </a>
            </div>
            <div style=" height:70px;width:70px;border-radius:15px;font-size:15px;border:2px solid rgb(110, 110, 107);text-align:center; display:flex;flex-direction:column;justify-content: center;   ">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" style="text-decoration: none;">
                    <span class="icon-envelope"
                          style="font-size:1.5rem;">  
                    </span>
                    <small>email</small>
                </a>
            </div>
        </div>
        <!-- end of bottom right navigation-->
       
        <!-- bottom menu slider-->
        <div class="Projects">
            <a href="https://s3.amazonaws.com/davedalimocon.designs/index.html" target="_blank">
            <div style="word-wrap: break-word;" > <p>Collection of art works</p>
                <img src="Designs-Cover.jpg" alt="design-project" width="295" height="150"/>
                <br/> <small >Static Website <br/> AWS S3 + HTML +  CSS  <br/> </small>
            </div>
             </a>
            <div>2.</div>
            <div>3.</div>
            <div>4.</div>

            </div>
        <!-- end of bottom menu slider-->
    
    </body>
</html>
