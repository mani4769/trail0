<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Benevolent Minds</title>
    <style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: #b7e3f9;
}
.slider {
    position: relative;
    width: 60%;
    overflow: hidden;
}
.images {
    display: flex;
    width: 100%;
}
.images img {
    transition: all 0.15s ease;
}
.images input {
    display: none;
}
.dots {
    display: flex;
    justify-content: center;
    margin: 5px;
}
.dots label {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: solid black 3px;
    cursor: pointer;
    transition: all 0.15s ease;
    margin: 5px;
}
.dots label:hover {background: #005580;}
#img1:checked ~ .m1 {
    margin-left: 0;
}
#img2:checked ~ .m2 {
    margin-left: -100%;
}
#img3:checked ~ .m3 {
    margin-left: -200%;
}
#img4:checked ~ .m4 {
    margin-left: -300%;
}
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#005580;
    padding: 10px 20px;
    color: white;
}

.logo img {
    width: 100px;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}
.nav-links a {
    text-decoration: none;
    color: #005580;
    transition: color 0.3s ease-in;
}
.btn{
    background:#b7e3f9 ;
  border-radius: 999px;
  box-shadow: #ffffff 0 10px 20px -10px;
  box-sizing: border-box;
  color: #005580;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}
.btn:hover{
     transform: scale(1.05) rotate(-1deg);
}
.courses{
    text-decoration: none;
}
.box1{
  
    float: left;
    margin: 0 auto;
  padding: 4px;
  width: 40%;
  border-radius: 20px;
  height: 30vh;
  border: 2px solid black;
}
.box1 img{
    width: 240px;
    display: flex;
    float: left;
}
.box2 {color:#b7e3f9; background-color: #005580;}
.box1 {color:#b7e3f9; background-color: #005580;}
.box2{
  float: right;
  margin: 0 auto;
padding: 4px;
width: 40%;
border-radius: 20px;
height: 30vh;
border: 2px solid black;
}
.box2 img{
    width: 240px;
    display: flex;
    float: left;
}
.links{ padding: 80px; }
/* .boximg{padding: 40px;} */
.links a{
    text-decoration: none;
    color: #005580;
    transition: color 0.3s ease-in;
}
footer{
    margin: 100px 0px;
    display:inline-block;
    background-color: #005580;
    color: #b7e3f9;
    width: 100%;
    height: auto;
}
body, html {
    margin: 0;
    padding: 0;
}

footer {
    background-color: #005580;
    padding: 20px;
}

.footer-links {
    display: flex;
    justify-content: space-around;
}

.footer-links ul {
    list-style-type: none;
    padding: 20px;
}

.footer-links ul li {
    margin-bottom: 10px;

}

.footer-links ul li a {
    text-decoration: none;
    color: #b7e3f9;
    transition: color 0.3s ease-in;
}

.footer-links ul li a:hover {
    color: black;
}
.footer-links ul li a h1 {color: aqua;}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="banevolent.jpg" alt="">
        </div>
        <div>
            <H1>BENEVOLENT MINDS</H1>
        </div>
        <ul class="nav-links">
           <button class="btn" role="button"><li><a href="#">Home</a></li></button>
           <button class="btn" role="button"><li><a href="#">About</a></li></button>
           <button class="btn" role="button"><li><a href="#">Translator</a></li></button>
           <button class="btn" role="button"><li><a href="#">Motivation</a></li></button>
           <button class="btn" role="button"><li><a href="signup.php">Logout</a></li></button> 

        </ul>
    </nav>
    
    <center style="padding: 20px 40px;">
        <div class="slider">
            <div class="images">
                <input type="radio" name="slide" id="img1" checked>
                <input type="radio" name="slide" id="img2">
                <input type="radio" name="slide" id="img3">
                <input type="radio" name="slide" id="img4">
    
                
                <img width="100%" src="logo.jpg" class="m2" alt="img2">
                <img width="100%" src="1.jpg" class="m1" alt="img1">
                <img width="100%" src="text to image.jpg" class="m3" alt="img3">
                
            </div>
            <div class="dots">
                <label for="img1"></label>
                <label for="img2"></label>
                <label for="img3"></label>
            </div>
        </div>
    </center>
    <div class="links">
   <div class="box1">
    <div class="boximg"><img src="Designer (1).png" alt="sam"></div>
    <div class="boxtxt">
        <h1>Image to text:-</h1>
        <p>this below link will translate the live image which is you act the gestures given then this model will translate the image into the text</p>
        <br>
        <button class="btn"><a href="indexs.php">Click</a></button>
        <div id="output">

        </div>
    </div>
    </div>
   <div class="box2">
    <div class="boximg">
    <img src="Designer (2).png" alt="">
    </div>
    <div class="boxtxt">
    <h1>Text to image:-</h1>
    <p>this below link will translate the text you given which is related to sign that translator translates the text into the image of that particular text</p>
        <br>
    <button class="btn" role="button"><a href="#">Click </a></button>
    </div>
   </div><br><br><br>
</div>
   <footer >
    <div class="footer-links">
        <div class="footer-links">
            <ul>
                <li><a href="#"><h1>About Us</h1></a></li>
                <li><a href="teammembers.php">TEAM MEMBERS</a></li>
                <li><a href="teamwork.php">TEAM WORK</a></li>
                <li><a href="#">WORK ASSIGNING</a></li>
                <li><a href="#">IDEA IMPLEMENTATION</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Learnings</h1></a></li>
                <li><a href="https://simple.wikipedia.org/wiki/American_Sign_Language">ASL</a></li>
                <li><a href="https://ieeexplore.ieee.org/document/9489209">HAND GESTURES</a></li>
                <li><a href="https://www.ijraset.com/research-paper/deaf-and-dumb-gesture-recognition-system">VISUAL SIGNAL</a></li>
                <li><a href="https://www.sciencedirect.com/science/article/pii/S1877050915021675/pdf?crasolve=1&r=8547b73cef707f7d&ts=1707771150869&rtype=https&vrr=UKN&redir=UKN&redir_fr=UKN&redir_arc=UKN&vhash=UKN&host=d3d3LnNjaWVuY2VkaXJlY3QuY29t&tsoh=d3d3LnNjaWVuY2VkaXJlY3QuY29t&rh=d3d3LnNjaWVuY2VkaXJlY3QuY29t&re=X2JsYW5rXw%3D%3D&ns_h=d3d3LnNjaWVuY2VkaXJlY3QuY29t&ns_e=X2JsYW5rXw%3D%3D&rh_fd=rrr)n%5Ed%60i%5E%60_dm%60%5Eo)%5Ejh&tsoh_fd=rrr)n%5Ed%60i%5E%60_dm%60%5Eo)%5Ejh&iv=a377cde4c1937c748cc6463330f92128&token=66363733316435336361333131373132633362663135393933316435303766396463623134656661306566373330623238663861633436633233393966373866363065383834313231643836343839323131653639656461366438663a613566633837353535323430386266653462666636306666&text=1395364dcdeee08ba801294cc77eedd85451d47e626ad9f70d1fbf5c519e67a4054280344a46e368111859f3e84dc9480e27673a603cee4caf5099238d3cefc35923fc48ab17e3666c0173ecef6e4e32821eed4734caa1fc5b7553bf3ea2a9ca30dbfe295b4df675cb55196d00143e18c871866fcc657dbe3feeca005fb75a1e3d72140c91116b8b74ebf340051dca0c6c30115b5a69bfe63be55ca164557841f417b879e36711f93ab4227490bf11eebc5d57a1d9f86c2bf883ef372842eba1ff620a5ddb0b03ceaf8ab8e144b18f4a99bd9bbc9e8d555a7d819766ed75b33d7924da654a84319754b5fdfa9f84b89c9f3125e730c905405db6bb91a2496481f40a64501084f856235706585dddd4da55d067317605d28d6ff68feacc9a4fd713b6865d83fad6faa532b118a7676baf&original=3f6d64353d6562353662326666366234346232626262626131613532613938343430326262267069643d312d73322e302d53313837373035303931353032313637352d6d61696e2e706466265f76616c636b3d31">FACIAL EXPRESSION</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Sources</h1></a></li>
                <li><a href="https://www.w3schools.com/python/default.asp">python</a></li>
                <li><a href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                <li><a href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                <li><a href="https://www.w3schools.com/php/default.asp">PHP</a></li>
            </ul>
            <ul>
                <li><a href="#"><h1>Contact us</h1></a></li>
                <li>PHONE NO: 9381017897</a></li>
                <li>PHONE NO-2: 9951127858</a></li>
                <li>E-MAIL: manikantathirumalla342@gmail.com</a></li>
                <li>DETAILS:Benevolent minds is optimized for sign language detection technology<br>can improve accessibility for deaf and hard-of-hearing individuals by enabling comm<br>-unication with hearing individuals who may not understand sign language.</a></li>
                <li>
            </ul>
        </div>
    </div>
   </footer>

</html>