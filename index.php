<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio Two | Electric Boogaloo</title>
</head>
<body>
    <div class="container">
        <div><?php require('components/header.php'); ?></div>
        <div id="myHero">
                <div class="heroText">
                    <h1>Tim <span class="heroSpan">Abrahamson</span></h1>
                    <h3 class="heroSubText">Front-End Web Developer</h3>
                </div>
            </div>
            <a class="downArrow" href="#callToAct"><img class="downArrow" src="img/arrow-down.png" alt="#"></a>
            <div class="contentWrap">
                    <div id="whatIdo">
                        <h2 class="subHeader">What I do:</h2>
                        <p class="aboutMeText">
                            I mostly work on the front end of websites. This includes the basic structure, design, and functionality of a website. I use <span class="textSpan">HTML</span> to construct the sites and to add content. As for the layout and making things look pretty I use <span class="textSpan">CSS</span>. The programming language I use to make objects on the website functional is <span class="textSpan">Javascript</span>. I also frenquent a Javascript library called <span class="textSpan">JQuery</span>. I have experience with the back end as well. I'll use <span class="textSpan">PHP</span> to send and recieve form input data. This information is stored in a database table using <span class="textSpan">mySQL</span>. Together, all of these tools make it possible to create a fully functional website. 
                        </p>
                    </div>
                    <div class="homeGif">
                        <img class="homeGif" src="img/kramet.gif" alt="">
                        <p class="aboutMeText">This is what I look like when I am working.</p>
                    </div>
                <!-- Call to Act -->
                <div id="callToAct">
                    <div id="contactText">
                        <h2 class="subHeader">Contact</h2>
                        <p>
                            Need a website? Want to contact me for spiritual advice? I can only help you with one of those things! Enter your name and email below with a comment and I'll get back to you.
                        </p>
                    </div>
                    <!-- Inputs -->
                    <form id="myForm" method="POST">
                        <input class="formInputs" type="text" name="name" placeholder="Name">
                        <input class="formInputs" type="text" name="email" placeholder="Email">
                        <input class="formInputs" type="tel" name="pNumber" placeholder="Phone Number(Optional)">
                        <textarea class="formInputs" name="message" placeholder="Leave a message"></textarea>
                        <button id="submitButton">Submit</button>
                    </form>
                </div>
            </div>
        <div><?php require('components/footer.php'); ?></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>