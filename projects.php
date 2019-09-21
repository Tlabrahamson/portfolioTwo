<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>About Me</title>
</head>
<body>
    <div class="container">
        <div><?php require('components/header.php'); ?></div>
        <div class="contentWrap">
            <h2 class="subHeader projectHeader aboutMeSub">A sample of the goods</h2>
            <div id="projectDiv">
                <div class="projectOne">
                    <div class="projectImgOne"></div>
                    <img class="projectImg" src="img/todoListImg.png"/>
                    <p class="imgLabel">
                        This is a Grocery List program that I made using <span class="textSpan">Javascript</span>. It allows you to add items, cross items out, and remove items. You can also toggle between light and dark mode. The layout and basic design was created using <span class="textSpan">HTML</span> and <span class="textSpan">CSS</span>.
                    </p>
                </div>
                <div class="projectTwo">
                    <div class="projectImgTwo"></div>
                    <img class="projectImg" src="img/calcImg.png"/>
                    <p class="imgLabel">
                        This is a calculator app that performs all basic operations. The functionality of the calculator was put together using <span class="textSpan">Javascript</span>. The design is all <span class="textSpan">HTML</span> and <span class="textSpan">CSS</span>.
                    </p>
                </div>
                <div class="projectThree">
                    <div class="projectImgThree"></div>
                    <img class="projectImg" src="img/regApp.png"/>
                    <p class="imgLabel">
                        This is a registration page. The layout was made using <span class="textSpan">HTML</span> and <span class="textSpan">CSS</span>. I used <span class="textSpan">Javascript</span> for form validation as well as sending data to the back end. I also used <span class="textSpan">PHP</span> to insert and return data from a table made in <span class="textSpan">mySQL</span>. 
                    </p>
                </div>
                <div class="projectFour">
                    <div class="projectImgFour"></div>
                    <img class="projectImg" src="img/portfolio.png"/>
                    <p class="imgLabel">
                        This is a single page portfolio design that I made. It was made using <span class="textSpan">HTML</span>, <span class="textSpan">CSS</span>, and <span class="textSpan">Javascript</span>. I used some <span class="textSpan">JQuery</span> to incorporate a smooth scroll when you click on the links. You may notice some similarities between this project and the page you are currently on. 
                    </p>
                </div>
            </div>
        </div>
        <div><?php require('components/footer.php'); ?></div>
    </div>
    <script src="js/nav.js"></script>
</body>
</html>