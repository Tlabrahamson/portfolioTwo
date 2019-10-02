<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>About Me</title>
</head>
<body>
    <div class="container">
        <div><?php require('components/header.php'); ?></div>
        <div class="contentWrap">
            <div class="aboutMeContent">
                <h2 class="subHeader aboutMeSub">Hello World,</h2>
            <div id="aboutMeImgDiv">
                <img id="aboutMeImg" src="img/me.png" alt="">
            </div>
                <p class="aboutMeText">
                    My name is <span class="textSpan">Tim Abrahamson</span>. I am a full stack web developer, but I am more proficient at front end development. I am always researching new tools to implement in my projects to keep them optimized. I am also a proud father of twin boys so I always have my work cut out for me. These are a few of the tools that I incorporate into my projects:
                </p>
            </div>
            <!-- Divs with list of skills -->
            <div id="skillDiv">
                <div id="skillOne">
                    <img class="skillImg" src="img/html-logo.png"/>
                    <h2 class="subHeader">HTML</h2>
                    <p>
                        HTML works as the backbone on a webpage. It is EZPZ but very useful.
                    </p>
                </div>
                <div id="skillTwo">
                    <img class="skillImg" src="img/css-logo.png"/>
                    <h2 class="subHeader">CSS</h2>
                    <p>
                        I try to make it a point to make sure my websites are both responsive and pretty to look at. CSS is where it is at!
                    </p>
                </div>
    
                <div id="skillThree">
                    <img class="skillImg" src="img/javascript-logo.png"/>
                    <h2 class="subHeader">Javascript</h2>
                    <p>
                        Functionality is crucial when building a website. I use javascript to spice up my pages. There is nothing quite like menu buttons that work! 
                    </p>
                </div>
            </div>
            <div id="skillDivTwo">
                <div>
                    <div class="skillDivTwoText">
                        <img class="skillImg" src="img/php-logo.png" alt="">
                        <h2 class="subHeader">PHP</h2>
                        <p>I mostly use PHP to send and recieve records from a SQL database. It is also useful for form validation!</p>
                    </div>
                </div>
                <div>
                    <div class="skillDivTwoText">
                        <img class="skillImg" src="img/sql-logo.png" alt="">
                        <h2 class="subHeader">SQL</h2>
                        <p>For storing data I use mySQL. I can insert and retrieve information from a database table.</p>
                    </div>
                </div>
            </div>
        </div>
        <div><?php require('components/footer.php'); ?></div>
    </div>
    <script src="js/nav.js"></script>
</body>
</html>