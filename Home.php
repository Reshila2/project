<?php
 $msg="";
$css_class="";

$conn =mysqli_connect('localhost','root','','lab8');
if(isset($_POST['save-user'])){

  // echo "<pre>",print_r($_FILES['profileImage']['name']),"</pre>";
  $email=$_POST['email'];
  $profileImageName=time().'_'.$_FILES['profileImage']['name'];
  $target= 'images/'.$profileImageName;

  if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)){
    $sql="INSERT INTO users (profile_image,email) values('$profileImageName','$email')";
    if(mysqli_query($conn,$sql)){
      $msg="uploaded";
      $css_class="alert-success";
    }
    else{
    $msg="failed";
    $css_class="aler-dangerous";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/nmp/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="Home.css">

</head>
<style>

@import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

body{
font-family: montserrat;
margin: 0px;
padding: 0px;
}
/* navbar */
nav{
background: #0082e6;
height: 80px;
width: 100%;
}
label.logo{
color: white;
font-size: 35px;
line-height: 80px;
padding: 0 100px;
font-weight: bold;
}
nav ul{
float: right;
margin-right: 20px;
}
nav ul li{
display: inline-block;
line-height: 80px;
margin: 0 5px;
}
nav ul li a{
color: white;
font-size: 17px;
padding: 7px 13px;
border-radius: 3px;
text-transform: uppercase;
}
a.active,a:hover{
background: #1b9bff;
transition: .5s;
}
.checkbtn{
font-size: 30px;
color: white;
float: right;
line-height: 80px;
margin-right: 40px;
cursor: pointer;
display: none;
}
#check{
display: none;
}
/* responsive navbar */
@media (min-width: 952px){
label.logo{
font-size: 3vw;
padding-left: 4vw;
}
nav ul li a{
font-size: 16px;
}
}
@media (max-width: 508px){
.checkbtn{
display: block;
}
ul{
position: fixed;
width: 100%;
height: 100vh;
background: #2c3e50;
top: 80px;
left: -100%;
text-align: center;
transition: all .5s;
}
nav ul li{
display: block;
margin: 50px 0;
line-height: 30px;
}
nav ul li a{
font-size: 20px;
}
a:hover,a.active{
background: none;
color: #0082e6;
}
#check:checked ~ ul{
left: 0;
}
}
/*
ru flag uk flag */
.translate{
background: transparent;
border: none;
margin-left: 12px;
}
/* MainPage */
#backImg{
margin-top: 0px;
width: 100%;
background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/book-quotes-1531945007.jpg?crop=1.00xw:0.753xh;0,0.247xh&resize=1200:*) no-repeat;
background-size: cover;
}
.text-block {
position: absolute;
top: 40%;
left: 55%;
transform: translate(-50%, -50%);
font-size: 100%;
}
.firstPage {
position: relative;
text-align: center;
color: black;
}
#moreI{
position: absolute;
top: 60%;
left: 55%;
transform: translate(-50%, -50%);
}
/* MoreInformation */
.open-button {
background-color: #555;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
opacity: 1;
position: absolute;
top: 55%;
left: 47%;
font-size: 2vw;
width: 18vw;
}
/* The popup form - hidden by default */
.form-popup {
display: none;
position: absolute;
bottom: 10%;
width: 40%;
right: 25%;
border: 1vw;
background-color: white;
z-index: 1000;
}
/* Add styles to the form container */
.form-container {
width: 100%;
height: 50%;
padding: 10%;
background-color: white;
}
/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
border: none;
background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
background-color: #ddd;
outline: none;
}
/* Set a style for the submit/login button */
.form-container .btn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
width: 100%;
margin-bottom:10px;
opacity: 0.8;
}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
opacity: 1;
}
.container {
color: #333;
margin: 0 auto;
text-align: center;
}
/* video */
.evideo{
width: 55vw;
height: 30vw;
}
.text2{
text-align: center;
}
.text1{
margin-left: 8vw;
}
/* cards */
.cards {
display: flex;
flex-wrap: wrap;
list-style: none;
margin: 0;
padding: 0;
}
.cards_item {
display: flex;
padding: 1rem;
}
@media (min-width: 40rem) {
.cards_item {
width: 50%;
}
}
@media (min-width: 56rem) {
.cards_item {
width: 33.3333%;
}
}
.card {
background-color: white;
border-radius: 0.25rem;
box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
display: flex;
flex-direction: column;
overflow: hidden;
}
.card-image{
width: 1vw;
height: 1vw;
}
.card_content {
padding: 1rem;
background: linear-gradient(to bottom left, #312d2d 40%, #2e2622 100%);
}
.card_title {
color: #ffffff;
font-size: 1.1rem;
font-weight: 700;
letter-spacing: 1px;
text-transform: capitalize;
margin: 0px;
}

.card_text {
color: #ffffff;
font-size: 0.875rem;
line-height: 1.5;
margin-bottom: 1.25rem;    
font-weight: 400;
}
.moretext{
display: none;
font-size: 1.0vw;
color:white;
}
#more1{
display: none;
font-size: 1.0vw;
color:white;

}
#more2{
display: none;
font-size: 1.0vw;
color:white;

}
#more3{
display: none;
font-size: 1.0vw;
color:white;

}
#myBtn2{
text-align: center  ;
}
#myBtn{
text-align: center  ;
}
#myBtn1{
text-align: center  ;
}
.main{
background-color: #ecf9ff;
}
/* section for footer */
.social{
  font-size:2vw;
  display: block;
  text-align:center;
}
.footer-bs {
background-color: #3c3d41;
padding-top:2.5vw;
padding-left:2vw;
padding-right:2vw;

height:30vw;
color: rgba(255,255,255,1.00);
margin-bottom: 20px;
border-bottom-right-radius: 6px;
border-top-left-radius: 0px;
border-bottom-left-radius: 6px;
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
.footer-bs .footer-brand h2 { margin:0px 0px 10px; }
.footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

.footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.pages li { padding:5px 0px;}
.footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
.footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
.footer-bs .footer-nav h4 {
font-size: 11px;
text-transform: uppercase;
letter-spacing: 3px;
margin-bottom:0px;
}

.footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.list li { padding:5px 0px;}
.footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
.footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

.footer-bs .footer-social ul { list-style:none; padding:0px; }
.footer-bs .footer-social h4 {
font-size: 1.2vw;
text-transform: uppercase;
letter-spacing: 0.3vw;
}
.footer-bs .footer-social li { padding:5px 4px;}
.footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
.footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

.footer-bs .footer-ns h4 {
font-size: 11px;
text-transform: uppercase;
letter-spacing: 3px;
margin-bottom:0px;
}
.footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

@media (min-width: 768px) {
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
}

#profileDisplay{
display:block;
width:70%;
margin:1.5vw auto;
border-radius:10%;
}
</style>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">EduCenter</label>
    <ul>
      <li><a class="active lang" key="mainP" href="#">Главная</a></li>
      <li><a href="#" class="lang" key="unt">ЕНТ</a></li>
      <li><a href="#" class="lang" key="posSide">Наши Фишки</a></li>
      <li><a href="#" class="lang" key="about_us">О нас</a></li>
      <li><a href="#" class="lang" key="contacts">Контакты</a></li>
      <li class="header-item-lang-en"><button id="en" class="translate">
        <img src="uk.png" alt="uk" style="width: 40px;height: 30px;"></button></li>
      <li class="header-item-lang-ru"><button id="ru" class="translate"><img src="ru.png" alt="ru" style="width: 40px;height: 30px;">     </button></li>

    </ul>
  </nav>
  <section class="firstPage" >
    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/book-quotes-1531945007.jpg?crop=1.00xw:0.753xh;0,0.247xh&resize=1200:*" class="img-responsive" id="backImg" alt="">
    <div class="text-block">
      <p style="font-size:3vw;" class="lang" key="text1">Выиграй грант в университет мечты!</p>
      <p style="font-size:2.5vw;" class="lang" key="text2">Образование и не только.</p>
    </div>
    <button class="open-button lang"  key="more" onclick="openForm()">Подробнее</button>
    <div class="form-popup" id="myForm">
      <button type="button" style="float: right;" class="btn cancel" onclick="closeForm()">Х</button>
      <form action="/action_page.php" class="form-container">
        <h1 style="font-size:1.6vw;margin-top: -0.3vw;float: left;" class="lang" key="forma1">Ответим на все вопросы
        </h1>
        <hr>
        <label for="name" class="lang" key="forma2"><b>Имя</b></label>
        <input type="text" class="lang" key="forma22" placeholder="Ваше имя" name="name" required>
        
        <label for="phone" class="lang" key="forma3"><b>Электронная почта</b></label>
        <input type="text" class="lang" key="forma33" placeholder="example@example.com" name="phone" required>
        <button type="button" class="btn btn-info lang"  key="forma4">Отправить</button>
      </form>
    </div>
  </section>

  <section class="main" >
    <hr >
    <div class="w3-row">
      <div class="w3-col w3-container m7 l5 ">
        <div class=text>
        
              <h2 class="text1 lang"  key="text11">Высшое образование</h2>
              <p class="text2 lang" key="unt"><i>E H T</i></p>
              <p class="text3 lang"  key="text22">Единое национальное тестирование (каз. Ұлттық бірыңғай тестілеу; сокр. ЕНТ каз. ҰБТ) — система оценки знаний выпускников, применяемая в Республике Казахстан. Результаты ЕНТ признаются вузами в качестве результатов вступительных экзаменов. Баллы ЕНТ также имеют значение при присуждении Президентской стипендии «Болашак».Граждане Казахстана имеют право на присуждение на конкурсной основе международной стипендии «Болашак» для обучения за рубежом[14]. По окончании ВУЗа выпускник получает степень бакалавра (4 года), специалиста (5 лет) или магистра (6 лет). Второе высшее образование[15] в Казахстане получают только на платной основе с ускоренным сроком обучения (2-3 года).
              </p>
            </div>
          </div>
          
          <div class="w3-col w3-container m5  l5">  
            <iframe class="evideo"     src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
            </iframe>
          </div>
        </div>
      </div>
    <hr>
    <div class="main">
      <h1 style="text-align: center;" class="lang" key="last_news">Последние новости</h1>
      <ul class="cards">
        
        <li class="cards_item">
          <div class="card">
                <div class="card_content">
                  <h2 class="card_title lang" key="post1">3 </h2>
                  <hr>
                  <p class="card_text lang" key="post26">Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:</p>
                  <span id="dots1">...</span><span id="more1">
                    - тестируемый может выбрать место, день и время тестирования;<br>
                    - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                    - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                    - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                    - выдача результатов сразу после завершения тестирования;<br>
                    - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                  </span>
                  <button onclick="myFunction1()"  class="btn btn-info lang"  style="margin-left: 8vw;margin-top:3vw" id="myBtn1">Read more</button>
                </p>
                  
                </div>
              </div>
             </li>  
 
              <li class="cards_item">
          <div class="card">
                <div class="card_content">
                  <h2 class="card_title lang" key="post1">2</h2>
                  <hr>
                  <p class="card_text lang" key="post26">2/Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:</p>
                  <span id="dots2">...</span><span id="more2">
                    - тестируемый может выбрать место, день и время тестирования;<br>
                    - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                    - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                    - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                    - выдача результатов сразу после завершения тестирования;<br>
                    - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                  </span>
                  <button onclick="myFunction2()"  class="btn btn-info lang"  style="margin-left: 8vw;margin-top:3vw" id="myBtn2">Read more</button>
                </p>
                  
                </div>
              </div>
             </li> 
              <li class="cards_item">
          <div class="card">
                <div class="card_content">
                  <h2 class="card_title lang" key="post1">1</h2>
                  <hr>
                  <p class="card_text lang" key="post26">1/Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:</p>
                  <span id="dots3">...</span><span id="more3">
                    - тестируемый может выбрать место, день и время тестирования;<br>
                    - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                    - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                    - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                    - выдача результатов сразу после завершения тестирования;<br>
                    - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                  </span>
                  <button onclick="myFunction3()"  class="btn btn-info lang"  style="margin-left: 8vw;margin-top:3vw" id="myBtn3">Read more</button>
                </p>
                </div>
              </div>
             </li>       
        </ul>
      </div>
    </section> 
    <div class="">

    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2>EduCenter</h2>
                <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?.</p>
                <p>© 2021 All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4 style="text-align:center">- Menu -</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">UNT</a></li>
                        <li><a href="#">Advantages</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">

                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Helps</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4 style="text-align:center">Follow Us</h4>
            	<ul class="social">
              <li> <i class="fa fa-facebook" aria-hidden="true"></i></li>
                 <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                  <li><i class="fa fa-instagram" style="" aria-hidden="true"></i></li>
                  <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                  
                  <li> <i class="fa fa-vk" aria-hidden="true"></i></li> 
                </ul>
          </div>
          <div class="col-md-3 footer-ns animated fadeInRight">
          <h4 style="text-align:center">Newsletter</h4>
              <div class=" form-group text-center col-12 offset-md-0 form-div">
              <form action="Home.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <img src="images\placeholder.png" onclick="triggerClick()" id="profileDisplay"  alt="">
              <input type="file" name="profileImage" id="profileImage"  style="display:none" onchange="displayImage(this)" class="form-control"></div>
              <div class="form-group">
              <input type="text" name="email" id="email" placeholder="example@email.com" class="form-control">
              <span  class="input-group-btn">
              <button class="btn btn-primary btn-block" name="save-user" type="submit"><span class="glyphicon glyphicon-envelope"></span> </button></span>
              </div>
              </form>
              </div>
          
          </div>	
    </footer>
    <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://enfoplus.net">Izzatullayev Alisher</a></p></section>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script >
function triggerClick(){
document.querySelector('#profileImage').click(); 
}
function displayImage(e){
if(e.files[0]){
var reader=new FileReader();

reader.onload=function(e){
  document.querySelector('#profileDisplay').setAttribute('src',e.target.result); 
} 
reader.readAsDataURL(e.files[0]);
}
}
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}
function myFunction1() {
var dots = document.getElementById("dots1");
var moreText = document.getElementById("more1");
var btnText = document.getElementById("myBtn1");

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
function myFunction2() {
var dots = document.getElementById("dots2");
var moreText = document.getElementById("more2");
var btnText = document.getElementById("myBtn2");

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
$(document).ready(function () {
$("#myBtn").click(function () {
  $(this).prev().slideToggle();
  if ($(this).text() == "Read more") {
      $(this).text("Read Less");
  } else {
      $(this).text("Read More");
  }
});
});
function myFunction3() {
var dots = document.getElementById("dots3");
var moreText = document.getElementById("more3");
var btnText = document.getElementById("myBtn3");

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
function like_update(id){
  jQuery.ajax({
    url:'update_count.php',
    type:'post',
    data:'type=like&id='+id,
    success:function(result){
      var cur_count=jQuery('#like_loop_'+id).html();
      cur_count++;
      jQuery('#like_loop_'+id).html(cur_count);
  
    }
  });
}	

function dislike_update(id){
  jQuery.ajax({
    url:'update_count.php',
    type:'post',
    data:'type=dislike&id='+id,
    success:function(result){
      var cur_count=jQuery('#dislike_loop_'+id).html();
      cur_count++;
      jQuery('#dislike_loop_'+id).html(cur_count);
  
    }
  });
}	
//localization
var arrLang = {
'en': {
'mainP':'Home',
    'unt':'UNT',
    'posSide':'Advantages',
    'about_us':'About us',
    'contacts':'Contacts',
    'text1':'Win a grant to the dream university!',
    'text2':'More than education',
    'forma1':'We will answer all questions',
    'forma2':' Name',
    'forma3':'Email',
    'forma4':'Submit',
    'forma22':'Your name',
    'forma33':'example@example.com',
    'more':'More about',
    'text11':'Higher education',
    'text22':'Unified national testing is a system for assessing the knowledge of graduates used in the Republic of Kazakhstan. UNT results are recognized by universities as results of entrance exams. UNT points are also important when awarding the Bolashak Presidential Scholarship. Citizens of Kazakhstan have the right to be awarded on a competitive basis the Bolashak International Scholarship for studying abroad [14]. Upon graduation from the university, the graduate receives a bachelor s degree (4 years), a specialist (5 years) or a master s degree (6 years). The second higher education [15] in Kazakhstan is received only on a paid basis with an accelerated period of study (2-3 years).',
    'last_news':'Last News',
    'post1':'For the first time in history, the Unified National Testing (UNT) will be conducted in electronic format from March 10 to April 10, 2021.',
    'post26':'Testing will be held on the principle "one tested - one computer - one camera". The electronic testing format has several advantages:',
    'more_card1':' the test taker can choose the place, day and time of testing the possibility of adjusting his application for participation (changing the language, change items) .Correction of erroneous answers (which is impossible in the case of painting a sheet of paper) .The availability of the calculator and auxiliary tables (Mendeleev `s and the solubility of salts).The issuance of results immediately after the completion of testing.The ability to appeal immediately after the completion of testing.',
    'read':'Read more',
    'like':'Like',
    'dislike':'Dislike',
    
},
'ru': {
'mainP':'Главная',
    'unt':'ЕНТ',
    'posSide':'НАШИ ФИШКИ',
    'about_us':'О НАС',
    'contacts':'КОНТАКТЫ',
    'text1':'Выиграй грант в университет мечты!',
    'text2':'Образование и не только.',
    'more':'Подробнее',
    'forma1':'Ответим на все вопросы',
    'forma2':' Имя',
    'forma3':'Электронная почта',
    'forma4':'Отправить',
    'forma22':'Ваше имя',
    'forma33':'example@example.com',
    'text11':'Высшое образование',
    'text22':' Единое национальное тестирование— система оценки знаний выпускников, применяемая в Республике Казахстан. Результаты ЕНТ признаются вузами в качестве результатов вступительных экзаменов. Баллы ЕНТ также имеют значение при присуждении Президентской стипендии «Болашак».Граждане Казахстана имеют право на присуждение на конкурсной основе международной стипендии «Болашак» для обучения за рубежом[14]. По окончании ВУЗа выпускник получает степень бакалавра (4 года), специалиста (5 лет) или магистра (6 лет). Второе высшее образование[15] в Казахстане получают только на платной основе с ускоренным сроком обучения (2-3 года).',
    'last_news':'Последние новости',
    'post1':'Единое Национальное Тестирование (ЕНТ) Впервые В Истории Будет Проводиться В Электронном Формате С 10 Марта По 10 Апреля 2021 Года.',
    'post26':'Тестирование Пройдет По Принципу «Один Тестируемый – Один Компьютер – Одна Камера». Электронный Формат Тестирования Имеет Ряд Преимуществ:',
    'read':'Читать',
    'more_card1':'- тестируемый может выбрать место, день и время тестирования  .Bозможность корректировки своего заявления на участие (изменение языка, предметов сдачи).Исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно).Доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей).Выдача результатов сразу после завершения тестирования.Возможность подать на апелляцию сразу же после завершения тестирования.',
    'like':'Нравиться',
    'dislike':'Не нравиться',
}
}


$(function() {
$('.translate').click(function() {
  var lang = $(this).attr('id');

  $('.lang').each(function(index, item) {
    $(this).text(arrLang[lang][$(this).attr('key')]);
  });
});
});
</script>

</body>
</html>